<?php
  /*
  * Spiffcity
  * Friends Controller
  * @package spiffcity
  */
  class Friends extends CI_Controller{
    /*
    * __construct
    * @method void used to call parent constructor.
    */
    function __construct(){
      parent::__construct();
      if(!$this->session->userdata('login')){
				redirect('welcome');
			}
      $this->load->model('user_model');
			$this->load->model('Facebook_model');
      $this->load->helper(array('form', 'url'));
			$this->load->library('email');
    }
    /*
    * Index
    * @method array used to get user's friends data from database and displaying it.
    */
    function index(){
      $user_id = $this->session->userdata('id');
			$data['user_data'] = $this->user_model->get_user_friends($user_id);
      $this->load->view('dashboard_navbar');
      $this->load->view('friend/friends',$data);
      $this->load->view('dashboard_footer');
    }
    
		
		function unfriend(){
			
		}
		
		function send_invitation_email(){
			$config['protocol'] = 'sendmail';
			$config['mailpath'] = '/usr/sbin/sendmail';
			$config['charset'] = 'utf-8';
			$config['wordwrap'] = TRUE;
			$this->email->initialize($config);
			$this->email->set_newline("\r\n");
			$this->email->from('ankush.joshi45@gmail.com', 'Ankush');
			$this->email->to('ankush.joshi@wwindia.com');
			$this->email->subject(' My mail through codeigniter from localhost '); 
			$this->email->message('Hello World…');
			if (!$this->email->send()) {
				show_error($this->email->print_debugger()); }
			else {
				echo 'Your e-mail has been sent!';
			}
		}
		
    /*
    * Invitation
    * @method array used to display user's friends invitation page .
    */
//    
//    function invitation(){
//			$this->load->view('dashboard_navbar');
//			$this->load->view('friend/invite_friends');
//      $this->load->view('dashboard_footer');
//    }
  }
?>