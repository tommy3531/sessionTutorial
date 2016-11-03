<?php 
	
	defined('BASEPATH') OR exit('No direct script access allowed');

	$cookie = get_cookie('age');
	// Get the flashdata
	$flashMsg = $this->session->flashdata('successData');

    $segments = array(
    					'index.php',
    					'Form',
                        'url',
                        'firstname' => $flashMsg['first_name'],
                        'lastname' => $flashMsg['last_name']
                    );
?> <!-- Closed Tage -->
<div id="container"> 
 	<?php echo form_open(base_url($segments))?>
	 <div class="form-group row">
      <p>This is the data sent over from the form after the data passed the validation process<br />
      	  Once the button is clicked the below steps will be completed,<br />
      	  all data will be viewed on page 3 to verify the below steps took place.<br /><br />
      </p>
      <ul>
      	<li>The firstname and Lastname will be passed as URL parameters</li>
      	<li>A cookie named age will be set</li>
      	<li>The phone number will be sent over as a session to</li>
      	<li>City and State are in variables</li>
      </ul>
    </div> <!-- End of form group -->
    <?php if($flashMsg['first_name']) : ?>
	        <div class="alert alert-success">
	        	<div class="form-group row">
	      			<label for="lblfirstname" class="col-xs-4 col-form-label">First Name</label>
	      			<div class="col-xs-10">
	        			<input class="form-control" type="text" name="firstname" value="<?php echo $flashMsg['first_name']; ?>" />
	      			</div>
	    		</div> <!-- End of First Name -->
	            <a href="#" class="close" data-dismiss="alert">&times;</a>

	        </div> <!-- End of alert div -->
	<?php endif; ?> <!-- End First name validation with flash -->
    <?php if($flashMsg['last_name']): ?>
	        <div class="alert alert-success">
	        	<div class="form-group row">
	      			<label for="lbllastname" class="col-xs-4 col-form-label">Last Name</label>
	      			<div class="col-xs-10">
	        			<input class="form-control" type="text" name="lastname" value="<?php echo $flashMsg['last_name']; ?>"/>
	      			</div>
	    		</div> <!-- End of last Name -->
	            <a href="#" class="close" data-dismiss="alert">&times;</a>
	            
	        </div> <!-- End of alert div -->
	<?php endif; ?> <!-- End last name validation with flash -->
	<?php if($flashMsg['city']): ?>
	        <div class="alert alert-success">
	        	<div class="form-group row">
	      			<label for="lblcity" class="col-xs-4 col-form-label">City</label>
	      			<div class="col-xs-10">
	        			<input class="form-control" type="hidden" name="city" value="<?php echo $flashMsg['city']; ?>"/>
	      			</div>
	    		</div> <!-- End of city-->
	            <a href="#" class="close" data-dismiss="alert">&times;</a>
	        </div> <!-- End of alert div -->
	<?php endif; ?> <!-- End city validation with flash -->
	<?php if($flashMsg['state']): ?>
	        <div class="alert alert-success">
	        	<div class="form-group row">
	      			<label for="lblstate" class="col-xs-4 col-form-label">State</label>
	      			<div class="col-xs-10">
	        			<input class="form-control" type="hidden" name="state" value="<?php echo $flashMsg['state']; ?>"/>
	      			</div>
	    		</div> <!-- End of state-->
	            <a href="#" class="close" data-dismiss="alert">&times;</a>
	        </div> <!-- End of alert div -->
	<?php endif; ?> <!-- End state validation with flash -->
	<?php if($cookie): ?>
	        <div class="alert alert-success">
	        	<div class="form-group row">
	      			<label for="lblage" class="col-xs-4 col-form-label">Age</label>
	      			<div class="col-xs-10">
	        			<input class="form-control" type="text" name="age" value="<?php echo $cookie ?>"/>
	      			</div>
	    		</div> <!-- End of age-->
	            <a href="#" class="close" data-dismiss="alert">&times;</a>
	        </div> <!-- End of alert div -->
	<?php endif; ?> <!-- End age validation with flash -->
	<?php if($flashMsg['pNum']): ?>
	        <div class="alert alert-success">
	        	<div class="form-group row">
	      			<label for="lblphonenumber" class="col-xs-4 col-form-label">Phone Number</label>
	      			<div class="col-xs-10">
	        			<input class="form-control" type="text" name="pNum" value="<?php echo $flashMsg['pNum']; ?>"/>
	      			</div>
	    		</div> <!-- End of age-->
	            <a href="#" class="close" data-dismiss="alert">&times;</a>
	        </div> <!-- End of alert div -->
	<?php endif; ?> <!-- End age validation with flash -->
    <button type="submit" class="btn btn-primary">Send Data to Page 3</button>
 </form> <!-- Closed form -->
</div> <!-- Closed div container -->