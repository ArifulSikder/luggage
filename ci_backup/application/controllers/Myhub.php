<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Myhub extends CI_Controller
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
        $this->load->view('Admin/header',$data);
        $this->load->view('Admin/myhub_view');
        $this->load->view('Admin/footer');
    }

    public function add_hub()
    {
        // Load the upload library
        $this->load->library('upload');

        // Specify the upload path
        $upload_path = './uploads/hub_images/';

        // Check if the folder exists, if not create it
        if (!is_dir($upload_path)) {
            if (!mkdir($upload_path, 0777, TRUE)) {
                // Log the error if folder creation fails
                log_message('error', 'Failed to create folder: ' . $upload_path);
                echo "Error: Unable to create folder.";
                return;
            } else {
                // Log the successful folder creation
                log_message('info', 'Folder created: ' . $upload_path);
            }
        }

        $config['upload_path'] = $upload_path; // Path where the uploaded file will be stored
        $config['allowed_types'] = 'gif|jpg|jpeg|png'; // Allowed file types
        $config['max_size'] = 20480; // Max size in KB
        $config['encrypt_name'] = TRUE; // Encrypt the file name for security

        $this->upload->initialize($config);

        // Check if a file is uploaded
        if ($this->upload->do_upload('hubImage')) {
            // File upload successful
            $upload_data = $this->upload->data();
            $hub_image = $upload_data['file_name']; // Get the uploaded file name
        } else {
            // File upload failed, log the error
            $error = $this->upload->display_errors();
            log_message('error', 'File upload error: ' . $error);
            $hub_image = $this->input->post('hub_image');
            // echo $error;
            // return;
        }

        // Get form data
        $data = array(
            'user_id' => $this->session->userdata('user_id'),
            'hubname' => $this->input->post('hubname'),
            'address' => $this->input->post('address'),
            'latvalue' => $this->input->post('latvalue'),
            'lonvalue' => $this->input->post('lonvalue'),
            'mobilenumber' => $this->input->post('mobilenumber'),
            'hubarea' => $this->input->post('hubarea'),
            'capacity' => $this->input->post('capacity'),
            'description' => $this->input->post('description'),
            'helpGuide' => $this->input->post('helpGuide'),
            'hub_image' => $hub_image // Save the file name in the database
        );

        // Insert data into database
        if($this->input->post('hub_id') == 0)
            $result = $this->MyhubModel->insert_hub($data);
        else
            $result = $this->MyhubModel->update_hub($this->input->post('hub_id'),$data);

        if ($result) {
            echo "Data inserted successfully";
        } else {
            echo "Error inserting data";
        }
    }

    public function get_hub_details() {
        $id = $this->input->post('id');
        $hub_details = $this->MyhubModel->get_hub_details($id);
        // Return hub details as JSON response
        echo json_encode($hub_details);
    }

    public function Hubsummary()
    {
        $user_id = $this->session->userdata('user_id');
        $hub_summary = $this->MyhubModel->get_hub_summary($user_id);
        echo json_encode($hub_summary, true);
    }

    public function addPricing() {
        // Get form data from POST
        $data = array(
            // Add new input fields to the $data array
            'hub_id' => $this->input->post('hub_id'),
            'hourlyPrice1' => $this->input->post('hourlyPrice1'),
            'dailyPrice1' => $this->input->post('dailyPrice1'),
            'hourlyPrice2' => $this->input->post('hourlyPrice2'),
            'dailyPrice2' => $this->input->post('dailyPrice2'),
            'hourlyPrice3' => $this->input->post('hourlyPrice3'),
            'dailyPrice3' => $this->input->post('dailyPrice3'),
            'hourlyPrice4' => $this->input->post('hourlyPrice4'),
            'dailyPrice4' => $this->input->post('dailyPrice4'),
            'premiumServiceRate1' => $this->input->post('premiumServiceRate1'),
            'premiumServiceRate2' => $this->input->post('premiumServiceRate2'),
            'premiumServiceRate3' => $this->input->post('premiumServiceRate3')
            // Add more fields as needed
        );
    
        // Call the model method to store data
        $result = $this->MyhubModel->add_pricing($data);
    
        if($result) {
            echo "Data stored successfully";
        } else {
            echo "Error storing data";
        }
    }

    public function get_pricing_details()
    {
        $id = $this->input->post('id');
        $pricing_details = $this->MyhubModel->get_pricing_details($id);
        // Return hub details as JSON response
        echo json_encode($pricing_details,true);
    }
    
}
