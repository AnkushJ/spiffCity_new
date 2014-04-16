<?php

	class Profile extends CI_Controller{
		function __construct(){
			parent:: __construct();
			if(!$this->session->userdata('login')){
				redirect('welcome');
			}
			$this->load->model('user_model');
			$this->load->model('Facebook_model');
      $this->load->helper(array('form', 'url'));
		}
		
		function index(){
	    $user_id = $this->session->userdata('id');
			$data['user_data'] = $this->user_model->get_user_by_id($user_id);
			$this->load->view('dashboard_navbar');
			$this->load->view('profile/viewProfile', $data);
			$this->load->view('dashboard_footer');
		}
		
		function save_password(){
			$password = $this->input->post('save_password');
	    $user_id = $this->session->userdata('id');
			$saved = $this->user_model->save_password($user_id,$password);
			if($saved)
				$this->session->set_flashdata('successSavePswd', 'Password changed Successfully !!');
			else
				$this->session->set_flashdata('errorSavePswd', 'Failed to change Password. Try again !!');
			redirect('profile');
		}
		
		function change_password(){
	    $user_id = $this->session->userdata('id');
			$old_password = $this->input->post('currentPassword');
			$chkPswd = $this->user_model->chk_password($user_id,$old_password);
			if($chkPswd){
				$new_password = $this->input->post('newPassword');
				$saved = $this->user_model->save_password($user_id,$new_password);
				$this->session->set_flashdata('successChangePswd', 'Password changed Successfully !!');
			}else{
				$this->session->set_flashdata('errorChangePswd', 'Failed to change Password. Try again !!');
			}
			redirect('profile');
		}
		
		function save_profile_changes(){
	    $user_id = $this->session->userdata('id');
			$data['first_name'] = $this->input->post('first_name');
			$data['last_name'] = $this->input->post('last_name');
			$data['dob'] = $this->input->post('dob');
			$data['email'] = $this->input->post('email');
			$data['zip_code'] = $this->input->post('zip_code');
			$data['active'] = 1;
			$config['upload_path'] = './public/upload/user/';
			$config['allowed_types'] = 'jpg|jpeg';
			$config['max_size']	= '500';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('img')){
				$error = $this->upload->display_errors();
				$this->session->set_flashdata('errorSaveProfile', $error);
				redirect('profile');
			}
			else{
				$image = $this->upload->data('img');
				$data['img'] = $image['file_name'];
				$updateFlag	= $this->user_model->update_user($user_id,$data);
				if ($updateFlag){
					$this->session->set_flashdata('successSaveProfile', 'User information updated Successfully !!');
					redirect('profile');
				}
				else{
					$this->session->set_flashdata('errorSaveProfile', "Failed to update User's information !!");
					redirect('profile');				
				}
			}
		}
	}

?>