<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adminprofile extends CI_Controller
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
    public function index()
    {
        // Check if the user is logged in
        if (!$this->session->userdata('user_id')) {
            // If not logged in, redirect to the login page
            redirect('Login');
        }

        // Get user ID from session
        $user_id = $this->session->userdata('user_id');
        $this->load->model('UserModel');
        // Fetch user details from the model
        $data['user'] = $this->UserModel->get_user_details($user_id);
        // echo "<pre>"; print_r($data); die;
        // Pass the user details to the view
        $this->load->view('Admin/header');
        $this->load->view('Admin/profile_view', $data);
        $this->load->view('Admin/footer');
    }

    public function update_user() {
        $user_id = $this->input->post('user_id');
        $this->load->model('UserModel');
        // Check if files are uploaded
        $identity = $this->input->post('prev_identity');
        $profile_pic = $this->input->post('prev_profile_pic');

        // If files are uploaded, move them to the desired location
        if (!empty($_FILES['identity']['name'])) {
            $config['upload_path'] = './uploads/hub_images/';
            $config['allowed_types'] = 'jpg|jpeg|png|pdf';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('identity')) {
                echo $this->upload->display_errors();
                return;
            }
            $identity = $this->upload->data('file_name');
        }

        if (!empty($_FILES['profile_pic']['name'])) {
            $config['upload_path'] = './uploads/hub_images/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('profile_pic')) {
                echo $this->upload->display_errors();
                return;
            }
            $profile_pic = $this->upload->data('file_name');
        }

        $data = array(
            'full_name' => $this->input->post('full_name'),
            'about' => $this->input->post('about'),
            'email' => $this->input->post('email'),
            'mobilenumber' => $this->input->post('mobilenumber'),
            'identity' => $identity,
            'profile_pic' => $profile_pic,
            'established_date' => $this->input->post('established_date')
        );
        // echo json_encode($data); die;
        // Call the model function to update user details
        $result = $this->UserModel->update_user($user_id, $data);

        if ($result) {
            echo "Data updated successfully";
        } else {
            echo "Error updating data";
        }
    }
}
