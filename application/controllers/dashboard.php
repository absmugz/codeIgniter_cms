<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Dashboard extends Admin_Controller {

    public function __construct() {
        parent::__construct();

        //Loading url helper
        $this->load->helper('url');
    }

    public function index() {

        $this->load->view('admin/components/_layout_main', $this->data);
    }

    public function modal() {

        $this->load->view('admin/components/_layout_modal', $this->data);
    }

}
