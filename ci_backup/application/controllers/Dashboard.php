<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
	public function index()
	{
		// Check if the user is logged in
		if (!$this->session->userdata('user_id')) {
			// If not logged in, redirect to the login page
			redirect('Login');
		}
		
		$user_id = $this->session->userdata('user_id');

        // Load notifications for the user from model
        $this->load->model('UserModel');
        $data = $this->UserModel->getNotificationsByUserId($user_id);
		// echo "<pre>"; print_r($data); die;
        // Load views
        $this->load->view('Admin/header',$data);
        $this->load->view('Admin/dashboard_view');
        $this->load->view('Admin/footer');
	}
}