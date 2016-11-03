<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	public function index()
	{

	}

	// Verified the form field are filled out
	// If all 'required' field are filled in with data, go to datapass_view
	// else the data is wrong load dataerror_view and show errors
	public function verify()
	{

		// Need to get the form data
		$userInfo = $this->input->post();
		// Check if firstname and lastname have data in them
		$this->form_validation->set_rules('firstname', 'First Name', 'required');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('state', 'State', 'required');
		$this->form_validation->set_rules('age', 'Age', 'required');
		$this->form_validation->set_rules('pNum', 'Phone Number', 'required');


		// If validation is false show errors on error_view
		if ($this->form_validation->run() == FALSE)
		{
			// If we got here we know there is a validation error someWhere
			// Should not be an error if it is not filled out
			
			// Check and see if FIRSTNAME is null
			if($userInfo['firstname'] != ''){
				$data['firstnameSuccess'] = $this->input->post('firstname');
				$data['firstnameError'] = 0;
			} else{
				$data['firstnameError'] = "First Name can not be blank";
				$data['firstnameSuccess'] = 0;
			}

			// Check and see if LASTNAME is null
			if($userInfo['lastname'] != ''){
				$data['lastnameSuccess'] = $this->input->post('lastname');
				$data['lastnameError'] = 0;
			} else{
				$data['lastnameError'] = "Last Name can not be blank";
				$data['lastnameSuccess'] = 0;
			}
		    
		    // Check and see if CITY is null
			if($userInfo['city'] != ''){
				$data['citySuccess'] = $this->input->post('city');
				$data['cityError'] = 0;
			} else{
				$data['cityError'] = "City can not be blank";
				$data['citySuccess'] = 0;
			}

			// Check and see if STATE is null
			if($userInfo['state'] != ''){
				$data['stateSuccess'] = $this->input->post('state');
				$data['stateError'] = 0;
			} else{
				$data['stateError'] = "State can not be blank";
				$data['stateSuccess'] = 0;
			}

			// Check and see if AGE is null
			if($userInfo['age'] != ''){
				$data['ageSuccess'] = $this->input->post('age');
				$data['ageError'] = 0;
			} else{
				$data['ageError'] = "Age can not be blank";
				$data['ageSuccess'] = 0;
			}

			// Check and see if phonenumber is null
			if($userInfo['pNum'] != ''){
				$data['pNumSuccess'] = $this->input->post('pNum');
				$data['pNumError'] = 0;
			} else{
				$data['pNumError'] = "Phone Number can not be blank";
				$data['pNumSuccess'] = 0;
			}



			//$data['firstnameError'] = "First Name can not blank!!!";
			// $data['lastnameError']  = "Last Name can not blank!!!";
			// $data['cityError']      = "City can not blank!!!";
			// $data['stateError']     = "State can not blank!!!";
			// $data['ageError']       = "Age can not blank!!!";
			// $data['pNumError']      = "Phone Number can not blank!!!";
			// This is flashdata not session
			$this->session->set_flashdata('errorData', $data);

			// Load Error view
			$this->load->view('partials/header_view');
			$this->load->view('form/error_view', $userInfo);
			$this->load->view('partials/footer_view');
		}
		else
		{
			// Everything use flashdata to show error or success on form
			$this->flashData();
		}
	}

	// This is page two
	public function flashData()
	{
		// Setting the cookie
		$this->input->set_cookie('age', $this->input->post('age'), 3600);

		$sessData = array(
							 'pNum' => $this->input->post('pNum')
			);
		//Set Session
		$this->session->set_userdata('session_data', $sessData);

		// Post data from form
        $data = array(
            'first_name'   => $this->input->post('firstname'),
            'last_name'    => $this->input->post('lastname'),
            'city'         => $this->input->post('city'),
            'state'        => $this->input->post('state'),
            'pNum'         => $this->input->post('pNum'),
            'success'	   => True
        
        );

        // FlashData used to keep track of state
        $this->session->set_flashdata('successData', $data);

		$this->load->view('partials/header_view');
		$this->load->view('form/verified_view');
		$this->load->view('partials/footer_view');
	}

	public function url($f, $l)
	{
		// Get the cookie information
		$cookieData = $this->input->cookie('age', TRUE);

		$data = array(
						'url_First_Name' => $f,
						'url_Last_Name'  => $l,
            			'city'           => $this->input->post('city'),
            			'state'			 => $this->input->post('state'),
            			'ageCookie'		 => $cookieData
				);
		//$data['f'] = $this->uri->segment(3);
		// $data['l'] = $this->uri->segment(4);
		$this->load->view('partials/header_view');
		$this->load->view('form/url_view', $data);
		$this->load->view('partials/footer_view');

	}
}