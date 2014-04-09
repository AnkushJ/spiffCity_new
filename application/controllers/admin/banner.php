<?php 
		/**
		* Safe Doc
		*
		* @package		Safe Doc
		* @subpackage   controller
		* @author		Sunil Silumala
		* @copyright	Copyright (c) 2012 - 2013 
		* @since		Version 1.0
		*/
		 
		/* 
			there are only 5 fields in this module.
			So no Delete and Add functionality is given
		*/
		
		class Banner extends CI_Controller {
		
			/**
			* __construct
			*
			* Calls parent constructor
			* @author	Sunil Silumala
			* @access	public
			* @return	void
			*/
			function __construct()
			{
				parent::__construct();
				
				if($this->session->userdata('logged_in') == FALSE) {
					redirect('admin/login');
					break;
				}
				$this->load->helper(array('form', 'url'));
				$this->load->library('form_validation');
				$this->load->model('banner_model');
			}
		
			
			/**
			* index
			*
			* This wil display banner page
			* 
			* @author	Sunil Silumala
			* @access	public
			* @return	void
			*/
			
			public function index()
			{
				$arrData['bannerDetails']	= $this->banner_model->get_banner_details();
				$arrData['middle'] = 'admin/banner/listbanner';
				$this->load->view('admin/template',$arrData);
			}
			
			
			/**
			* edit
			*
			* This help to edit Banner
			* 
			* @author	Sunil Silumala
			* @access	public
			* @return	void
			*/
			
			public function edit($iBannerId)
			{
				$arrData['bannerDetailsArr']	= $this->banner_model->get_banner_details($iBannerId);
				
					if ($this->input->post('cmdSubmit')){
					$config = array(
									 array(
												 'field'   => 'title',
												 'rules'   => 'required'
											),
									 array(
												 'field'   => 'desc',
												 'rules'   => 'required'
											),
									 array(
												 'field'   => 'expiry_date',
												 'rules'   => 'required'
											)
									 
								);
					$this->form_validation->set_rules($config);
					$this->form_validation->set_message('required','This field is required');
					if ($this->form_validation->run() == FALSE){
						$arrData['middle'] = 'admin/banner/edit';
						$this->load->view('admin/template',$arrData);
					}
					else{
						
						$date = date("Y-m-d");
						$UpdateData["title"]			= $this->input->post('title');
						$UpdateData["desc"]			= $this->input->post('desc');
						$UpdateData["expiry_date"]	= $this->input->post('expiry_date');
						$UpdateData["modified_date"]	= $date;
						
						$config['upload_path'] = './public/upload/banner/';
						$config['allowed_types'] = 'gif|jpg|png|jpeg';
						$config['max_size']	= '500';
						$config['max_width']  = '1024';
						$config['max_height']  = '768';
						$this->load->library('upload', $config);
						if ( ! $this->upload->do_upload('img')){
							$error = array('error' => $this->upload->display_errors());
							$this->session->set_flashdata('error', $error);
							$arrData['middle'] = 'admin/banner/edit';
							$this->load->view('admin/template',$arrData);
						}
						else{
							$data = $this->upload->data('img');
							$UpdateData['img'] = $data['file_name'];
							$updateFlag	= $this->banner_model->update_banner($iBannerId, $UpdateData);
							if ($updateFlag){
								$this->session->set_flashdata('success', 'Banner updated Successfully !!');
								redirect('admin/banner');
							}
							else{
								$this->session->set_flashdata('error', 'Failed to updated Banner !!');
								redirect('admin/banner/edit');				
							}
						}
					}
				}
				$arrData['middle'] = 'admin/banner/edit';
				$this->load->view('admin/template',$arrData);
			}
			
			function adds()
			{
				if ($this->input->post('cmdSubmit')){
					$config = array(
									 array(
												 'field'   => 'title',
												 'rules'   => 'required'
											),
									 array(
												 'field'   => 'desc',
												 'rules'   => 'required'
											),
									 array(
												 'field'   => 'expiry_date',
												 'rules'   => 'required'
											)
									 
								);
					$this->form_validation->set_rules($config);
					$this->form_validation->set_message('required','This field is required');
					if ($this->form_validation->run() == FALSE){
						$arrData['middle'] = 'admin/banner/add';
						$this->load->view('admin/template',$arrData);
					}
					else{
						
						$date = date("Y-m-d");
						$UpdateData["title"]			= $this->input->post('title');
						$UpdateData["desc"]			= $this->input->post('desc');
						
						$UpdateData["expiry_date"]	= $this->input->post('expiry_date');
						$UpdateData["created_date"]	= $date;
						$UpdateData["modified_date"]	= $date;
						
						$config['upload_path'] = './public/upload/banner/';
						$config['allowed_types'] = 'gif|jpg|png|jpeg';
						$config['max_size']	= '500';
						$config['max_width']  = '1024';
						$config['max_height']  = '768';
						$this->load->library('upload', $config);
						if ( ! $this->upload->do_upload('img')){
							$error = array('error' => $this->upload->display_errors());
							print_r($error);
							die;
							$arrData['middle'] = 'admin/banner/add';
							$this->load->view('admin/template',$arrData);
						}
						else{
							
							$data = $this->upload->data('img');
							$UpdateData['img'] = $data['file_name'];
							$updateFlag	= $this->banner_model->add_banner($UpdateData);
							if ($updateFlag){
								$this->session->set_flashdata('success', 'Banner added Successfully !!');
								redirect('admin/banner');
							}else{
								$this->session->set_flashdata('error', 'Failed to add Banner !!');
								redirect('admin/banner/adds');				
							}
						}
					}
				}
				$arrData['middle'] = 'admin/banner/add';
				$this->load->view('admin/template',$arrData);
			}
			
			
			public function delete($id)
			{
					$delete = $this->banner_model->delete_banner($id);
					if ($delete)
						$this->session->set_flashdata('success', 'Banner deleted Successfully !!');
					else
						$this->session->set_flashdata('error', 'Failed to delete Banner !!');
				redirect('admin/banner');
			}
			
			
		}
	?>
	