<?php
  class Terms extends CI_Controller {
    function __construct()
    {
      parent:: __construct();
      $this->load->helper('captcha');
      $this->load->model('sms_model');
      $this->load->helper('html');
    }
    
    public function index(){
      $this->load->view('terms');
    }
  }
?>