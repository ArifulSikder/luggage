<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing extends CI_Controller {

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
        $this->load->library('encryption');
        $this->load->helper('url');
    }

	public function index()
	{
		// Get the encrypted data from the URL parameter
		$encrypted_data = $this->input->get('data');
	
		if ($encrypted_data) {
			// Decrypt the data
			$decrypted_data = $this->decrypt_data($encrypted_data);
	
			if ($decrypted_data) {
				// Convert the JSON string back to an associative array
				$data = json_decode($decrypted_data, true);
				// echo "<pre>". print_r($data); die;
				// Load the model
				$this->load->model('MyhubModel');
	
				// Find locations within a 5 km radius
				$results = $this->MyhubModel->find_locations_within_radius($data['latvalue'], $data['lonvalue'], 500);
				$results['data'] = $data;
				// echo "<pre>". print_r(json_encode($results)); die;
				// Pass results to the view
				$this->load->view('Listing/listing_view', ['results' => $results,'data' => $encrypted_data]);
	
			} else {
				// Handle decryption error
				show_error('Invalid or corrupt data.', 400);
			}
		} else {
			// Handle missing data parameter
			show_error('No data parameter provided.', 400);
		}
	}
	

	private function decrypt_data($encrypted_data) {
        try {
            // Decrypt the data using Base64 decoding for demonstration
            $decrypted_data = base64_decode($encrypted_data);
            return $decrypted_data;
        } catch (Exception $e) {
            log_message('error', 'Decryption failed: ' . $e->getMessage());
            return false;
        }
    }
}
