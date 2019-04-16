							 <?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('imagemodel');
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

	

		/**
* This function 'll load the view page of gallery to upload photos and view photos.
*
* @access public

* @return 
*/
    public function gallery()
    {
        $this->load->model('imagemodel');
        $this->load->helper(array('form', 'url', 'html'));
        $query = $this->imagemodel->imgget('gallery');
        $data['gallery'] = $query;
        
        $this->load->view('gallery', $data);
 
    }
			/**
* This function 'll insert the image to folder and name in database.
*
* @access public

* @return 
*/
	

    public function imageupload()
    {
        $this->load->model('imagemodel');
        $this->load->helper(array('form', 'url', 'html'));
        //$img=$this->input->post('image');
        $img = array
            (
            'name' => $_FILES["image"]["name"],

        );

        $new_image_name = ($_FILES['image']['name']);
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['file_name'] = $new_image_name;
        $config['max_size'] = '0';
        $config['max_width'] = '0';
        $config['max_height'] = '0';
        $config['$min_width'] = '0';
        $config['min_height'] = '0';
        $this->load->library('upload', $config);
        $upload = $this->upload->do_upload('image');
        $this->imagemodel->imginsert('gallery', $img);
        redirect(base_url() . 'index.php/gallerys');

    }
	
/**
* This function 'll load the view page to search and send mail for thunderstorm and current weather.
*
* @access public

* @return 
*/

	

}
