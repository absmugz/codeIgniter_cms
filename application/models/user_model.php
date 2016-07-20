<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class User_model extends MY_Model {

    public $table = 'users'; // you MUST mention the table name
    public $primary_key = 'id'; // you MUST mention the primary key
    public $fillable = array(); // If you want, you can set an array with the fields that can be filled by insert/update
    public $protected = array(); // ...Or you can set an array with the fields that cannot be filled by insert/update

    public function __construct() {
        parent::__construct();
    }

    public function login() {
        $user = $this->where(array(
                    'email' => $this->input->post('email'),
                    'password' => $this->hash($this->input->post('password'))
                ))->get();

        if (count($user)) {
            //Log in user
            $data = array(
                'name' => $user->name,
                'email' => $user->email,
                'id' => $user->id,
                'loggedin' => TRUE,
            );
            $this->session->set_userdata($data);
        }
    }

    public function logout() {
        $this->session->sess_destroy();
    }

    public function loggedin() {
       return (bool) $this->session->userdata('loggedin');
    }

    public function hash($string) {
        return hash('sha512', $string . config_item('encryption_key'));
    }

}
