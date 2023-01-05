<?php
session_start();
require 'dbcon.php';
?>

<?php include('includes/header.php'); ?>
<div class="container mt-5">
	<?php include('message.php');?>
	<div class="row">
	<div class="col-md-12">
	<div class="card">
	<div class="card-header">
	<h4>Student Edit
	<a href="index1.php" class="btn btn-danger float-end">BACK</a>
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
                <form action="code.php" method="POST" enctype="multipart/form-data">
	              <input type="hidden" name="student_id" value="<?= $student['id']; ?>">
	           <div class="mb-3">
	           <label>Member Name</label>
	           <input type="text" name="name" value="<?=$student['name'];?>" class="form-control">
	           </div>
	           <div class="mb-3">
               <label>Member Email</label>
	           <input type="email" name="email" value="<?=$student['email'];?>" class="form-control">
	           </div>
			   
	           <div class="mb-3">
	           <label>Member Phone</label>
	           <input type="tel" pattern="[0-9]{10}" name="phone" value="<?=$student['phone'];?>" class="form-control">
	           </div>
	           <div class="mb-3">
	           <label>Membership</label>
	           <select name="membership" value="<?=$student['membership'];?>" class="form-control" required>
		       <option value="">--Select Membership--</option>
		       <option value="Annual member"
			   <?php
			   if($student["membership"]=='Annual member')
			   {
				echo "selected";
			   }
			   ?>
			   >Annual member</option>
			   
                    

                  
		       <option value="Life member"
			   <?php
			   if($student["membership"]=='Life member')
			   {
				echo "selected";
			   }
			   ?>
			   >Life member</option>
		       <option value="Honorary members"
			   <?php
			   if($student["membership"]=='Honorary members')
			   {
				echo "selected";
			   }
			   ?>
			   >Honorary members</option>
               </select>
	           </div> 
			   <div class="mb-3">
			   <label>Upload Image</label>
			   <input type="file" name="image"  class="form-control">
			   <input type="hidden" name="old_images" value="<?=$student['images'];?>" >
			   <?='<img src="upload/'.$student['images'].'" width="100px;" height="60px" alt="images">'?>
		       </div>
			   
			   
	           <div class="mb-3">
	           <button type="submit" name="update_student" class="btn btn-primary">Update Student</button>
	           </div>
	
	          </form>

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