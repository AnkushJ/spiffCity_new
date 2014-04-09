<?php
  class About extends CI_Controller {
    function __construct()
    {
      parent::__construct();
//      if(!$this->session->userdata('login')){
//        $this->session->set_flashdata('error','please login first');
//	      redirect("welcome");    
//      }
      $this->load->helper('captcha');
      $this->load->model('sms_model');
      $this->load->helper('html');
    }
    
    public function index(){
      $this->load->view('about');
    }
  }
?>