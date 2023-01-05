<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=josefin+Sans&display=Swap" rel="stylesheet">

</head>
<body>
<?php include('menu.php');  ?>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Contact</h2>
</div>
<div class="w-50 m-auto">
<form action="code.php" method="post">
    <div class="form-group">
        <label>Username</label>
        <input type="text" name="user" autocomplete="off" class="form-control" required>
</div>
<div class="form-group">
        <label>Email Id</label>
        <input type="email" name="email" autocomplete="off" class="form-control" required>
</div>
<div class="form-group">
        <label>Mobile</label>
        <input type="tel" pattern="[0-9]{10}" name="mobile" autocomplete="off" class="form-control" required>
</div>
<div class="form-group">
        <label>Comments</label>
        <textarea class="form-control" name="comments" required>
</textarea>
</div>
<button type="submit" name="Save_Send" class="btn btn-success">Send</button>


 
</form>
<?php
     $query = "SELECT * FROM video";
     $query_run = mysqli_query($con,$query);
     
     if(mysqli_num_rows($query_run) > 0)
     {
      foreach($query_run as $video)
      {
       
       ?>
       
       <tr>
        
        
        

        <td> <?='<video src="videos/'.$video['videos'].'" width="300px;" height="200px" alt="videos">'?> </td>
        
           </tr>
       
       <?php
      }

     }
     else
     {
       echo "<h5> No Record Found </h5>";

     }

  ?>

</div>

</section>

<footer>
    <p class="p-3 bg-dark text-white text-center">Powered by [ONEVEGA Systems Pvt. Ltd.]</p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>