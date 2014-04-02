<?php
  class Points extends CI_Controller {
    function __construct()
    {
      parent::__construct();
      
      if($this->session->userdata('logged_in') == FALSE) {
        redirect('admin/login');
        break;
      }
      $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation');
      $this->load->model('points_model');
    }
    
    public function index()
    { 
      $arrData['pointsDetails']	= $this->points_model->get_points_details();
      $arrData['middle'] = 'admin/points/listpoints';
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
                     'field'   => 'value',
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'spiff_points',
                     'rules'   => 'required'
                  ),   
            );
        $this->form_validation->set_rules($config);
        $this->form_validation->set_message('required','This field is required');
        if ($this->form_validation->run() == FALSE){
          $arrData['middle'] = 'admin/points/add';
          $this->load->view('admin/template',$arrData);
        }
        else{
          $date = date("Y-m-d");
          $UpdateData["title"]			= $this->input->post('title');
          $UpdateData["value"]			= $this->input->post('value');
          $UpdateData["spiff_points"]			= $this->input->post('spiff_points');
          $UpdateData["created_date"]	= $date;
          $UpdateData["modified_date"]	= $date;
          $updateFlag	= $this->points_model->add_point($UpdateData);
          if ($updateFlag){
            $this->session->set_flashdata('success', 'Point added Successfully !!');
            redirect('admin/points');
          }else{
            $this->session->set_flashdata('error', 'Failed to add Point !!');
            redirect('admin/points/adds');				
          }
        }
      }
      $arrData['middle'] = 'admin/points/add';
      $this->load->view('admin/template',$arrData);
    }
    
    function edit()
    {
      $id = $this->uri->segment(4);
      $arrData['pointsDetailsArr']	= $this->points_model->get_points_details($id);
      if ($this->input->post('cmdSubmit')){
        $config = array(
               array(
                     'field'   => 'title',
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'value',
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'spiff_points',
                     'rules'   => 'required'
                  ),   
            );
        $this->form_validation->set_rules($config);
        $this->form_validation->set_message('required','This field is required');
        if ($this->form_validation->run() == FALSE){
          $arrData['middle'] = 'admin/points/edit';
          $this->load->view('admin/template',$arrData);
        }
        else{
          $date = date("Y-m-d");
          $UpdateData["title"]			= $this->input->post('title');
          $UpdateData["value"]			= $this->input->post('value');
          $UpdateData["spiff_points"]			= $this->input->post('spiff_points');
          $UpdateData["modified_date"]	= $date;
          $updateFlag	= $this->points_model->update_point($id,$UpdateData);
          if ($updateFlag){
            $this->session->set_flashdata('success', 'Point updated Successfully !!');
            redirect('admin/points');
          }else{
            $this->session->set_flashdata('error', 'Failed to update Point !!');
            redirect('admin/points/edit/');				
          }
        }
      }
      $arrData['middle'] = 'admin/points/edit';
      $this->load->view('admin/template',$arrData);
    }
    
    
    public function delete($id)
    {
      $delete = $this->points_model->delete_point($id);
      if ($delete)
        $this->session->set_flashdata('success', 'Point deleted Successfully !!');
      else
        $this->session->set_flashdata('error', 'Failed to delete Point !!');
      redirect('admin/points');
    }
  }
?>
