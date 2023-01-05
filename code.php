<?php
session_start();
require 'dbcon.php';




if(isset($_POST['update_student']))
{
	$student_id = $_POST['student_id'];
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	
	$phone = $_POST['phone'];
	$membership = $_POST['membership'];
	
	$images = $_FILES["images"]['name'];
	$old_images = $_POST["old_images"];
     
	if($images != '')
	{
       $update_filename = $_FILES['images']['name'];
	}
	else
	{
       $update_filename = $old_images;
	}
    if($_FILES['images']['name'] !='')
	{
		if(file_exists("upload/". $_FILES["images"]["name"]))
		{
		$filename = $_FILES["images"]["name"];
		$_SESSION['status']= "Image already Exists. '.$filename.'";
		header("Location: index1.php");
		}
	}
	else
	{
		$query = "UPDATE students SET name='$name', email='$email', phone='$phone', membership='$membership', images='$update_filename' WHERE id='$student_id' ";
		$query_run = mysqli_query($con, $query);
		
			if($query_run)
			{
				if($_FILES['images']['name'] !='')
				{
					move_uploaded_file($_FILES["image"]["tmp_name"], "upload/".$_FILES["image"]["name"]);
				    unlink("upload/".$old_image);
					
				}
				$_SESSION['message'] = "Student updated  Successfully";
				header("Location: index1.php");
			}
			else
			{
				$_SESSION['message'] = "Student not updated Successfully";
				header("Location: index1.php");
			}

		}
}






if(isset($_POST['Save_Student']))
{
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	
	$phone = mysqli_real_escape_string($con, $_POST['phone']);
	$membership = mysqli_real_escape_string($con, $_POST['membership']);
	$images = mysqli_real_escape_string($con, $_FILES["image"]['name']);
	
	if(file_exists("upload/". $_FILES["image"]["name"]))

	{
		$store = $_FILES["image"]["name"];
		$_SESSION['status']= "Image already exists. '.$store.'";
		header("Location: student-create.php");
	
	}
	else
	{
		$query = "INSERT INTO students (name,email,phone,membership,images) VALUES ('$name','$email','$phone','$membership','$images')";
	
	    $query_run = mysqli_query($con, $query);
	
		
	
	if($query_run)
	{
		move_uploaded_file($_FILES["image"]["tmp_name"], "upload/".$_FILES["image"]["name"]);
		$_SESSION['message'] = "Student Created Successfully";
		header("Location: student-create.php");
		exit(0);
		
	}
	else
	{
		
		$_SESSION['message'] = "Student Not Created ";
		header("Location: student-create.php");
		exit(0);
		
	}

	}
	
}

if(isset($_POST['Save_register']))
{
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$confirmpassword = mysqli_real_escape_string($con, $_POST['confirmpassword']);

	if($password == $confirmpassword)
	{
		$query = "INSERT INTO register (name,email,password,confirmpassword) VALUES ('$name','$email','$password','$confirmpassword')";
	
	    $query_run = mysqli_query($con, $query);
	
	
	if($query_run)
	{
		
		$_SESSION['message'] = "Student Register Successfully";
		header("Location: register.php");
		exit(0);
		
	}
	else
	{
		
		$_SESSION['message'] = "Student Not Created ";
		header("Location: register.php");
		exit(0);
		
	}
	}
	else
	{
		$_SESSION['message'] = "password and confirm password does not match";
		header("Location: register.php");
		exit(0);
	}
	
	

	

}

if(isset($_POST['Save_Submit']))
{
	$user = mysqli_real_escape_string($con, $_POST['user']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	
	$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
	$comments = mysqli_real_escape_string($con, $_POST['comments']);
	
	
		$query = "INSERT INTO userinfodata (user,email,mobile,comment) VALUES ('$user','$email','$mobile','$comments')";
	
	    $query_run = mysqli_query($con, $query);
	
	
	if($query_run)
	{
		
		$_SESSION['message'] = "Student Created Successfully";
		header("Location: home.php");
		exit(0);
		
	}
	else
	{
		
		$_SESSION['message'] = "Student Not Created ";
		header("Location: home.php");
		exit(0);
		
	}

	}

	
if(isset($_POST['Save_Send']))
{
	$user = mysqli_real_escape_string($con, $_POST['user']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	
	$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
	$comments = mysqli_real_escape_string($con, $_POST['comments']);
	
	
		$query = "INSERT INTO userinfodata (user,email,mobile,comment) VALUES ('$user','$email','$mobile','$comments')";
	
	    $query_run = mysqli_query($con, $query);
	
	
	if($query_run)
	{
		
		$_SESSION['message'] = "Student Created Successfully";
		header("Location: contact.php");
		exit(0);
		
	}
	else
	{
		
		$_SESSION['message'] = "Student Not Created ";
		header("Location: contact.php");
		exit(0);
		
	}

	}

	if(isset($_POST['Save_uploded']))
    {
	
	$images = mysqli_real_escape_string($con, $_FILES["image"]['name']);
	
	
	if(file_exists("uploads/". $_FILES["image"]["name"]))

	{
		$store = $_FILES["image"]["name"];
		$_SESSION['status']= "Image already exists. '.$store.'";
		header("Location: student-image.php");
	
	}
	
	else
	{
		$query = "INSERT INTO photo (images) VALUES ('$images')";
	
	    $query_run = mysqli_query($con, $query);
	
		
	
	if($query_run)
	{
		move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/".$_FILES["image"]["name"]);
		$_SESSION['message'] = "Student upload Successfully";
		header("Location: student-image.php");
		exit(0);

		
		
	}
	else
	{
		
		$_SESSION['message'] = "Student Not upload Created ";
		header("Location: student-image.php");
		exit(0);
		
	}

	}
	
}


