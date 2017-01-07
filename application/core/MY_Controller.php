<?php

class MY_Controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('template');
        $this->load->library('tank_auth');
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
