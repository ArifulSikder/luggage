<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Userregister extends CI_Controller
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
        // Load the user model
        $this->load->model('UserModel');
    }
    public function index()
    {
        $data['error'] = '';
        $this->load->view('Login/userregister', $data);
    }
    public function register()
    {
        // Get POST data
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        // Validate data (add more validation as needed)
        if (empty($name) || empty($email) || empty($password)) {
            $response = array('status' => 'error', 'message' => 'All fields are required.');
            echo json_encode($response);
            return;
        }

        // Hash password
        $hashed_password = base64_encode($password);

        // Prepare user data
        $user_data = array(
            'name' => $name,
            'email' => $email,
            'password' => $hashed_password
        );

        // Call model to insert user
        $result = $this->UserModel->insert_mainuser($user_data);

        if ($result) {
            $response = array('status' => 'success', 'message' => 'User registered successfully.');
        } else {
            $response = array('status' => 'error', 'message' => 'Registration failed.');
        }

        echo json_encode($response);
    }

    public function logout()
    {
        $this->session->set_userdata('mainuser_id', 0);
        $this->session->set_userdata('name', '');
        $this->session->set_userdata('email', '');
        $this->session->sess_destroy();

        // Redirect to home page
        redirect(base_url());
    }
}
