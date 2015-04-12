<?php

class Login extends CI_Controller {

    public function index() {
        $data['main_content'] = 'login_form';
        $this->load->view('includes/templates', $data);
    }

    function validate_credentials() {
        $this->load->model('membership_model');

        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );

        $result = $this->membership_model->validate($data);
        if ($result == TRUE) {
            $sess_array = array(
                'username' => $this->input->post('username')
            );
            $this->session->set_userdata($sess_array);
            redirect('site/members_area');
        } else { // incorrect username or password
            $this->index();
        }
    }

    function signup() {

        $data['main_content'] = 'signup_form';
        $this->load->view('includes/templates', $data);
    }

    function create_member() {

        $this->load->library('form_validation');
        $this->load->model('membership_model');
        // field name, error message, validation rules
        $this->form_validation->set_rules('first_name', 'Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('signup_form');
        } else {
            $data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email_address' => $this->input->post('email_address'),
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password'))
            );
            $result = $this->membership_model->registration_insert($data);
            if ($result == TRUE) {
                $data['main_content'] = 'registration_successfully';
                $this->load->view('includes/templates', $data);
            } else {
                $data['main_content'] = 'username_already_exist';
                $this->load->view('includes/templates', $data);
            }
        }
    }

}
