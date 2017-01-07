<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends MY_Controller {

    function __construct() {
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $this->load->library('tank_auth');
        $this->load->library('form_validation');
        $this->load->library('message');
        $this->load->model('users_model');

        //User must be logged in, and must be admin
        if (!$this->tank_auth->is_logged_in()) {
            redirect('/');
        }
    }

    function index() {
        $data = [];
        $this->call_template('user/index', $data);
    }

}
