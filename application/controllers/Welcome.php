<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('partials/header_view');
		$this->load->view('welcome/welcomeform_view');
		$this->load->view('partials/footer_view');

	}

}
