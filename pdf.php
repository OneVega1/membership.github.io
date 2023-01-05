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
	<form action="pdf.php" method="POST" enctype="multipart/form-data">
	
	
	
	<div class="mb-3">
	<label> Upload PDF</label>
	<input type="file" name="pdf" id="pdf" class="form-control" required>
    </div>
	<div class="mb-3">
	<button type="upload" name="Save_Upload" class="btn btn-primary">Upload</button>
	</div>
	<?php
        include("db.php");

        if(isset($_POST['Save_Upload'])) {
            $pdf=$_FILES['pdf']['name'];
            $pdf_type=$_FILES['pdf']['type'];
            $pdf_size=$_FILES['pdf']['size'];
            $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
            $pdf_store="pdf/".$pdf;

            move_uploaded_file($pdf_tem_loc,$pdf_store);

            $query="INSERT INTO pdf_file(pdf) VALUES('$pdf')";
            $query=mysqli_query($conn,$query);

            
	if($query_run)
	{
		
		$_SESSION['message'] = "PDF upload Successfully";
		header("Location: pdf.php");
		exit(0);
		
	}
	else
	{
		
		$_SESSION['message'] = "PDF upload successfully ";
		header("Location: pdf.php");
		exit(0);
		
	}
        }
    ?>
	</form>
	</div>
	</div>
	</div>
	
	</div>
	
	</div>
	
	
	<?php include('includes/footer.php'); ?>




