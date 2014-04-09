<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
      parent :: __construct();
			$this->load->model('Facebook_model');
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
		if(($fb_data['me']) or ($this->session->userdata('login')))
		{	//print_r($this->session->all_userdata());exit;

				// If this is a protected section that needs user authentication
				// you can redirect the user somewhere else
				// or take any other action you need
				//redirect('');
				$data = array(
							'fb_data' => $fb_data,
							);
			redirect('popular');	
		}
		else
		{
			$data = array(
							'fb_data' => $fb_data,
							);
			$this->load->view('home',$data);
		//	$this->load->view('home', $data);
		}
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
			$loginData['login'] = true;
			$loginData['userid'] = $data['userid'];
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
				$loginData['firstname'] = $id->first_name;
				$this->session->set_userdata($loginData);
				console.log($loginData);
				console.log('without fb');
				redirect("popular");
			 }
			else{
				$this->session->set_flashdata('error', 'Invalid username or password!!!');
				redirect('welcome');
			}
		}
  }
	
	function signout(){
		//$this->session->set_userdata('login','no');
	  unset($this->session->userdata);  
    $this->session->set_flashdata('error', 'Sign out');
		redirect('welcome');
	}
		
		
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */