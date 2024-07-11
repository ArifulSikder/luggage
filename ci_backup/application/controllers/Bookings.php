<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bookings extends CI_Controller
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
        $this->load->model('MyhubModel');
    }
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
        $data['booking_details'] = $this->UserModel->getBookingDetails();
        $this->load->view('Admin/header',$data);
        $this->load->view('Admin/bookings_view');
        $this->load->view('Admin/footer');
    }

    public function update_booking_status() {
        $this->load->model('UserModel');
        $booking_id = $this->input->post('booking_id');
        $status = $this->input->post('status');

        if ($this->UserModel->update_status($booking_id, $status)) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error']);
        }
    }
    
}
