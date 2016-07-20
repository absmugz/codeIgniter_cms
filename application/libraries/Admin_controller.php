<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Admin_Controller extends MY_Controller {
    
 //In the constructor function we place code that needs to be run on every page/controller
   
    function __construct() {
        parent::__construct();
        $this->data['meta_title'] = 'My awesome CMS';
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('user_model');

        
      
    }
}

