<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
        // Load the user model
        $this->load->model('UserModel');
    }
	public function index()
	{
		$data['error'] = '';
		$this->load->view('Login/login_view',$data);
	}

	public function Userlogin() {
        // Get username and password from the form
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Check if the username and password are correct
        $user = $this->UserModel->login($username, $password);

        if ($user) {
            // If login successful, store user data in session
            $this->session->set_userdata('user_id', $user->user_id);
            $this->session->set_userdata('full_name', $user->full_name);
            $this->session->set_userdata('username', $user->username);
            $this->session->set_userdata('email', $user->email);
            // Redirect to Dashboard or any other desired page
            redirect('dashboard');
        } else {
            // If login failed, show error message and reload login form
            $data['error'] = 'Invalid username or password';
            $this->load->view('Login/login_view', $data);
        }
    }

	public function logout() {
        // Unset all session data
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('email');

        // Destroy the session
        $this->session->sess_destroy();

        // Redirect to login page or any other desired page
        redirect('Login');
    }
}
