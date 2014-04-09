<?php
/**
 * Safe Doc
 *
 * @Description  This class is used to interact with the Banner table using Codeignitor db core class. All the Data Insert,Retrival and Update operations related to country are performed here.
 *
 * @package		Safe Doc
 * @subpackage  Model
 * @author		Sunil Silumala
 * @copyright	Copyright (c) 2012 - 2013
 * @since		Version 1.0
 */
 
// ------------------------------------------------------------------------

/**
 *
 * This is Banner Model
 *
 * @author		Sunil Silumala
 * @package		Safe Doc
 * @subpackage	Model
 */

class Banner_model extends CI_Model{
	
	// --------------------------------------------------------------------

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
		// Initialization of class
		parent::__construct();
	}
	
	/**
	 * get_banner_details
	 *
	 * This is used to save country details
	 *
	 * @author	Sunil Silumala
	 * @access	public
	 * @param   integer-$iNewfeedId 
	 * @return void
	 */
	function get_banner_details($bannerId = 0){
		
		$arrData = array();
		
		if($bannerId != 0 ){
			$this->db->where('id', $bannerId); 
		}
		
		$this->db->select('id,title,img,desc,expiry_date,created_date,modified_date');
		
		$objQuery = $this->db->get('sp_banner');
		
		return $objQuery->result_array();

	}


	/**
	 * update_banner
	 *
	 * This is used to update country details
	 *
	 * @author	Sunil Silumala
	 * @access	public
	 * @param   array-$arrData, integer-$iNewfeedId
	 * @return void
	 */
	
	
	function update_banner($iNewfeedId,$arrData){
		$this->db->where('id',$iNewfeedId);
		if($this->db->update('sp_banner', $arrData))
		{
				return true;
		}
		else
		{
				return false;
		}	
	}
	
	function add_banner($arrData){
		
		if($this->db->insert('sp_banner', $arrData))
		{
				return true;
		}
		else
		{
				return false;
		}	
	}
	
	
	function delete_banner($id){
		if($this->db->delete('sp_banner', array('id' => $id)))
		{
				return true;
		}
		else
		{
				return false;
		}	
	}
}
?>