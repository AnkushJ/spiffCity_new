<?php
  class Facebook_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        
        $config = array(
                        'appId'  => '1422673491318950',
                        'secret' => 'e2cbeb3baaaab516f89ea8aafca7e8a5',
                        'fileUpload' => true, // Indicates if the CURL based @ syntax for file uploads is enabled.
                        );
        $this->load->library('Facebook', $config);
        $user = $this->facebook->getUser();
        // We may or may not have this data based on whether the user is logged in.
        // If we have a $user id here, it means we know the user is logged into Facebook, 
        // but we don't know if the access token is valid. An access
        // token is invalid if the user logged out of Facebook.
        $profile = null;
        if($user)
        {
            try {
                $user_profile = $this->facebook->api('/me','GET');
                //print_r($user_profile);exit;
                // Proceed knowing you have a logged in user who's authenticated.
                $this->session->set_userdata('login',true);
                $this->session->set_userdata('fb',true);
                $profile = $this->facebook->api('/me?fields=id,username,name,first_name,last_name,link,email,birthday');
            } catch (FacebookApiException $e) {
                error_log($e);
                $user = null;
            }
        }
        $params = array( 'next' => base_url('welcome') );
        $fb_data = array(
                        'me' => $profile,
                        'uid' => $user,
                        'loginUrl' => $this->facebook->getLoginUrl(
                            array(
                                'scope' => 'email,user_birthday,publish_stream', // app permissions
                                'redirect_uri' => 'http://localhost/spiffCity/popular' // URL where you want to redirect your users after a successful login
                            )
                        ),
                        'logoutUrl' => $this->facebook->getLogoutUrl($params),
                    );
        //print_r($fb_data);exit;
        $this->session->set_userdata('fb_data', $fb_data);
        //print_r($this->session->userdata('fb_data')); exit;
    }
  }
?>