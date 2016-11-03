<?php 
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	// Get the flashdata
	$flashMsg = $this->session->flashdata('errorData');
?>
<!-- Error View -->
<div id="container"> 
  <form name="input" action="verify" method="post">
    <div class="form-group row">
      <p>Please fill in all textboxs with data <br />
          1. If all textboxes are not filled in should show error <br />
          2. Once the data passes the validation form the data is <br />
          sent as a post request to page 2. <br />
      </p>
    </div> <!-- End of form group -->
	<?php if($flashMsg['firstnameError']):  ?>
	        <div class="alert alert-danger">
	        	<div class="form-group row">
	      			<label for="lblfirstname" class="col-xs-4 col-form-label">First Name</label>
	      			<div class="col-xs-10">
	        			<input class="form-control" type="text" name="firstname" />
	      			</div>
	    		</div> <!-- End of First Name -->
	            <a href="#" class="close" data-dismiss="alert">&times;</a>
	            <?php echo $flashMsg['firstnameError']; ?>
	        </div> <!-- End of alert div -->
	<?php elseif($flashMsg['firstnameSuccess']): ?>
	        <div class="alert alert-success">
	        	<div class="form-group row">
	      			<label for="lblfirstname" class="col-xs-4 col-form-label">First Name</label>
	      			<div class="col-xs-10">
	        			<input class="form-control" type="text" name="firstname" value="<?php echo $flashMsg['firstnameSuccess'];?>"/>
	      			</div>
	    		</div> <!-- End of First Name -->
	            <a href="#" class="close" data-dismiss="alert">&times;</a>
	        </div> <!-- End of alert div -->
	<?php endif; ?> <!-- End First name validation with flash -->
    <?php
		if($flashMsg['lastnameError']): ?>
	        <div class="alert alert-danger">
	        	<div class="form-group row">
	      			<label for="lbllastname" class="col-xs-4 col-form-label">Last Name</label>
	      			<div class="col-xs-10">
	        			<input class="form-control" type="text" name="lastname" />
	      			</div>
	    		</div> <!-- End of last Name -->
	            <a href="#" class="close" data-dismiss="alert">&times;</a>
	            <?php echo $flashMsg['lastnameError']; ?>
	        </div> <!-- End of alert div -->
	<?php elseif($flashMsg['lastnameSuccess']): ?>
	        <div class="alert alert-success">
	        	<div class="form-group row">
	      			<label for="lbllastname" class="col-xs-4 col-form-label">Last Name</label>
	      			<div class="col-xs-10">
	        			<input class="form-control" type="text" name="lastname" value="<?php echo $flashMsg['lastnameSuccess'];?>"/>
	      			</div>
	    		</div> <!-- End of Last Name -->
	            <a href="#" class="close" data-dismiss="alert">&times;</a>
	        </div> <!-- End of alert div -->
	<?php endif; ?> <!-- End Last name validation with flash -->
    <?php
		if($flashMsg['cityError']): ?>
	        <div class="alert alert-danger">
	        	<div class="form-group row">
	      			<label for="lblcity" class="col-xs-4 col-form-label">City</label>
	      			<div class="col-xs-10">
	        			<input class="form-control" type="text" name="city" />
	      			</div>
	    		</div> <!-- End of city -->
	            <a href="#" class="close" data-dismiss="alert">&times;</a>
	            <?php echo $flashMsg['cityError']; ?>
	        </div> <!-- End of alert div -->
	<?php elseif($flashMsg['citySuccess']): ?>
	        <div class="alert alert-success">
	        	<div class="form-group row">
	      			<label for="lblfirstname" class="col-xs-4 col-form-label">City</label>
	      			<div class="col-xs-10">
	        			<input class="form-control" type="text" name="city" value="<?php echo $flashMsg['citySuccess'];?>"/>
	      			</div>
	    		</div> <!-- End of City -->
	            <a href="#" class="close" data-dismiss="alert">&times;</a>
	        </div> <!-- End of alert div -->
	<?php endif; ?> <!-- End City validation with flash -->
    <?php
		if($flashMsg['stateError']): ?>
	        <div class="alert alert-danger">
	        	<div class="form-group row">
	      			<label for="lblstate" class="col-xs-4 col-form-label">State</label>
	      			<div class="col-xs-10">
	        			<input class="form-control" type="text" name="state" />
	      			</div>
	    		</div> <!-- End of state -->
	            <a href="#" class="close" data-dismiss="alert">&times;</a>
	            <?php echo $flashMsg['stateError']; ?>
	        </div> <!-- End of alert div -->
	<?php elseif($flashMsg['stateSuccess']): ?>
	        <div class="alert alert-success">
	        	<div class="form-group row">
	      			<label for="lblstate" class="col-xs-4 col-form-label">State</label>
	      			<div class="col-xs-10">
	        			<input class="form-control" type="text" name="state" value="<?php echo $flashMsg['stateSuccess'];?>"/>
	      			</div>
	    		</div> <!-- End of State -->
	            <a href="#" class="close" data-dismiss="alert">&times;</a>
	        </div> <!-- End of alert div -->
	<?php endif; ?> <!-- End State validation with flash -->
    <?php
		if($flashMsg['ageError']): ?>
	        <div class="alert alert-danger">
	        	<div class="form-group row">
	      			<label for="lblage" class="col-xs-4 col-form-label">Age</label>
	      			<div class="col-xs-10">
	        			<input class="form-control" type="text" name="age" />
	      			</div>
	    		</div> <!-- End of age -->
	            <a href="#" class="close" data-dismiss="alert">&times;</a>
	            <?php echo $flashMsg['ageError']; ?>
	        </div> <!-- End of alert div -->
	<?php elseif($flashMsg['ageSuccess']): ?>
	        <div class="alert alert-success">
	        	<div class="form-group row">
	      			<label for="lblage" class="col-xs-4 col-form-label">Age</label>
	      			<div class="col-xs-10">
	        			<input class="form-control" type="text" name="age" value="<?php echo $flashMsg['ageSuccess'];?>"/>
	      			</div>
	    		</div> <!-- End of Age -->
	            <a href="#" class="close" data-dismiss="alert">&times;</a>
	        </div> <!-- End of alert div -->
	<?php endif; ?> <!-- End Age validation with flash -->
    <?php
		if($flashMsg['pNumError']): ?>
	        <div class="alert alert-danger">
	        	<div class="form-group row">
	      			<label for="lblphonenumber" class="col-xs-4 col-form-label">Phone Number</label>
	      			<div class="col-xs-10">
	        			<input class="form-control" type="text" name="pNum" />
	      			</div>
	    		</div> <!-- End of phone number -->
	            <a href="#" class="close" data-dismiss="alert">&times;</a>
	            <?php echo $flashMsg['pNumError']; ?>
	        </div> <!-- End of alert div -->
	<?php elseif($flashMsg['pNumSuccess']): ?>
	        <div class="alert alert-success">
	        	<div class="form-group row">
	      			<label for="lblphonenumber" class="col-xs-4 col-form-label">Phone Number</label>
	      			<div class="col-xs-10">
	        			<input class="form-control" type="text" name="pNum" value="<?php echo $flashMsg['pNumSuccess'];?>"/>
	      			</div>
	    		</div> <!-- End of Age -->
	            <a href="#" class="close" data-dismiss="alert">&times;</a>
	        </div> <!-- End of alert div -->
	<?php endif; ?> <!-- End Age validation with flash -->

    <button type="submit" class="btn btn-primary">Verify Data</button>
 </form> <!-- Closed form -->
</div> <!-- Closed div container -->

