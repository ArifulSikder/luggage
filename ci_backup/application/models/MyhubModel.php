<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MyhubModel extends CI_Model
{

    public function insert_hub($data)
    {
        return $this->db->insert('myhub_master', $data);
    }

    public function get_hub_summary($user_id)
    {
        // Fetch hub summary data from database based on user_id
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('myhub_master');
        return $query->result_array();
    }

    public function get_hub_details($id)
    {
        // Fetch hub details from database based on the provided ID
        // Example query assuming you have a table named 'hubs'
        $query = $this->db->get_where('myhub_master', array('id' => $id));
        return $query->row_array(); // Return hub details as an associative array
    }

    public function gethubdetails($id)
    {
        $this->db->select('myhub_master.*, user_master.*, hubpricing_master.*'); // Select all columns from both tables
        $this->db->from('myhub_master');
        $this->db->join('user_master', 'myhub_master.user_id = user_master.user_id', 'LEFT');
        $this->db->join('hubpricing_master', 'hubpricing_master.hub_id = myhub_master.id', 'LEFT');
        $this->db->where('myhub_master.id', $id);
        $query = $this->db->get();

        return $query->row_array();
    }

    public function get_hub_list()
    {
        // Assuming you have a table named 'hubs'
        $query = $this->db->get('myhub_master'); // Replace 'hubs' with your actual table name
        return $query->result_array(); // Return the result as an associative array
    }

    public function update_hub($hub_id, $data)
    {
        // Update hub details in the database
        $this->db->where('id', $hub_id);
        $this->db->update('myhub_master', $data);

        // Check if update was successful
        return $this->db->affected_rows() > 0;
    }

    public function add_pricing($data)
    {
        // Check if hub_id exists
        $hub_id = $data['hub_id']; // Assuming hub_id is present in the $data array
        $query = $this->db->get_where('hubpricing_master', array('hub_id' => $hub_id));
        $existing_record = $query->row_array();

        // If hub_id exists, update the record; otherwise, insert a new record
        if ($existing_record) {
            $this->db->where('hub_id', $hub_id);
            $this->db->update('hubpricing_master', $data);
        } else {
            $this->db->insert('hubpricing_master', $data);
        }

        // Check if the operation was successful
        return $this->db->affected_rows() > 0;
    }

    public function get_pricing_details($id)
    {
        // Fetch hub details from database based on the provided ID
        $query = $this->db->get_where('hubpricing_master', array('hub_id' => $id));

        if ($query->num_rows() > 0) {
            // If rows are found, return status as success along with the row data
            return array(
                'status' => 'success',
                'message' => 'Pricing details retrieved successfully',
                'row' => $query->row_array()
            );
        } else {
            // If no rows found, return status as error with a message
            return array(
                'status' => 'error',
                'message' => 'No pricing details found for the provided ID',
                'row' => null
            );
        }
    }

    public function find_locations_within_radius($lat, $lon, $radius_km)
    {
        // SQL query to find locations within the given radius
        $sql = "
            SELECT *, (
                6371 * acos(
                    cos(radians(?)) * cos(radians(latvalue)) * cos(radians(lonvalue) - radians(?)) +
                    sin(radians(?)) * sin(radians(latvalue))
                )
            ) AS distance
            FROM myhub_master mm
            LEFT JOIN hubpricing_master hum ON hum.hub_id = mm.id
            HAVING distance <= ?
            ORDER BY distance;
        ";

        // Execute the query
        $query = $this->db->query($sql, [$lat, $lon, $lat, $radius_km]);

        if ($query->num_rows() > 0) {
            // If rows are found, return status as success along with the row data
            return array(
                'status' => 'success',
                'message' => 'Listing details retrieved successfully',
                'row' => $query->result_array()
            );
        } else {
            // If no rows found, return status as error with a message
            return array(
                'status' => 'error',
                'message' => 'No Provider found in this location',
                'row' => array()
            );
        }
        // Return the results
        // return $query->result_array();
    }

    function GetHostDetails($id)
    {
        // Query the user_master table
        $userQuery = $this->db->get_where('user_master', array('user_id' => $id));

        // Check if the user exists
        if ($userQuery->num_rows() > 0) {
            // Get the user data
            $userData = $userQuery->result_array();

            // Query the myhub_master table by user_id
            $this->db->where('user_id', $id);
            $myhubQuery = $this->db->get('myhub_master');

            // Get the myhub data
            $myhubData = $myhubQuery->result_array();

            // Return both sets of data
            return array(
                'status' => 'success',
                'message' => 'Listing details retrieved successfully',
                'user' => $userData,
                'myhub' => $myhubData
            );
        } else {
            // If no user is found
            return array(
                'status' => 'error',
                'message' => 'No Provider found in this location',
                'user' => array(),
                'myhub' => array()
            );
        }
    }

    public function getOption($data)
    {
        $query = $this->db->get_where('options_master', $data);
        $existing_record = $query->row_array();
        if ($query->num_rows() > 0) {
            // If rows are found, return status as success along with the row data
            return array(
                'status' => 'success',
                'message' => 'Option Details',
                'row' => $query->row_array()
            );
        } else {
            // If no rows found, return status as error with a message
            return array(
                'status' => 'error',
                'message' => 'No Details found',
                'row' => array()
            );
        }
    }

    public function calculateTotalCost($hub_id, $checkInDate, $checkOutDate, $smallBags, $mediumBags, $largeBags, $extraLargeBags, $premiumServices)
    {
        $taxarr = $this->getOption(array('option_identity' => 'Tax'));
        $tax = $taxarr['row']['option_value'];
        // Calculate total cost logic
        // Example logic (you need to replace this with your own logic)
        $days = (strtotime($checkOutDate) - strtotime($checkInDate)) / (60 * 60 * 24);
        $smallPrice = $this->getDailyPrice($hub_id, 'small') * $smallBags * $days;
        $mediumPrice = $this->getDailyPrice($hub_id, 'medium') * $mediumBags * $days;
        $largePrice = $this->getDailyPrice($hub_id, 'large') * $largeBags * $days;
        $extraLargePrice = $this->getDailyPrice($hub_id, 'extra_large') * $extraLargeBags * $days;

        $premiumServiceCost = 0;
        if ($premiumServices) {
            foreach ($premiumServices as $service) {
                $premiumServiceCost += $service;//$this->getPremiumServicePrice($hub_id,$service);
            }
        }
        $totalAmount = ($smallPrice + $mediumPrice + $largePrice + $extraLargePrice + $premiumServiceCost) + (($smallPrice + $mediumPrice + $largePrice + $extraLargePrice + $premiumServiceCost) * ($tax / 100));
        return $totalAmount;//$smallPrice + $mediumPrice + $largePrice + $extraLargePrice + $premiumServiceCost;
    }

    public function createBooking($hub_id, $checkInDate, $checkOutDate, $smallBags, $mediumBags, $largeBags, $extraLargeBags, $premiumServices, $totalCost)
    {
        // Insert booking into database
        $data = [
            'check_in_date' => $checkInDate,
            'check_out_date' => $checkOutDate,
            'small_bags' => $smallBags,
            'medium_bags' => $mediumBags,
            'large_bags' => $largeBags,
            'extra_large_bags' => $extraLargeBags,
            'premium_services' => json_encode($premiumServices),
            'total_cost' => $totalCost,
            'status' => 'Booked',
            'user_id' => $this->session->userdata('mainuser_id'),
            'hub_id' => $hub_id
        ];
        $this->db->insert('bookings_master', $data);
        if ($this->db->affected_rows() > 0) {
            
            $this->db->select('user_id');
            $this->db->from('myhub_master');
            $this->db->where('id', $hub_id);
            $query = $this->db->get();

            if ($query->num_rows() > 0) {
                $row = $query->row();
                $user_id = $row->user_id;

                // Proceed to insert into notification_master table
                $notificationData = [
                    'notification_text' => 'You got a new booking',
                    'notification_datetime' => date('Y-m-d H:i:s'),
                    'user_id' => $user_id,
                    'mainuser_id' => $this->session->userdata('mainuser_id'),
                    'read_status' => 'unread'
                ];

                $this->db->insert('notification_master', $notificationData);
            }
            return array(
                'status' => 'success',
                'message' => 'Booking Confirmed',
                'id' => $this->db->insert_id()
            );
        } else {
            // If no rows found, return status as error with a message
            return array(
                'status' => 'error',
                'message' => 'Booking failed',
                'id' => 0
            );
        }
    }

    public function getDailyPrice($hub_id, $size)
    {
        // Define the query
        $this->db->select('hubpricing_id, hub_id, hourlyPrice1, dailyPrice1, hourlyPrice2, dailyPrice2, hourlyPrice3, dailyPrice3, hourlyPrice4, dailyPrice4, premiumServiceRate1, premiumServiceRate2, premiumServiceRate3, createdAt');
        $this->db->from('hubpricing_master');
        $this->db->where('hub_id', $hub_id);
        $query = $this->db->get();

        // Check if any results are returned
        if ($query->num_rows() == 0) {
            throw new Exception("No data found for hub_id: $hub_id");
        }

        // Get the row
        $result = $query->row_array();

        // Determine the daily price based on size
        switch ($size) {
            case 'small':
                return $result['dailyPrice1'];
            case 'medium':
                return $result['dailyPrice2'];
            case 'large':
                return $result['dailyPrice3'];
            case 'extra_large':
                return $result['dailyPrice4'];
            default:
                throw new Exception("Invalid size: $size");
        }
    }

    private function getPremiumServicePrice($hub_id, $service)
    {
        // Get premium service price based on service ID
        // Define the query
        $this->db->select('hubpricing_id, hub_id, hourlyPrice1, dailyPrice1, hourlyPrice2, dailyPrice2, hourlyPrice3, dailyPrice3, hourlyPrice4, dailyPrice4, premiumServiceRate1, premiumServiceRate2, premiumServiceRate3, createdAt');
        $this->db->from('hubpricing_master');
        $this->db->where('hub_id', $hub_id);
        $query = $this->db->get();

        // Check if any results are returned
        if ($query->num_rows() == 0) {
            throw new Exception("No data found for hub_id: $hub_id");
        }

        // Get the row
        $result = $query->row_array();

        // Determine the daily price based on size
        switch ($service) {
            case 'small':
                return $result['dailyPrice1'];
            case 'medium':
                return $result['dailyPrice2'];
            case 'large':
                return $result['dailyPrice3'];
            case 'extra_large':
                return $result['dailyPrice4'];
            default:
                throw new Exception("Invalid size: $size");
        }
        // Example logic
        $prices = [
            '1' => 5,
            '2' => 10,
            '3' => 15
        ];
        return $prices[$serviceId];
    }

}

?>