<?php
session_start();
$connection = mysqli_connect("localhost","root","","testing");
if(isset($_POST['del_multiple_data']))
{
   $all_id = $_POST['del_chk'];
   $seperate_all_id = implode(",",$all_id);

    $query = "DELETE FROM students WHERE id In($seperate_all_id)";
    $query_run = mysqli_query($connection, $query);

    if($query_run)

    {
        $_SESSION['status'] = "Deleted id's are $seperate_all_id";
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: index1.php");
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted Successfully";
        header("Location: index1.php");

    }
    




}





?>