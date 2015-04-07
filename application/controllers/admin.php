<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index() {
        //echo sha1('mypassword');die();
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email_address', 'Email Address', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
        
        if ( $this->form_validation->run() !==false) {
            
            $this->load->model('admin_model');
            $this->admin_model->verify_user('absmugz09@gmail.com', 'mypassword');
            //then the validation passed, Get from db.
            
            
        }



        $this->load->view('login_view');
    }

}
