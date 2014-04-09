<?php
  class Coupons extends CI_Controller {
    function __construct()
    {
      parent::__construct();
      
      if($this->session->userdata('logged_in') == FALSE) {
        redirect('admin/login');
        break;
      }
      $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation');
      $this->load->model('coupons_model');
    }
    
    public function index()
    { 
      $arrData['couponsDetails']	= $this->coupons_model->get_coupons_details();
      $arrData['middle'] = 'admin/coupons/listcoupons';
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
                     'field'   => 'points',
                     'rules'   => 'required|numeric'
                  ),
               array(
                     'field'   => 'price',
                     'rules'   => 'required|numeric'
                  ),   
               array(
                     'field'   => 'likes',
                     'rules'   => 'required|numeric'
                  ),
               array(
                     'field'   => 'exp_date',
                     'rules'   => 'required'
                  ),
            );
        $this->form_validation->set_rules($config);
        $this->form_validation->set_message('required','This field is required');
        if ($this->form_validation->run() == FALSE){
          $arrData['middle'] = 'admin/coupons/add';
          $this->load->view('admin/template',$arrData);
        }
        else{
          $date = date("Y-m-d");
          $UpdateData["title"]			= $this->input->post('title');
          $UpdateData["description"]			= $this->input->post('desc');
          $UpdateData["points"]			= $this->input->post('points');
          $UpdateData["Price"]			= $this->input->post('price');
          $UpdateData["likes"]			= $this->input->post('likes');
          $UpdateData["created_date"]	= $date;
          $UpdateData["expiry_date"]	= $this->input->post('exp_date');
          $UpdateData["modified_date"]	= $date;
          
          $config['upload_path'] = './public/upload/coupons/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$config['max_size']	= '500';
					$config['max_width']  = '1024';
					$config['max_height']  = '768';
					$this->load->library('upload', $config);
					if ( ! $this->upload->do_upload('img')){
						$error = array('error' => $this->upload->display_errors());
						$arrData['middle'] = 'admin/banner/add';
						$this->load->view('admin/template',$arrData);
					}
					else{
						$data = $this->upload->data('img');
						$UpdateData['img'] = $data['file_name'];
            $updateFlag	= $this->coupons_model->add_coupon($UpdateData);
            if ($updateFlag){
              $this->session->set_flashdata('success', 'Coupon added Successfully !!');
              redirect('admin/coupons');
            }
            else{
              $this->session->set_flashdata('error', 'Failed to add Coupon !!');
              redirect('admin/coupons/adds');				
            }
          }
        }
      }
      $arrData['middle'] = 'admin/coupons/add';
      $this->load->view('admin/template',$arrData);
    }
    
    function edit()
    {
      $id = $this->uri->segment(4);
      $arrData['couponsDetailsArr']	= $this->coupons_model->get_coupons_details($id);
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
                     'field'   => 'points',
                     'rules'   => 'required|numeric'
                  ),
               array(
                     'field'   => 'price',
                     'rules'   => 'required|numeric'
                  ),   
               array(
                     'field'   => 'likes',
                     'rules'   => 'required|numeric'
                  ),
               array(
                     'field'   => 'exp_date',
                     'rules'   => 'required'
                  ),
            );
        $this->form_validation->set_rules($config);
        $this->form_validation->set_message('required','This field is required');
        if ($this->form_validation->run() == FALSE){
          $arrData['middle'] = 'admin/coupons/edit';
          $this->load->view('admin/template',$arrData);
        }
        else{
          $date = date("Y-m-d");
          $UpdateData["title"]			= $this->input->post('title');
          $UpdateData["description"]			= $this->input->post('desc');
          $UpdateData["points"]			= $this->input->post('points');
          $UpdateData["Price"]			= $this->input->post('price');
          $UpdateData["likes"]			= $this->input->post('likes');
          $UpdateData["expiry_date"]	= $this->input->post('exp_date');
          $UpdateData["modified_date"]	= $date;
          
          $config['upload_path'] = './public/upload/coupons/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$config['max_size']	= '500';
					$config['max_width']  = '1024';
					$config['max_height']  = '768';
					$this->load->library('upload', $config);
					if ( ! $this->upload->do_upload('img')){
						$error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error', $error);
            $arrData['middle'] = 'admin/coupons/add';
						$this->load->view('admin/template',$arrData);
					}
					else{
						$data = $this->upload->data('img');
						$UpdateData['img'] = $data['file_name'];
           // print_r($this->input->post('exp_date'));die;
            $updateFlag	= $this->coupons_model->update_coupon($id,$UpdateData);
            if ($updateFlag){
              $this->session->set_flashdata('success', 'Coupon updated Successfully !!');
              redirect('admin/coupons');
            }
            else{
              $this->session->set_flashdata('error', 'Failed to update Coupon !!');
              redirect('admin/coupons/edit/');				
            }
          }
        }
      }
      $arrData['middle'] = 'admin/coupons/edit';
      $this->load->view('admin/template',$arrData);
    }
    
    
    public function delete($id)
    {
      $delete = $this->coupons_model->delete_coupon($id);
      if ($delete)
        $this->session->set_flashdata('success', 'Coupon deleted Successfully !!');
      else
        $this->session->set_flashdata('error', 'Failed to delete Coupon !!');
      redirect('admin/coupons');
    }
  }
?>
