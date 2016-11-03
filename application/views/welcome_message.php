  <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>

<div id="container"> 
  <form name="input" action="Form/verify" method="post">
    <div class="form-group row">
      <p>Please fill in all textboxs with data <br />
          1. If all textboxes are not filled in should show error <br />
          2. Once the data passes the validation form the data is <br />
          sent as a post request to page 2. <br />
      </p>
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
        <input class="form-control" type="text" name="phonumber" />
      </div>
    </div> <!-- End of phonenumber-->
    <button type="submit" class="btn btn-primary">Send Post Request</button>
 </form> <!-- Closed form -->
</div> <!-- Closed div container -->
</body>
</html>
