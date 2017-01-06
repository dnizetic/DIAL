<?php

class MY_Controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('template');
    }

    protected function call_template($view_path, $data) {
        
        $this->template->write_view('content', $view_path, $data);
        $this->template->render();
        
    }

}
