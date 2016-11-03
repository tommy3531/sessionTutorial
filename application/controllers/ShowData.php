<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShowData extends CI_Controller {
    
    public function index()
    {
    	$data['msg'] = "This is from the index function";
    	$this->load->view('partials/header_view');
		$this->load->view('show_data');
		$this->load->view('partials/footer_view');
    }
}