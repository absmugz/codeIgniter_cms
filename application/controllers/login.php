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
    
    function signup (){
        
        $data['main_content'] = 'signup_form';
        $this->load->view('includes/templates', $data);
        
    }

}
