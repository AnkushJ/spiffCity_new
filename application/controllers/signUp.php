<?php
  class Signup extends CI_Controller {
    function __construct()
    {
      parent::__construct();

      $this->load->helper('captcha');
      $this->load->model('user_model');
      $this->load->model('sms_model');
      $this->load->helper('html');
    }

    public function index(){
          $data = array(
                  'userid' => $this->input->post('username') ,
                  'email' => $this->input->post('email') ,
                  'password' => $this->input->post('password'));
 				$date	= date("Y-m-d");
        $data['created_date']	= $date;
				$data['modified_date']	= $date;
        $data['msg'] = $this->user_model->save_user($data);
				if($data['msg'] === true){
					$data['logged_in'] = true;
					$this->session->set_userdata($data);
					redirect('http://rosycontact.com/spiff1/popular_after_log.html');
				}
				else{
          $this->session->set_flashdata('errorSignUp', 'User account was not created. Please try again.');
					redirect('welcome');
				}
    }
		
//		public function signup(){
//      $config = array(
//                 array(
//                       'field'   => 'username', 
//                       'label'   => 'username', 
//                       'rules'   => 'required|alpha_numeric|is_unique[sp_users.userid]|max_length[10]|min_length[4]'
//                    ),
//                  
//                 array(
//                       'field'   => 'email', 
//                       'label'   => 'email', 
//                       'rules'   => 'required|valid_email|is_unique[sp_users.email]'
//                    ),
//                 array(
//                       'field'   => 'password', 
//                       'label'   => 'password', 
//                       'rules'   => 'required|min_length[5]|max_length[12]|matches[confPassword]'
//                    ),
//                 array(
//                       'field'   => 'confPassword', 
//                       'label'   => 'confPassword', 
//                       'rules'   => 'required'
//                    ));
//      $data = array(
//                  'userid' => $this->input->post('username') ,
//                  'email' => $this->input->post('email') ,
//                  'password' => $this->input->post('password'));
//			$this->form_validation->set_message('is_unique', 'entered value already exists');
//      $this->form_validation->set_rules($config);
//      if ($this->form_validation->run() == FALSE){
//        $this->load->view('signin',$data);
//      }
//      else{
//          $data = array(
//                  'userid' => $this->input->post('username') ,
//                  'email' => $this->input->post('email') ,
//                  'password' => $this->input->post('password'));
// 				$date	= date("Y-m-d");
//        $data['userCreatedOn']	= $date;
//				$data['userUpdatedOn']	= $date;
//        //$data['msg'] = $this->test_model->add_data($data);
//        //$this->load->view('login');
//				redirect('http://rosycontact.com/spiff1/popular_after_log.html');
//      }
//    }
    
		public function signin(){

        $data['userid'] = $this->input->post('username');
        $data['password'] = $this->input->post('password');
        $userExist = $this->user_model->chk_user_exists($data);
        if($userExist){
					$this->session->set_userdata('login','yes');
	        redirect("welcome");
        }
        else{
          $this->session->set_flashdata('error', 'Invalid username or password!!!');
          redirect('welcome');
        }
      //}
    }
		
		function signout(){
			$this->session->set_userdata('login','no');
			 unset($this->session->userdata);  
      $this->session->set_flashdata('error', 'Sign out');
			redirect('welcome');
		}
		
		
		/*
    *@method check_email_availability used to check whether email availabile for registration or not.
    *@return json
    */
    function check_email_availability(){
      $email = $this->input->post('user_email');   
      $result = $this->user_model->check_email($email);
      header('Content-Type: application/json');
      echo json_encode( array("success" => $result));exit;
    }
		
		
		/*
    *@method check_username_availability used to check whether username availabile for registration or not.
    *@return json
    */
    function check_username_availability(){
      $usr = $this->input->post('user');   
      $result = $this->user_model->chk_username_availability($usr);
      header('Content-Type: application/json');
      echo json_encode( array("success" => $result));exit;
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
          //$this->load->view('templates/header');
          //$this->load->view('tests/add_user');
          //$this->load->view('templates/footer');
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
          //$data['msg'] = $this->test_model->add_data($data);
          //$this->load->view('templates/header');
          //$this->load->view('tests/success');
          //$this->load->view('templates/footer');
        }
    }
  }
?>