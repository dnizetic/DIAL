<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends MY_Controller {

    function __construct() {
        parent::__construct();

        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('tank_auth');
        $this->load->library('message');
    }

    function index() {
        
        //Inaccessible to authorized users
        if($this->is_logged_in) {
            if($this->is_admin) {
                redirect('admin/index');
            } else {
                redirect('user/index');
            }
        }
        
        $this->breadcrumbs->push('Home', "/");
        
        $data['user_id'] = $this->tank_auth->get_user_id();
        $data['username'] = $this->tank_auth->get_username();
        
        $data['hide_navigation'] = true;
        $this->call_template('home/index', $data);
    }

}