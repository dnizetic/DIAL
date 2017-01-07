<?php

class MY_Controller extends CI_Controller {

    var $is_logged_in = FALSE;
    var $is_admin = FALSE;
    var $is_user = FALSE;
    
    function __construct() {
        parent::__construct();
        $this->load->library('template');
        $this->load->library('tank_auth');
        $this->is_logged_in = $this->is_logged_in();
        $this->is_admin = $this->is_admin();
        $this->is_user = $this->is_logged_in && !$this->is_admin;
    }

    protected function call_template($view_path, $data) {
        
        $this->template->write_view('content', $view_path, $data);
        $this->template->render();
        
    }

    protected function is_admin() {
        return $this->tank_auth->is_logged_in() && $this->tank_auth->is_admin();
    }
    
    protected function is_logged_in() {
        return $this->tank_auth->is_logged_in();
    }
    
}
