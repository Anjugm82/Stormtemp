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
	/**
* This function 'll insert the smtp config values to the database.
@params variable,Array
* @access private

*/
		public function smtpinsert($tablename,$smtp) 
	{
		$this->db->insert($tablename, $smtp);
	   
	}
		/**
* This function 'll fetch smtp config values from the database.

* @access private
* @return Array 

*/
	
	
	public function smtpcheck() 
	{
		$this->db->select("*");
		$this->db->from("smtp");
	
	   $query = $this->db->get();

        return $query->num_rows();
	   
	}
	
		/**
* This function 'll fetch smtp config values from the database.

* @access private
* @return Array 

*/
	

	public function smtpedit() 
	{
		$this->db->select("*");
		$this->db->from("smtp");
	
	   $query = $this->db->get();

        return $query->result_array();
	   
	}
	
		/**
* This function 'll update smtp config values to the database.
@params variable,Array
* @access private


*/

	public function smtpupdate($tablename, $smtp) 
	{
		$this->db->update($tablename, $smtp);
	   
	}
	
/**
* This function 'll delete the smtp values in the database.
@params variable,Array
* @access private


*/
	
	public function smtpdelete($tablename, $smtp) 
	{
		$this->db->delete($tablename, $smtp);
	   
	}
	
		/**
* This function 'll fetch the smtp values from the database.
@params variable
* @access private
* @return Array 


*/
	
	
	public function smtpget($tablename) 
	{
		$this->db->select("*");
		$this->db->from($tablename);
	
	   $query = $this->db->get();

        return $query->result();
	   
	}
	
	
}
?>