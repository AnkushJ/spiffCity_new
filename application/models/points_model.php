<?php
  class Points_model extends CI_Model{
    function __construct()
    {
      // Initialization of class
      parent::__construct();
    }
    
    function get_points_details($pointsId = 0){
      $arrData = array();
      if($pointsId != 0 ){
        $this->db->where('id', $pointsId); 
      }
      $this->db->select('id,title,value,spiff_points,created_date,modified_date');
      $objQuery = $this->db->get('sp_points');
      return $objQuery->result_array();
    }
    
    function add_point($arrData){
      if($this->db->insert('sp_points', $arrData)){
        return true;
      }
      else{
        return false;
      }	
    }
    
    
    function update_point($id,$arrData){
      $this->db->where('id',$id);
      if($this->db->update('sp_points', $arrData)){
        return true;
      }
      else{
        return false;
      }	
    }
    
    function delete_point($id){
      if($this->db->delete('sp_points', array('id' => $id))){
        return true;
      }
      else{
        return false;
      }	
    }
  }  
?>
