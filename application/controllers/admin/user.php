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
 

class User extends CI_Controller {

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

		$this->load->model('user_model');
	}

	
	/**
	* index
	*
	* This wil display user page
	* 
	* @author	Sunil Silumala
	* @access	public
	* @return	void
	*/
	
	public function index()
	{
		$arrData['userDetails']	= $this->user_model->get_users();
		$arrData['middle'] = 'admin/user/listuser';
		$this->load->view('admin/template',$arrData);
	}
	
	/**
	* view
	*
	* This wil add user info
	* 
	* @author	Ankush Joshi
	* @access	public
	* @return	void
	*/
	
	public function add(){
		if ($this->input->post('cmdSubmit')){
      $config = array(
					        array(
                     'field'   => 'userid',
                     'rules'   => 'required|alpha_dash|is_unique[sp_users.userid]'
                  ),
					        array(
                     'field'   => 'password',
                     'rules'   => 'required'
                  ),
							    array(
                     'field'   => 'firstname',
                     'rules'   => 'required|alpha'
                  ),   array(
                     'field'   => 'lastname',
                     'rules'   => 'required|alpha'
                  ),
					        array(
                     'field'   => 'email',
										 'rules' => 'required|valid_email|is_unique[sp_users.email]'
									),
							    array(
                     'field'   => 'dob',
                     'rules'   => 'required'
                  ),
							    array(
                     'field'   => 'zip',
                     'rules'   => 'required|numeric|exact_length[6]'
                  )   
            );
      $this->form_validation->set_rules($config);
      $this->form_validation->set_message('required','This field is required');
			if ($this->form_validation->run() == FALSE){
			  $arrData['middle'] = 'admin/user/adduser';
			  $this->load->view('admin/template',$arrData);
			}
      else{			
				$date = date("Y-m-d");
				$arrData["userid"]			= $this->input->post('userid');
				$arrData["password"]			= $this->input->post('password');
				$arrData["first_name"]			= $this->input->post('firstname');
				$arrData["last_name"]			= $this->input->post('lastname');
				$arrData["email"]			= $this->input->post('email');
				//$arrData["image"]			= $this->input->post('image');
				$arrData["dob"]			= $this->input->post('dob');
				$arrData["zip_code"]			= $this->input->post('zip');
				$arrData["created_date"]	= $date;
				$arrData["modified_date"]	= $date;
				$insertedFlag	= $this->user_model->save_user($arrData);
				if ($insertedFlag){
					$this->session->set_flashdata('success', 'User Added Successfully !!');
					redirect('admin/user');
				}
				else{
					$this->session->set_flashdata('error', 'Failed to Add User !!');
					redirect('admin/user/add');				
				}
			}
		}
		$arrData['middle'] = 'admin/user/adduser';
		$this->load->view('admin/template',$arrData);
	}
	
	
	public function delete($id)
	{
			$delete = $this->user_model->delete_user($id);
			if ($delete)
				$this->session->set_flashdata('success', 'User deleted Successfully !!');
			else
				$this->session->set_flashdata('error', 'Failed to delete User !!');
		redirect('admin/user');
	}
	
	public function edit()
	{
		$id = $this->uri->segment(4);
		$arrData['userDetailsArr']	= $this->user_model->get_user_by_id($id);
		if ($this->input->post('cmdSubmit')){
      $config = array(
					        array(
                     'field'   => 'userid',
                     'rules'   => 'required|alpha_dash'
                  ),
					        array(
                     'field'   => 'password',
                     'rules'   => 'required'
                  ),
							    array(
                     'field'   => 'firstname',
                     'rules'   => 'required|alpha'
                  ),   array(
                     'field'   => 'lastname',
                     'rules'   => 'required|alpha'
                  ),
					        array(
                     'field'   => 'email',
										 'rules' => 'required|valid_email'
									),
							    array(
                     'field'   => 'dob',
                     'rules'   => 'required'
                  ),
							    array(
                     'field'   => 'zip',
                     'rules'   => 'required|numeric|exact_length[6]'
                  )   
            );
      $this->form_validation->set_rules($config);
      $this->form_validation->set_message('required','This field is required');
			if ($this->form_validation->run() == FALSE){
			  $arrData['middle'] = 'admin/user/edit';
			  $this->load->view('admin/template',$arrData);
			}
      else{			
				$date = date("Y-m-d");
				$UpdateData["userid"]			= $this->input->post('userid');
				$UpdateData["password"]			= $this->input->post('password');
				$UpdateData["first_name"]			= $this->input->post('firstname');
				$UpdateData["last_name"]			= $this->input->post('lastname');
				$UpdateData["email"]			= $this->input->post('email');
				$UpdateData["dob"]			= $this->input->post('dob');
				$UpdateData["zip_code"]			= $this->input->post('zip');
				$UpdateData["modified_date"]	= $date;
				$updateFlag	= $this->user_model->update_user($id,$UpdateData);
				if ($updateFlag){
					$this->session->set_flashdata('success', 'User updated Successfully !!');
					redirect('admin/user');
				}else{
					$this->session->set_flashdata('error', 'Failed to updated User !!');
					redirect('admin/user/edit/'.$id);				
				}
			}
		}
		$arrData['middle'] = 'admin/user/edit';
		$this->load->view('admin/template',$arrData);
	}
	
	/**
	* view
	*
	* This wil display user info
	* 
	* @author	Sunil Silumala
	* @access	public
	* @return	void
	*/
	
	public function view($iUserId)
	{
		$arrData['userDetails']	= $this->user_model->get_user_details($iUserId);
		
		// Fetching country details
		$this->load->model('country_model');
		$arrData['arrCountry']	= $this->country_model->get_country_details($arrData['userDetails'][0]['userCountryId']);
		
		// Fetching Notification Info
		$arrData['NotifiDetails']	= $this->user_model->get_notification_details($iUserId);
		
		$arrData['middle'] = 'admin/user/detailuser';
		$this->load->view('admin/template',$arrData);
	}
	
	/**
	* paymentHistory
	*
	* This wil display user payment history
	* 
	* @author	Sunil Silumala
	* @access	public
	* @return	void
	*/
	
	public function paymentHistory($iUserId)
	{
		$this->db->where('paymentUserId',$iUserId);
		$this->db->where('paymentStatus','1');
		
		$objData = $this->db->get('safedoc_payment');
		$arrData['paymentHistory']	= $objData->result_array();
		$this->load->view('admin/user/paymenthistory',$arrData);
			
		// When payment will be on monthly then it will come, 
		// so dnt delete this 
		/*
		if($iUserId!='')
		{
			$arrData['userArr'] = $this->user_model->get_user_details($iUserId);
			
			$this->db->where('paymentUserId',$iUserId);
			$this->db->where('paymentStatus','1');
			
			$objData = $this->db->get('safedoc_payment');
			$arrData['paymentHistory']	= $objData->result_array();
			
			$arrData['middle'] = 'admin/user/paymenthistory';
			$this->load->view('admin/template',$arrData);
		}
		else{
			redirect('admin/user');
		}*/
	}
}