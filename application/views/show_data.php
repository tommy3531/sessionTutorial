<?php
	print_r($_POST);
	$postData = $this->session->flashdata('sessiondata');

	echo $postData['first_name'];

	//print_r($data);
	if($postData['first_name']){ ?>
		<div class="alert alert-success">

            <strong>Success!</strong> <?php echo $this->session->flashdata('first_name'); ?>
		</div>
	<?php }if($postData['error']){  ?>
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Error!</strong> <?php echo $postData['error']; ?>
        </div>
    <?php }else if($this->session->flashdata('warning')){  ?>
        <div class="alert alert-warning">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Warning!</strong> <?php echo $this->session->flashdata('warning'); ?>
        </div>
    <?php }else if($this->session->flashdata('info')){  ?>
        <div class="alert alert-info">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Info!</strong> <?php echo $this->session->flashdata('info'); ?>
        </div>
    <?php } 
	// echo $this->session->flashdata('setsession');

	// $firstname = $this->input->post('firstname');
	// echo "your first name is: ", $firstname;
	//echo "Session Set: " , $setsession; 

	?>