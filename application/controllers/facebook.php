<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  
  class Facebook extends CI_Controller {
    function __construct(){
        parent :: __construct();
        $this->load->model('facebook_model');
    }
    
    function index(){
//        $id = $this->user_model->get_user_id($data);
//				$loginData['login'] = true;
//				$loginData['userid'] = $data['userid'];
//				$loginData['id'] = $id->id;
//				$loginData['firstname'] = $id->first_name;
//				$this->session->set_userdata($loginData);
//				redirect("popular");
      $fb_data = $this->session->userdata('fb_data');
      print_r($fb_data); exit;
    }
  }

?>