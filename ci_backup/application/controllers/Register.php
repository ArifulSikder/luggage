<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

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
		$this->load->library('form_validation');
        $this->load->model('UserModel');
    }

	public function index()
	{
		$this->load->view('Login/register_view');
	}

	public function submit_form() {
        // Form validation rules
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|max_length[50]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[100]');

        // Run validation
        if ($this->form_validation->run() == FALSE) {
            // If validation fails, reload the form view with validation errors
            $this->load->view('user_form');
        } else {
            // If validation passes, proceed with form submission
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $full_name = $this->input->post('full_name');

            // Prepare data array
            $data = array(
                'username' => $username,
                'email' => $email,
                'password' => $password,
                'full_name' => $full_name
            );

            // Insert data into the database
            $this->UserModel->insert_user($data);

            // Redirect to success page or do something else
            redirect('Login');
        }
    }

}
