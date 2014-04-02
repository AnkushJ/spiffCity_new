<?php
  class Signup extends CI_Controller {
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
      $this->load->helper('html');
    }

    public function index(){
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
			//$this->form_validation->set_message('is_unique', 'entered value alredy exists');
      $this->form_validation->set_rules($config);
      if ($this->form_validation->run() == FALSE){
        $this->load->view('home',$data);
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
    
    public function inserts(){
      $config = array(
                 array(
                       'field'   => 'firstname', 
                       'label'   => 'firstname', 
                       'rules'   => 'required|alpha_numeric'
                    ),
                 array(
                       'field'   => 'lastname', 
                       'label'   => 'lastname', 
                       'rules'   => 'required|alpha_numeric'
                    ),    
                 array(
                       'field'   => 'address', 
                       'label'   => 'address', 
                       'rules'   => 'required'
                    ),   
                 array(
                       'field'   => 'email', 
                       'label'   => 'Email', 
                       'rules'   => 'required|valid_email|is_unique[username.email]'
                    ),
                 array(
                       'field'   => 'password', 
                       'label'   => 'password', 
                       'rules'   => 'required|min_length[5]|max_length[12]|matches[confPswd]'
                    ),
                 array(
                       'field'   => 'confPswd', 
                       'label'   => 'confPswd', 
                       'rules'   => 'required'
                    ),
                 array(
                       'field'   => 'gender', 
                       'label'   => 'gender', 
                       'rules'   => 'required'
                    ),
                 array(
                       'field'   => 'dob', 
                       'label'   => 'dob', 
                       'rules'   => 'required'
                    ),
                 array(
                       'field'   => 'zip', 
                       'label'   => 'zip', 
                       'rules'   => 'required|exact_length[6]|numeric'
                    ),
                 array(
                       'field'   => 'mobile', 
                       'label'   => 'mobile', 
                       'rules'   => 'required|exact_length[10]|numeric'
                    ),
              );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE){
          $this->load->view('templates/header');
          $this->load->view('tests/add_user');
          $this->load->view('templates/footer');
        }
        else{
            $data = array(
                    'firstname' => $this->input->post('firstname') ,
                    'lastname' => $this->input->post('lastname') ,
                    'address' => $this->input->post('address') ,
                    'email' => $this->input->post('email') ,
                    'password' => $this->input->post('password') ,
                    'gender' => $this->input->post('gender') ,
                    'dob' => $this->input->post('Year') ."-". $this->input->post('Month') ."-". $this->input->post('Day') ,
                    'zipcode' => $this->input->post('zip') ,
                    'mobileno' => $this->input->post('mobile'));
          $date	= date("Y-m-d");
          $data['userCreatedOn']	= $date;
          $data['userUpdatedOn']	= $date;
          $data['msg'] = $this->test_model->add_data($data);
          $this->load->view('templates/header');
          $this->load->view('tests/success');
          $this->load->view('templates/footer');
        }
    }
  }
?>