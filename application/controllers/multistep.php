<?php

class Multistep extends CI_Controller {

    public function __construct() {
        parent::__construct();
// Load form helper library
//$this->load->helper('form');
// Load form validation library
        $this->load->library('form_validation');

// Load session library
//$this->load->library('session');
// Load database
        //$this->load->model('multistep_model');
    }

    //the function that loads the first form<br><br>
    public function index() {
        $this->load->view('multistep/step_1');
    }

//in your form1 use form_open('author/submit_step1') to access the second function
    public function step_2() {
        //load your model here and a method to save these items
        //redirect to the same controller but the second method that loads the second form

        $data = array(
            'name' => $this->input->post('name'),
            'surname' => $this->input->post('surname'),
            'username' => $this->input->post('username'),
            'email_address' => $this->input->post('email_address'),
            'password' => $this->input->post('password')
        );

        $this->session->set_userdata($data);
        //var_dump($data);
        $this->load->view('multistep/step_2'); //loads the second form
    }

//function that loads form2
    public function step_3() {

        $data = array(
            'gender' => $this->input->post('gender')
        );

        $this->session->set_userdata($data);
        $this->load->view('multistep/step_3'); //loads the third form
    }


    public function step_4() {
        $this->load->view('multistep/step_4'); //loads the forth form
    }

    public function step_5() {
        var_dump($_SESSION);
        $this->load->view('multistep/step_5'); //loads the fifth form
    }

}
