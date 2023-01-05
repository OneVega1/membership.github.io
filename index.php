<?php
session_start();
require 'dbcon.php';
?>

<?php include('includes/header.php'); ?>
  <div class="container mt-5">

  <?php include('message.php');  ?>
 
	
	<div class="row">
	<div class="col-md-12">
	<div class="card">
	<div class="card-header">
    <h4>Members Details
      <a href="login.php" class="btn btn-primary float-end">Logout</a>
      
      <hr>

      <a href="student-admin.php" class="btn btn-danger float-end">Admin</a>
     
      <a href="student-create.php" class="btn btn-primary">Supervisor 1</a>
      
</h4>
</div>
<div class="card-body">
  
<form action="code1.php" method="POST">
<table class="table table-bordered table-striped">
  
  <thead>
    <tr>
      
      <th>Member ID</th>
      <th> Member Image</th>
      <th>Member Name</th>
      <th>Member Email</th>
      
      <th> Member Phone</th>
      <th> Membership</th>
      <th>Action</th>
</tr>
</thead>
<tbody>
  <?php
     $query = "SELECT * FROM students";
     $query_run = mysqli_query($con,$query);
     
     if(mysqli_num_rows($query_run) > 0)
     {
      foreach($query_run as $student)
      {
       
       ?>
       
       <tr>
        
        <td><?=$student['id']; ?></td>
        <td> <?='<img src="upload/'.$student['images'].'" width="100px;" height="60px" alt="images">'?> </td>
        <td><?=$student['name']; ?></td>
        <td><?=$student['email']; ?></td>
        
        <td><?=$student['phone']; ?></td>
        <td><?=$student['membership']; ?></td>
        <td>
          <a href="student-view.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm">View</a>
          
          
          
        </td>



      



       </tr>
      
       <?php
      }

     }
     else
     {
       echo "<h5> No Record Found </h5>";

     }

  ?>

</tbody>

</table>
    </form>


</div>
</div>
</div>
</div>
</div>
    
<?php include('includes/footer.php'); ?>
  