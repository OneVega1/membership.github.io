<?php
session_start();
require 'dbcon.php';
?>

<?php include('includes/header.php'); ?>
<div class="container mt-5">
	
	<div class="row">
	<div class="col-md-12">
	<div class="card">
	<div class="card-header">
	<h4>Student View Details
	<a href="index.php" class="btn btn-danger float-end">BACK</a>
   
	</h4>
	
	
	</div>
	<div class="card-body">
     <?php
      if(isset($_GET['id']))
      {
           $student_id = mysqli_real_escape_string($con, $_GET['id']);
           $query = "SELECT * FROM students WHERE id='$student_id' ";
           $query_run = mysqli_query($con, $query);

           if(mysqli_num_rows($query_run) > 0)
           {
              $student = mysqli_fetch_array($query_run);
              ?>
                <div cass="row justify-content-center">
        <div class="col-md-6 mt-3 bg-info p-4 rounded">
    <h2 class="bg-light p-2 rounded text-center text-dark">ID :<?=$student['id']; ?></h2>
       <div class="text-center">
       <?='<img src="upload/'.$student['images'].'" width="300px;" height="200px" alt="images">'?>
       </div>
       <h4 class="text-light">Name : <?=$student['name']; ?></h4>
       <h4 class="text-light">Email : <?=$student['email']; ?></h4>
       
       <h4 class="text-light">Phone : <?=$student['phone']; ?></h4>
       <h4 class="text-light">Membership : <?=$student['membership']; ?></h4>
      
</div>
    </div>
                

	           
	


              <?php
           }
           else
           {
             echo "<h4>No Such Id Found</h4>";
           }

      }
     ?>

	
	</div>
	</div>
	</div>
	
	</div>
	
	</div>
    <?php include('includes/footer.php'); ?>
    