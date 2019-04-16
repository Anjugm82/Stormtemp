<?php

class imagemodel extends CI_Model
{
	public function __construct()
	{
	   parent::__construct(); 
	   $this->load->database();
	   $this->load->helper(array('form', 'url', 'html'));
	}
/**
* This function 'll insert the images name to the database.

* @access private

*/
	
	public function imginsert($tablename,$image) 
	{
		$this->db->insert($tablename, $image);
		
	}
	
/**
* This function 'll fetch the image names from database.
@params variable,Array
* @access private
* @return Array 
*/
	
	public function imgget($tablename) 
	{
		$this->db->select("*");
		$this->db->from($tablename);
	
	   $query = $this->db->get();

        return $query->result_array();
	   
	}


	
	
	
}
?>