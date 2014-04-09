<?php
  class Coupons_model extends CI_Model{
    function __construct()
    {
      // Initialization of class
      parent::__construct();
    }
    
    function get_coupons_details($couponsId = 0){
      $arrData = array();
      if($couponsId != 0 ){
        $this->db->where('id', $couponsId); 
      }
      $this->db->select('id,title,img,description,points,Price,likes,expiry_date,created_date,modified_date');
      $objQuery = $this->db->get('sp_coupons');
      return $objQuery->result_array();
    }
    
    function add_coupon($arrData){
      if($this->db->insert('sp_coupons', $arrData)){
        return true;
      }
      else{
        return false;
      }	
    }
    
    
    function update_coupon($id,$arrData){
      $this->db->where('id',$id);
      if($this->db->update('sp_coupons', $arrData)){
        return true;
      }
      else{
        return false;
      }	
    }
    
    function delete_coupon($id){
      if($this->db->delete('sp_coupons', array('id' => $id))){
        return true;
      }
      else{
        return false;
      }	
    }
  }  
?>
