<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	 public function __construct() {
        parent::__construct();
        $this->load->model('MyhubModel'); // Load your model
    }
	 public function index()
	{
		// Get hub details from the model
        $hubDetails = $this->MyhubModel->get_hub_list();
        
        // Pass the hub details to the view
        $data['hubDetails'] = $hubDetails;
        // echo "<pre>"; print_r($data); die;
        $this->load->view('Home/home_view', $data); // Pass the data to the view
	}

	
}
