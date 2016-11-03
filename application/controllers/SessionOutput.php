<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SessionOutput extends CI_Controller {
    
    public function index()
    {
        // Get the session
        //if there is no session
        if(!$this->session->userdata('first_name'))
        {
            // tell user there is no session
            $data["msg"] = "<b>No Session!</b>";
            print "Can we get there";
        } 
        else {
            
            // Get information from the session
            $data = array(
                'sessionfirstname'    => $this->session->userdata('first_name'),
                'sessionlastname'     => $this->session->userdata('last_name'),
                'sessioncity'         => $this->session->userdata('city'),
                'sessionstate'        => $this->session->userdata('state'),
                'sessionage'          => $this->session->userdata('age'),
                'sessionphonenumber'  => $this->session->userdata('phone_number'),
            );

        }
        
        // pass the msg to the view
        $this->load->view("session_output", $data);
    }
    
}


