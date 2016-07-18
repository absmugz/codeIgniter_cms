<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MY_Controller extends CI_Controller {
    
 //In the constructor function we place code that needs to be run on every page/controller
    
    public $data = array();
    
    function __construct() {
        parent::__construct();
        $this->data['errors'] = array();
        $this->data['site_name'] = config_item('site_name');
    }
}

