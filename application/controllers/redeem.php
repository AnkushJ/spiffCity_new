<?php

  class Redeem extends CI_Controller{
    public function __construct(){
      parent:: __construct();
      if(!$this->session->userdata('login')){
        $this->session->set_flashdata('error','Please login first');
	      redirect("welcome");    
      }
      $this->load->helper('url');
      $this->load->model('coupons_model');
    }
    
    public function index(){
      $data['coupons_data'] = $this->coupons_model->get_coupons_details();
      $this->load->view('dashboard_navbar');
      $this->load->view('redeem', $data);
      $this->load->view('dashboard_footer');
    }
  }

?>