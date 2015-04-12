<?php

class Membership_model extends CI_Model {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
    }

    // Read data using username and password
    public function validate($data) {

        $condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . md5($data['password']) . "'";
        $this->db->select('*');
        $this->db->from('membership');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

// Insert registration data in database
    public function registration_insert($data) {

// Query to check whether username already exist or not
        $condition = "username =" . "'" . $data['username'] . "'";
        $this->db->select('*');
        $this->db->from('membership');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {

// Query to insert data in database
            $this->db->insert('membership', $data);
            if ($this->db->affected_rows() > 0) {
                return true;
            }
        } else {
            return false;
        }
    }

}
