<?php
  /*
  * Spiffcity
  * Dashboard Controller
  * @package spiffcity
  */
  class Dashboard extends CI_Controller{
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
    }
    /*
    * Index
    * @method array used to get user's profile data from database and displaying it.
    */
    function index(){
      $user_id = $this->session->userdata('id');
			$data['user_data'] = $this->user_model->get_user_by_id($user_id);
      $this->load->view('dashboard_navbar');
      $this->load->view('dashboard_user',$data);
      $this->load->view('dashboard_footer');
    }
    
    function invite(){
      
    }
  }
?>