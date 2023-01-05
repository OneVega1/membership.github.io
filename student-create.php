<?php
session_start();
?>

<?php include('includes/header.php'); ?>
  
<div class="container mt-5">
	<?php include('message.php');?>
	<?php include('email.php');?>
	<div class="row">
	<div class="col-md-12">
	<div class="card">
	<div class="card-header">
	<h4>Student Add
	<a href="index.php" class="btn btn-danger float-end">BACK</a>
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
	<input type="email"name="email"  class="form-control"  tabindex="2" placeholder="Enter email">
	
	</div>
	
	<div class="mb-3">
	<label>Student Phone</label>
	<input  type="tel" pattern="[0-9]{10}" name="phone" class="form-control" placeholder="Enter phone" required>
	</div>
	<div class="mb-3">
	<label>Membership</label>
	<select name="membership" class="form-control" required>
		<option value="">--Select Membership--</option>
		<option value="Annual member">Annual member</option>
		<option value="Life member">Life member</option>
		<option value="Honorary members">Honorary members</option>
    </select>
	</div>
	<div class="mb-3">
	<label> Upload Image </label>
	<input type="file" name="image" id="images" class="form-control" required>
    </div>
	<div class="mb-3">
	<button type="submit" name="Save_Student" class="btn btn-primary">Save Student</button>
	</div>
	
	</form>
	</div>
	</div>
	</div>
	
	</div>
	
	</div>
	
	
	<?php include('includes/footer.php'); ?>




