<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Load the database
        $this->load->database();
    }

    public function insert_user($data) {
        // Insert data into the 'user_master' table
        $this->db->insert('user_master', $data);
    }

    public function login($username, $password) {
        // Query to check if the username and password match
        $query = $this->db->get_where('user_master', array('username' => $username, 'password' => $password));

        // If a user with the given username and password exists, return the user data
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function get_user_details($user_id) {
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('user_master'); // Replace 'users' with your actual user table name
        return $query->row_array();
    }

    public function update_user($user_id, $data) {
        $this->db->where('user_id', $user_id);
        return $this->db->update('user_master', $data); // Update 'user_master' with your actual table name
    }

    public function insert_mainuser($user_data) {
        return $this->db->insert('mainuser_master', $user_data);
    }

    public function userlogin($user_data) {
        // Query to check if the username and password match
        $query = $this->db->get_where('mainuser_master', $user_data);

        // If a user with the given username and password exists, return the user data
        if ($query->num_rows() == 1) {
            return array("status"=>"200","data"=>$query->row());
        } else {
            return false;
        }
    }

    public function getNotificationsByUserId($user_id) {
        // Get notifications
        $this->db->select('*');
        $this->db->from('notification_master');
        $this->db->where('user_id', $user_id);
        $this->db->order_by('notification_datetime', 'DESC');
        $notifications = $this->db->get()->result_array();

        // Get unread notifications count
        $this->db->where('user_id', $user_id);
        $this->db->where('read_status', 'unread');
        $unread_count = $this->db->count_all_results('notification_master');

        return [
            'notifications' => $notifications,
            'unread_count' => $unread_count
        ];
    }

    public function getBookingDetails() {
        $this->db->select('
            bookings_master.bookings_id,
            bookings_master.booking_date,
            bookings_master.check_in_date,
            bookings_master.check_out_date,
            bookings_master.small_bags,
            bookings_master.medium_bags,
            bookings_master.large_bags,
            bookings_master.extra_large_bags,
            bookings_master.premium_services,
            bookings_master.total_cost,
            bookings_master.user_id,
            bookings_master.hub_id,
            bookings_master.status,
            bookings_master.created_at,
            mainuser_master.name,
            mainuser_master.email
        ');
        $this->db->from('bookings_master');
        $this->db->join('mainuser_master', 'bookings_master.user_id = mainuser_master.mainuser_id');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function update_status($booking_id, $status) {
        $this->db->set('status', $status);
        $this->db->where('bookings_id', $booking_id);
        return $this->db->update('bookings_master');
    }
}
