<?php print_r($_GET); ?>
<?php print_r($msg); ?>
<div id="container">
    <h1>This is the data from the form</h1>
    <p>The form information was stored in a session</p>
    <div id="body">
        <p>Hi! <?php echo $sessionfirstname; ?> This is form data retrieved from a session:</p>
            <?php echo "First Name: ", $sessionfirstname; ?><br />
            <code><?php echo "Last Name: ", $sessionlastname; ?></code><br />
            <code><?php echo "City: ", $sessioncity; ?></code><br />
            <code><?php echo "state: ", $sessionstate; ?></code><br />
            <code><?php echo "Age: ", $sessionage; ?></code><br />
            <code><?php echo "Phone number: ", $sessionphonenumber; ?></code><br />
    </div>
</div>
<div id="container">
    <h1>Session Data from the original form inputed into form</h1>
    <p>Sending firstname and last name to url as GET Query. Once the form submit
    button is pressed.  You will be redirect to a url with first name and lastname as query string in url</p>

    <?php
    $segments = array(
                        'index.php',
                        'sessionUri/?',
                        'firstname=&' => $sessionfirstname,
                        '&lastname=' => $sessionlastname
                    );
    ?>

    <div id="body">
        <form id="get_form" class="form-horizontal" method="get" action="<?=site_url($segments)?>">
              First Name: <input type="text" name="firstname" value='<?php echo $sessionfirstname;?>' />
               Last Name: <input type="text" name="lastname" value='<?php echo $sessionlastname;?>' />
                    City: <input type="text" name="city" value='<?php echo $sessioncity;?>'/>
                   State: <input type="text" name="state" value='<?php echo $sessionstate;?>'/>
                     Age: <input type="text" name="age" value='<?php echo $sessionage;?>'/>
            Phone Number: <input type="text" name="phonenumber" value='<?php echo $sessionphonenumber;?>'/>
                          <input type="submit" value="Submit" name="submit">
        </form>
    </div>
</div>
