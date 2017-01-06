<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends MY_Controller {

    function __construct() {
        parent::__construct();

        $this->load->helper('url');
        $this->load->library('tank_auth');
    }

    function index() {

        $data['user_id'] = $this->tank_auth->get_user_id();
        $data['username'] = $this->tank_auth->get_username();
        $this->call_template('welcome', $data);
    }

}