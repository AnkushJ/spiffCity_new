<?php
 
  class Popular extends CI_Controller{
    function __construct(){
      parent :: __construct();
      $this->load->model('Facebook_model');
      $this->load->model('user_model');
      $this->load->model('crowdcast_model');
      $this->load->helper('array');
      
      if((!$this->session->userdata('login')) and (!$fb_data['me']) ){
        $this->session->set_flashdata('error','please login first');
	      redirect("welcome");    
      }
			
   }
  
  function  index(){
    $fb_data = $this->session->userdata('fb_data'); // This array contains all the user FB information
    if((!$fb_data['uid']) or (!$fb_data['me']))
		{
      // If this is a protected section that needs user authentication
      // you can redirect the user somewhere else
      // or take any other action you need
      $user_id = $this->session->userdata('id');
      $data['crowdcast_data'] = $this->crowdcast_model->getcrowdcast_data();
      $data['likes_crowd_id'] = $this->crowdcast_model->get_user_liked_crowdcast_id($user_id);
      $this->load->view('popular',$data);
		}
		else
		{
      $fb = $fb_data['me'];
      //print_r($fb);exit;
      $email = $fb['email'];
      $id = $this->user_model->check_email($email);
      //print_r($id); echo !$id; exit;
      if($id){
        $data['crowdcast_data'] = $this->crowdcast_model->getcrowdcast_data();
        $data['likes_crowd_id'] = $this->crowdcast_model->get_user_liked_crowdcast_id(intval($id));
        $data['fb_data'] = $fb_data;
        $data['logoutUrl'] = $fb_data['logoutUrl'];
        //echo '<pre>'; print_r($data); exit;
        $this->load->view('popular',$data);
      }else{
        $fbData['userid'] = $fb['username'];
        //$fbData['name'] = $fb['name'];
        $fbData['last_name'] = $fb['last_name'];
        $fbData['first_name'] = $fb['first_name'];
        //$fbData['dob'] = $fb['birthday'];
        $fbData['email']= $email;
        $register = $this->user_model->save_fb_user_details($fbData);
        if(!$register){
          $this->session->set_flashdata('error','Unable to register. Try agian.');
        }
        redirect('popular');
      }
    }
  }
  
  
  function add_post(){
    if($_POST){
      $insertData['title']       = $this->input->post('title');
      $insertData['description'] = $this->input->post('description');
      $insertData['user_id']     = $this->session->userdata('id');
      if(!$_FILES['userfile']['name'] == ''){
				$config['upload_path'] = './assets/img/crowdcast/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '5000';
        $config['max_width']  = '2000';
        $config['max_height']  = '2000';  
        $config['encrypt_name'] = TRUE;
        $config['remove_spaces'] = TRUE;
        $this->load->library('upload', $config);
        if($this->upload->do_upload('userfile')){
          $insertData['img'] = $this->upload->file_name;      
        }
        else{
          $error = 'Image Not uploaded';
          print_r($error);
          exit;
        }
      }  
      $insertData['created_date'] = date("Y-m-d H:i:s");
      $insertData['modified_date'] = date("Y-m-d H:i:s");
      $insertData['active'] = 1;
      $query_result = $this->crowdcast_model->insert_post($insertData);
      if($query_result){
        $data['crowdcast_data'] = $this->crowdcast_model->getcrowdcast_data($insertData['user_id']);
        redirect("popular");
      }else{
        echo "Try Again !!!";
      }
    }else{
      echo '<script>alert("Failed to add Please try it again..")</script>';
    }
  }


  function share_comments(){    
    $comment_data['comments'] = $this->input->post('comments');
    $comment_data['user_id']  = $this->input->post('user_id');
    $comment_data['crowdcast_id'] = $this->input->post('crowdcast_id');
    $result_query = $this->crowdcast_model->add_comments($comment_data);    
    header('Content-Type: application/json');
    echo json_encode( array("success" => $result_query));exit;
  }
  
  
  function get_crowdcast_details(){
    $crowdcast_id = $this->input->post('crowdcast_id');
    $crowdcast_data = $this->crowdcast_model->get_selected_crowdcast_data($crowdcast_id);
    $this->load->view('crowdcast_modal',$crowdcast_data);    
  }
 
 
  function share_like(){
    $likes_data['crowdcast_id'] = $this->input->post('crowdcast_id');
    $likes_data['user_id']      = $this->input->post('user_id');
    $likes_data['created_date'] = date("Y-m-d H:i:s");
    
    $likes_query_result = $this->crowdcast_model->add_likes($likes_data);
    header('Content-Type: application/json');
    echo json_encode(array("success" => $likes_query_result));exit;
  }
  
  
  
  function unlike(){
    $unlike_data['crowdcast_id'] = $this->input->post('crowdcast_id');
    $unlike_data['user_id'] = $this->input->post('user_id');
    $unlike_query = $this->crowdcast_model->unlike_post($unlike_data);
    header('Content-type: application/json');
    echo json_encode(array("success" => $unlike_query));exit;
  }
  
  
  function signout(){
    $fb_data = $this->session->userdata('fb_data'); // This array contains all the user FB information
    //print_r($fb_data);
    if((!$fb_data['uid']) or (!$fb_data['me'])){
      unset($this->session->userdata);  
      $this->session->set_flashdata('error', 'Sign out');
      redirect('welcome');
    }
    else{
      unset($this->session->userdata);  
      $this->facebook->destroySession();       
      $this->session->sess_destroy();
      $this->session->set_flashdata('error', 'Sign out');
      redirect($fb_data['logoutUrl']);
    }
	}
 }
?>