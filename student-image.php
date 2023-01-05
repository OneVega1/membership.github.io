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
		
		
	<h4>
	<a href="upload.php" class="btn btn-primary">Add Videos</a>
	<a href="index1.php" class="btn btn-danger float-end">BACK</a>
	</h4>
	
	
	</div>
	<div class="card-body">
		
	<form action="code.php" method="POST" enctype="multipart/form-data">
	
	
	<div class="mb-3">
	<label> Upload Image </label>
	<input type="file" name="image" id="images" class="form-control" >
    </div>

	
	<div class="mb-3">
	<button type="submit" name="Save_uploded" class="btn btn-success">Uploded</button>
	</div>
	
	</form>
	</div>
	</div>
	</div>
	
	</div>
	
	</div>
	
	
	<?php include('includes/footer.php'); ?>




