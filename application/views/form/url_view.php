<?php
// print_r($_POST);
// echo "This is the first Name: ";
// echo "$url_First_Name <br />";

// echo "This is the Last Name: ";
// echo "$url_Last_Name <br />";

// echo "This is the City: ";
// echo "$city <br />";

// echo "This is the City: ";
// echo "$state <br />";

// echo "This is the Age: ";
// echo "$ageCookie <br />";

// Get Session value
$readSess = $this->session->all_userdata();

// echo "This is from the readSess variable: ";
// print_r($readSess);
// print_r($readSess['session_data']['pNum']);


?>
<div>
	<h1>This is the $_POST variable displayed</h1>
	<ul>
		<li><?php print_r($_POST); ?></li>
	</ul>
</div>
<div>
	<h1>This is the Session Information displayed</h1>
	<ul>
		<li>pNum is the name assigned to represent the phone number</li>
		<li><?php print_r($readSess); ?></li>
	</ul>
</div>
<div>
	<h1>To view the cookie on safair open developers tools</h1>
	<ul>
		<li>Go to storage and look at cookies</li>
		<li>The name of the cookie is age with users age represented as value</li>
	</ul>
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>City</th>
      <th>State</th>
      <th>Age</th>
      <th>Phone Number</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $url_First_Name; ?></td>
      <td><?php echo $url_Last_Name; ?></td>
      <td><?php echo $city; ?></td>
      <td><?php echo $state; ?></td>
      <td><?php echo $ageCookie; ?></td>
      <td><?php echo $readSess['session_data']['pNum']; ?></td>
    </tr>
  </tbody>
</table>