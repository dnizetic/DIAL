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
        
        //User must be logged in. Accessible to admins and users
        if (!$this->is_logged_in) {
            redirect('/');
        }
    }

    function index() {
        
        $user_id = $this->tank_auth->get_user_id();
        
        $this->form_validation->set_rules('first_name', 'First name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('last_name', 'Last name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|min_length[' . $this->config->item('username_min_length', 'tank_auth') . ']|max_length[' . $this->config->item('username_max_length', 'tank_auth') . ']|alpha_dash');

        if ($this->form_validation->run()) {
            $this->users_model->set_first_name($this->form_validation->set_value('first_name'));
            $this->users_model->set_last_name($this->form_validation->set_value('last_name'));
            $this->users_model->set_username($this->form_validation->set_value('username'));
            $this->users_model->set_id($user_id);
            $this->users_model->update();
            $this->message->set('success', "Information updated successfuly.");
        }

        $users = $this->users_model->select(array('id' => $user_id));
        if (empty($users)) {
            redirect('/');
        }
        $data['user'] = $users[0];
        
        $this->call_template('user/index', $data);
    }

}
