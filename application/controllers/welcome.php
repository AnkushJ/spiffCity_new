<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
      parent :: __construct();
			$this->load->model('Facebook_model');
			$this->load->model('user_model');
  }
	
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	
	public function index()
	{
		$fb_data = $this->session->userdata('fb_data'); // This array contains all the user FB information
		$data = array(
							'fb_data' => $fb_data,
							);
		if($this->session->userdata('login')){
				// If this is a protected section that needs user authentication
				// you can redirect the user somewhere else
				// or take any other action you need
				
			redirect('popular');	
		}
		$this->load->view('home', $data);
	}
	
	
	public function signup(){
    $data = array(
                  'userid' => $this->input->post('username') ,
                  'email' => $this->input->post('email') ,
                  'password' => $this->input->post('password'));
 		$date	= date("Y-m-d");
    $data['created_date']	= $date;
		$data['modified_date']	= $date;
    $data['msg'] = $this->user_model->save_user($data);
		if($data['msg'] === true){
			$userdata['userid'] = $this->input->post('username');
			$userdata['password'] = $this->input->post('password');
			$id = $this->user_model->get_user_id($userdata);
			$loginData['login'] = true;
			$loginData['userid'] = $data['userid'];
			$loginData['id'] = $id->id;
			$loginData['first_name'] = $id->first_name;
			$loginData['fb'] = false;
			$this->session->set_userdata($loginData);
			redirect('popular');
		}
		else{
      $this->session->set_flashdata('errorSignUp', 'User account was not created. Please try again.');
			redirect('welcome');
		}
  }
	
	
	public function signin(){
		$this->load->model('user_model');
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
		if ($this->form_validation->run()){
			$data['userid'] = $this->input->post('username');
			$data['password'] = $this->input->post('password');
			$userExist = $this->user_model->chk_user_exists($data);
			if($userExist){
				$id = $this->user_model->get_user_id($data);
				$loginData['login'] = true;
				$loginData['userid'] = $data['userid'];
				$loginData['id'] = $id->id;
				$loginData['first_name'] = $id->first_name;
				$loginData['fb'] = false;
				$this->session->set_userdata($loginData);
				redirect("popular");
			 }
			else{
				$this->session->set_flashdata('error', 'Invalid username or password!!!');
				redirect('welcome');
			}
		}
  }
	
	function signout(){
	  unset($this->session->userdata);  
    $this->session->set_flashdata('error', 'Sign out');
		redirect('welcome');
	}
		
		
	/*
	*@method check_email_availability used to check whether email availabile for registration or not.
	*@return json
	*/
	function check_email(){
		$email = $this->input->post('user_email');
		$result = $this->user_model->check_email_available($email);
		header('Content-Type: application/json');
		echo json_encode( array("success" => $result));exit;
	}
		
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */