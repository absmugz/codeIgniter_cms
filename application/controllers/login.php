<?php

class Login extends CI_Controller {

    public function index() {
        $data['main_content'] = 'login_form';
        $this->load->view('includes/templates', $data);
    }

    function validate_credentials() {
        $this->load->model('membership_model');
        $query = $this->membership_model->validate();

        if ($query) { // if the user's credentials validated...
            $data = array(
                'username' => $this->input->post('username'),
                'is_logged_in' => true
            );
            $this->session->set_userdata($data);
            redirect('site/members_area');
        } else { // incorrect username or password
            $this->index();
        }
    }

}
