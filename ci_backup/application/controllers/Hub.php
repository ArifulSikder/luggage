<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hub extends CI_Controller
{

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

	public function __construct()
	{
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
		$this->load->view('Hub/hub_view', $data); // Pass the data to the view
	}

	public function Details()
	{
		$id = decodeID($this->uri->segment(3));
		$encrypted_data = $this->input->get('data');
		$urldata = array();
		if ($encrypted_data) {
			// Decrypt the data
			$decrypted_data = $this->decrypt_data($encrypted_data);

			if ($decrypted_data) {
				// Convert the JSON string back to an associative array
				$urldata = json_decode($decrypted_data, true);
			}
		}
		// echo $id;
		// Get hub details from the model
		$hubDetails = $this->MyhubModel->gethubdetails($id);
		$optionDetails = $this->MyhubModel->getOption(array('option_identity' => 'Tax'));

		// Pass the hub details to the view
		$data['optionDetails'] = $optionDetails;
		$data['hubDetails'] = $hubDetails;
		$data['urldata'] = $urldata;
		// echo "<pre>"; print_r($data); die;
		$this->load->view('Hub/hub_view', $data); // Pass the data to the view
	}

	public function confirm_page()
	{
		$id = decodeID($this->uri->segment(3));
		$encrypted_data = $this->input->get('data');
		$urldata = array();
		if ($encrypted_data) {
			// Decrypt the data
			$decrypted_data = $this->decrypt_data($encrypted_data);

			if ($decrypted_data) {
				// Convert the JSON string back to an associative array
				$urldata = json_decode($decrypted_data, true);
			}
		}
		// echo $id;
		// Get hub details from the model
		$hubDetails = $this->MyhubModel->gethubdetails($id);
		$optionDetails = $this->MyhubModel->getOption(array('option_identity' => 'Tax'));

		// Pass the hub details to the view
		$data['optionDetails'] = $optionDetails;
		$data['hubDetails'] = $hubDetails;
		$data['urldata'] = $urldata;
		$this->load->view('Hub/confirm_page', $data); // Pass the data to the view

	}

	public function dashboard(){
		$this->load->view('Hub/dashboard'); // Pass the data to the view
	}
	private function decrypt_data($encrypted_data)
	{
		try {
			// Decrypt the data using Base64 decoding for demonstration
			$decrypted_data = base64_decode($encrypted_data);
			return $decrypted_data;
		} catch (Exception $e) {
			log_message('error', 'Decryption failed: ' . $e->getMessage());
			return false;
		}
	}

	public function checkUserSession()
	{
		// Check if user is logged in
		$user_id = $this->session->userdata('mainuser_id');
		echo json_encode(['loggedIn' => isset($user_id)]);
	}

	public function bookLuggage()
	{
		$this->load->model('MyhubModel');

		// Retrieve form data
		$checkInDate = $this->input->post('checkInDate');
		$checkOutDate = $this->input->post('checkOutDate');
		$smallBags = $this->input->post('smallBags');
		$mediumBags = $this->input->post('mediumBags');
		$largeBags = $this->input->post('largeBags');
		$extraLargeBags = $this->input->post('extraLargeBags');
		$premiumServices = $this->input->post('premiumServices');
		$hub_id = $this->input->post('hub_id');
		// echo $premiumServices; die;
		// Calculate total cost and other logic
		$totalCost = $this->MyhubModel->calculateTotalCost($hub_id,$checkInDate, $checkOutDate, $smallBags, $mediumBags, $largeBags, $extraLargeBags, $premiumServices);
		// echo $totalCost; die;
		// Create booking entry in the database
		$bookings = $this->MyhubModel->createBooking($hub_id,$checkInDate, $checkOutDate, $smallBags, $mediumBags, $largeBags, $extraLargeBags, $premiumServices, $totalCost);
		// $bookingId = 0;
		// Redirect to PayPal with booking details
		// $paypalUrl = $this->createPaypalPayment($bookingId, $totalCost);
		echo json_encode(['success' => true,"data"=>$bookings]);
	}

	private function createPaypalPayment($bookingId, $totalCost)
	{
		// PayPal integration logic
		// Example URL (you need to replace this with actual PayPal API integration)
		return "https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=YOUR_PAYPAL_EMAIL&item_name=Booking&booking_id=$bookingId&amount=$totalCost&currency_code=USD&return=SuccessPayment&cancel_return=YOUR_CANCEL_URL";
	}
}
