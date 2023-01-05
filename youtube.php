
 <?php 
     include("db.php");

     if (isset($_POST['Save_Add'])) {
       // $name = $_FILES['file'];
        //echo "<pre>";
        //print_r($name);
        //exit();
        
        $url_name = $_FILES['url']['name'];
        $temp_name = $_FILES['url']['tmp_name'];
        $url_size = $_FILES['url']['size'];
        $url_destination = "upload/".$file_name;
        
        if (move_uploaded_file($temp_name,$url_destination)) {
            $query = "INSERT INTO youtube (url) VALUES ('$url_name')";
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
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label><strong>Upload a video:</strong></label>
                <input type="text" class="form-control" id="video_code" placeholder="Enter Youtube Video URL">
</div>


<button type="submit" name="Save_Add" class="btn btn-success">Add</button>
<a href="student-image.php" class="btn btn-danger float-end">BACK</a>
</form>
</div>
</div>
</body>
</html>


