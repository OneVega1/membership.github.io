
 <?php 
     include("db.php");

     if (isset($_POST['upload'])) {
       // $name = $_FILES['file'];
        //echo "<pre>";
        //print_r($name);
        //exit();
        
        $file_name = $_FILES['file']['name'];
        $temp_name = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $file_destination = "upload/".$file_name;
        
        if (move_uploaded_file($temp_name,$file_destination)) {
            $query = "INSERT INTO video (name) VALUES ('$file_name')";
            if(mysqli_query($conn,$query)) {
                $success = "video Uploaded sucessfully.";
            }
            else {
                $failed = "something went wrong??";
            }
        }
        else {
            $msz = "Please select a video to upload...!";
        }
    }
    ?>
    
<!DOCTYPE html>
<html>
    <head>
        <title>Upload Video </title>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        
</head>
<body>

<div class="container mt-3">
<?php include('includes/header.php'); ?>
<?php include('message.php');?>
    <h1 class="text-center mb-5"><b>Upload video</b></h1>
    <div class="col-lg-8 m-auto">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label><strong>Upload a video:</strong></label>
                <input type="file" name="file" class="form-control">
</div>
<?php if(isset($success)) { ?>
 <div class="alert alert-success">
    


       <?php echo $success;?>
</div>
<?php } ?>
<?php if(isset($failed)) { ?>
<div class="alert alert-danger">
    
     <?php echo $failed;?>
</div>
<?php } ?>

<?php if(isset($msz)) { ?> 
<div class="alert alert-danger">
    
    <?php echo $msz;?> 
</div> 
<?php } ?>


<button type="sumbit" name="upload" value="Upload" class="btn btn-success">upload</button>
<a href="student-image.php" class="btn btn-danger float-end">BACK</a>
</form>
</div>
</div>
</body>
</html>


