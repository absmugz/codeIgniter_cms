<?php

class Membership_model extends CI_Model {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
    }

    function validate() {
        
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', md5($this->input->post('password')));
        $query = $this->db->get('membership');

        if ($query->num_rows == 1) {
            return true;
        }
    }

}
