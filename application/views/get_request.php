<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
print "This is the start of the data from the Post method: <br />";
print_r($_POST); echo "<br />";
print "This is the end of the data from the Post method: <br />";
print "<br /> This is the start of the data from the Get method: <br />";
print_r($_GET); echo "<br />";
print "This is the end of the data from the Get method: <br />";
echo "<br /> Hello from Page 3:\n <br \>";
echo "Get request tells me Your name is still: ", $firstname, "<br \>";
echo "Get request tells me Your Lastname is still: ", $lastname, "<br \>";
echo "Age is a Cookie: ", $cookieAge , "<br \>";
echo "Session tells me your city: ", $this->session->city , "<br \>";
echo "Session tells me your state: ", $this->session->state , "<br \>";
echo "Session tells me your age: ", $this->session->age, "<br \>";
echo "Session tells me your phonenumber: ", $this->session->phone_number , "<br \>";