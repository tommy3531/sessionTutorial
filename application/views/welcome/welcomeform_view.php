<!-- This is the form that is presented when the user visits the site -->


<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div id="container"> 
  <form name="input" action="index.php/Form/verify" method="post">
    <div class="form-group row">
      <p>Please follow the below form instructions<br /><br />
      <ul>
        <li>Fill in all textFields if not you will be redirected to error view</li>
        <li>If data is correct you will be redirect to success view</li>

      </ul>
    </div> <!-- End of form group -->
    <div class="form-group row">
      <label for="lblfirstname" class="col-xs-4 col-form-label">First Name</label>
      <div class="col-xs-10">
        <input class="form-control" type="text" name="firstname" />
      </div>
    </div> <!-- End of First Name -->
    <div class="form-group row">
      <label for="lbllastname" class="col-xs-4 col-form-label">Last Name</label>
      <div class="col-xs-10">
        <input class="form-control" type="text" name="lastname" />
      </div>
    </div> <!-- End of Last Name -->
    <div class="form-group row">
      <label for="lblcity" class="col-xs-4 col-form-label">City</label>
      <div class="col-xs-10">
        <input class="form-control" type="text" name="city" />
      </div>
    </div> <!-- End of City -->
    <div class="form-group row">
      <label for="lblstate" class="col-xs-4 col-form-label">State</label>
      <div class="col-xs-10">
        <input class="form-control" type="text" name="state" />
      </div>
    </div> <!-- End of State -->
    <div class="form-group row">
      <label for="lblage" class="col-xs-4 col-form-label">Age</label>
      <div class="col-xs-10">
        <input class="form-control" type="text" name="age" />
      </div>
    </div> <!-- End of Age -->
    <div class="form-group row">
      <label for="lblstate" class="col-xs-6 col-form-label">Phone number</label>
      <div class="col-xs-10">
        <input class="form-control" type="text" name="pNum" />
      </div>
    </div> <!-- End of phonenumber-->
    <button type="submit" class="btn btn-primary">Send Post Request</button>
 </form> <!-- Closed form -->
</div> <!-- Closed div container -->
</body>
</html>
