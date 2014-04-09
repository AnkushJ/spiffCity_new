<?php
  class SignIn extends CI_Controller {
    function __construct()
    {
      parent::__construct();
      if($this->session->userdata('logged_user_in') == TRUE) {
        redirect('profile');
        break;
      }
      $this->load->helper('captcha');
      $this->load->model('user_model');
      $this->load->model('sms_model');
      $this->load->helper('form','html', 'url');
    }
    
    public function index(){
      $data['userid'] = "";
      $data['email'] = "";
      $data['password'] = "";
      $this->load->view('signin',$data);
    }
    
    public function signin(){
      if($this->input->post('hiddenPage') == 'page')
        $page = "welcome";
      else
        $page = "signIn";
      $config = array(
                 array(
                       'field'   => 'username', 
                       'rules'   => 'required'
                    ),
                 array(
                       'field'   => 'password', 
                       'rules'   => 'required'
                    )
                );
      $this->form_validation->set_rules($config);
      if ($this->form_validation->run() == FALSE){
        $this->session->set_flashdata('error', 'Fields cannot be blank ');
        redirect($page);
      }
      else{
        $data['userId'] = $this->input->post('username');
        $data['userPassword'] = $this->input->post('password');
        $userExist = $this->user_model->chk_user_exists($data);
        
        if($userExist === true){
          redirect("http://rosycontact.com/spiff1/popular_after_log.html");
        }
        else{
          $this->session->set_flashdata('error', 'Invalid username or password!!!');
          redirect($page);
        }
      }
    }
    
    public function signup(){
      $config = array(
                 array(
                       'field'   => 'username', 
                       'label'   => 'username', 
                       'rules'   => 'required|alpha_numeric|is_unique[sp_users.userid]|max_length[10]|min_length[4]'
                    ),
                  
                 array(
                       'field'   => 'email', 
                       'label'   => 'email', 
                       'rules'   => 'required|valid_email|is_unique[sp_users.email]'
                    ),
                 array(
                       'field'   => 'password', 
                       'label'   => 'password', 
                       'rules'   => 'required|min_length[5]|max_length[12]|matches[confPassword]'
                    ),
                 array(
                       'field'   => 'confPassword', 
                       'label'   => 'confPassword', 
                       'rules'   => 'required'
                    ));
      $data = array(
                  'userid' => $this->input->post('username') ,
                  'email' => $this->input->post('email') ,
                  'password' => $this->input->post('password'));
			$this->form_validation->set_message('is_unique', 'entered value already exists');
      $this->form_validation->set_rules($config);
      if ($this->form_validation->run() == FALSE){
        $this->load->view('signin',$data);
      }
      else{
          $data = array(
                  'userid' => $this->input->post('username') ,
                  'email' => $this->input->post('email') ,
                  'password' => $this->input->post('password'));
 				$date	= date("Y-m-d");
        $data['userCreatedOn']	= $date;
				$data['userUpdatedOn']	= $date;
        //$data['msg'] = $this->test_model->add_data($data);
        //$this->load->view('login');
				redirect('http://rosycontact.com/spiff1/popular_after_log.html');
      }
    }
    
    
  }
?>