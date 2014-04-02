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
      $this->load->helper('html');
    }
    
    public function index(){
      $this->load->view('signin');
    }
  }
?>