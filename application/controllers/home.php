<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends MY_Controller {

    function __construct() {
        parent::__construct();

        $this->load->helper('url');
        $this->load->library('tank_auth');
    }

    function index() {
        
        $this->breadcrumbs->push('Home', "/");
        
        $data['user_id'] = $this->tank_auth->get_user_id();
        $data['username'] = $this->tank_auth->get_username();
        $this->call_template('home/index', $data);
    }

}