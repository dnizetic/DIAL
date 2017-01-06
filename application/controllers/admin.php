<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends MY_Controller {

    function __construct() {
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $this->load->library('tank_auth');
        $this->load->library('form_validation');
        $this->load->library('message');
        $this->load->model('users_model');

        //User must be logged in, and must be admin
        if (!$this->tank_auth->is_logged_in() || !$this->tank_auth->is_admin()) {
            redirect('/');
        }
    }

    function index() {
        $data['users'] = $this->users_model->select(array('is_admin' => null));
        $this->call_template('admin/index', $data);
    }

    function edit($user_id) {

        $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email');
        $this->form_validation->set_rules('first_name', 'First name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('last_name', 'Last name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|min_length[' . $this->config->item('username_min_length', 'tank_auth') . ']|max_length[' . $this->config->item('username_max_length', 'tank_auth') . ']|alpha_dash');

        if ($this->form_validation->run()) {
            $this->users_model->set_email($this->form_validation->set_value('email'));
            $this->users_model->set_first_name($this->form_validation->set_value('first_name'));
            $this->users_model->set_last_name($this->form_validation->set_value('last_name'));
            $this->users_model->set_username($this->form_validation->set_value('username'));
            $this->users_model->set_id($user_id);
            $this->users_model->update();
            $this->message->set('success', "User updated successfuly.");
            redirect('admin/index');
        }

        $users = $this->users_model->select(array('id' => $user_id));
        if (empty($users)) {
            redirect('admin/index');
        }
        $data['user'] = $users[0];

        $this->call_template('admin/edit', $data);
    }

    function delete($user_id) {
        $this->users_model->set_id($user_id);
        $this->users_model->delete();
        $this->message->set('success', "User deleted successfuly.");
        redirect('admin/index');
    }

    function status($activated, $user_id) {
        $this->users_model->set_activated($activated);
        $this->users_model->set_id($user_id);
        $this->users_model->update();
        $this->message->set('success', "User status updated to " . $activated . '.');
        redirect('/admin/index');
    }

}
