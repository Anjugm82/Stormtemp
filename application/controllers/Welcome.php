							 <?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
       
        $this->load->helper(array('form', 'url', 'html'));
    }
	
	/**
* This function 'll load the home page with the jason decoded weather details of Dublin city.
*
* @access public

* @return 
*/

    public function index()
    {
        $url = "http://api.openweathermap.org/data/2.5/forecast?q=Dublin,IE&appid=d828bc57d263d11b348eba143fa7c5c8";

        $contents = file_get_contents($url);
        $climas['clima'] = json_decode($contents);
        

        $this->load->view('welcome_message', $climas);
       

    }

	

}

