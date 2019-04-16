<?php

require 'application/third_party/PHPMailer/PHPMailerAutoload.php';
// @set_magic_quotes_runtime(false);
ini_set('magic_quotes_runtime', 0);
class Mailer extends PHPMailer {
	
	function __construct() {
		parent::__construct();
	}
/**
* This function 'll send the mail to the entered mail address.
*
* @access private

* @return true or false
*/
	
	function send_mail($detailArr, $host1,$port1,$username1,$password1,$bcc=true, $attachement=false,$bccEmail) {
		
		
		$this->IsSMTP();
		
		$this->SMTPAuth = true;
		$this->SMTPSecure = "tls";        // sets the prefix to the servier
        $this->Host       = $host1;      // sets GMAIL as the SMTP server
        $this->Port       = $port1;      // set the SMTP port for the GMAIL server
       	$this->Username   = $username1;  // GMAIL username
        $this->Password   = $password1; 
		
          
		
		$this->From = $detailArr['from']; 
		
		$this->FromName = $detailArr['from_name'];
		
		$addr = explode(',',$detailArr['to']);

		foreach ($addr as $ad) {
			$this->AddAddress( trim($ad) );       
		}
		 
	
		if($detailArr['to_cc'])
		{
			$to_cc = explode(',',$detailArr['to_cc']);

		foreach ($to_cc as $ad) {
			$this->AddCC( trim($ad) );       
		}
	    }
	
                        
		
		$this->IsHTML(true);
		
		$this->Subject = $detailArr['subject'];
		
		$this->Body = $detailArr['message'];
		
		if(!$this->Send()){
			
			return FALSE;
		}else{
			
			return TRUE;
		}
	}
}
?>