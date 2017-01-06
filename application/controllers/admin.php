<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->helper('url');
        $this->load->library('tank_auth');
        
        //User must be logged in, and must be admin
        if(!$this->tank_auth->is_logged_in() || !$this->tank_auth->is_admin()) {
            redirect('/');
        }
    }

    function index() {

        $this->load->model('users_model');
        
        $data['users'] = $this->users_model->select(array('is_admin' => null));
        $this->load->view('admin/index', $data);
        
    }
    
    function delete($user_id) {
        
        
        
    }
    
    function status($activated, $user_id) {
        
        $this->load->model('users_model');
        $this->users_model->set_activated($activated);
        $this->users_model->set_id($user_id);
        $this->users_model->update();
        redirect('/admin/index');
        
    }

}