<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SessionUri extends CI_Controller {
    
    public function index()
    {

        // http://localhost:8888/CS4830/index.php/sessionUri/?firstname=Tom&lastname=Marler
        
        // session_out form sent the firstName and lastname to url in get request
        // Store the get variables from the url is array and send to view
        
        $ageCookie = $this->input->get('age', True);
        $ageCookieSet = set_cookie($ageCookie);
        print_r($ageCookieSet);
        $data = array(
            'firstname' => $this->input->get('firstname', True),
            'lastname'  => $this->input->get('lastname', True),
            'cookieAge' => $ageCookie

        );

        $this->load->view('get_request', $data);
        

        
    }
    
}


