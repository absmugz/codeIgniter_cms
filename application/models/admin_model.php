<?php

class Admin_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    public function verify_user($email, $password) {

        $limit = 1;
        $q = $this->db->get_where('users', array('email_address' => $email, 'password' => sha1($password)), $limit);

        if ($q->num_rows > 0) {
            echo '<pre>';
            print_r($q->row());
            echo '</pre>';
            //return $q->row();
        }
    }

}
