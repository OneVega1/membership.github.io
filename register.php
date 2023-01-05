<?php
session_start();
?>

<?php include('includes/header.php'); ?>
  
<div class="container mt-5">
	<?php include('message.php');?>
	<div class="row">
	<div class="col-md-12">
	<div class="card">
	<div class="card-header">
	<h4>Student Registration
	<a href="login.php" class="btn btn-danger float-end">LOGIN</a>
	</h4>
	
	
	</div>
	<div class="card-body">
	<form action="code.php" method="POST" enctype="multipart/form-data">
	
	<div class="mb-3">
	<label>Student Name</label>
	<input type="text"name="name" class="form-control" placeholder="Enter name" required>
	</div>
	<div class="mb-3">
	<label>Student Email</label>
	<input type="Email"name="email" class="form-control" placeholder="Enter email" required>
	</div>
	<div class="mb-3">
	<label>Student Password</label>
	<input type="Password"name="password" class="form-control" placeholder="Enter password" required>
	</div>
	<div class="mb-3">
	<label>confirm password</label>
	<input type="Password"name="confirmpassword" class="form-control" placeholder="Confirm password" required>
	</div>
	
	<div class="mb-3">
	<button type="submit" name="Save_register" class="btn btn-primary">Register</button>
	</div>
	
	</form>
	</div>
	</div>
	</div>
	
	</div>
	
	</div>
	<?php include('includes/footer.php'); ?>