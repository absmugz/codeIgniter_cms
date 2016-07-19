<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Dashboard extends Admin_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        
        $this->load->view('_layout_main');
        
    }
    
     public function modal() {
        
        $this->load->view('_layout_modal');
        
    }
}
