

<?php
Session_start();
?> 
<?php include('menu.php');  ?>

<?php include('includes/header.php'); ?>

 
 
<div class="section">
<div class="container mt-5">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">


    <div class="row justify-content-center">
 
        <div class="col-md-5">
            <div class="card">
            <?php include('message.php');  ?>
          
           
                <div class="card-header">
                    
                    
                    <h5 class="text-center">Login Form</h5>
</div>
<div calss="card-body">

    <form action="logincode.php" method="POST">
    
        
        <div class="mb-3">
            <label for="">Email Id</label>
            <input type="text" name="email" class="form-control" placeholder="Email ID">
</div>

<div class="mb-3">
    <label for="">Password</label>
    <input type="password" name="password" class="form-control" placeholder="password">
</div>
<hr>
<div class="mb-3">
    
    <button type="submit" name="login_btn" class="btn btn-primary btn-block">Login</button>
    <h6>An account is already registered... Please login</h6>
    <hr>
   <h6>Please,click here to start your registration.. </h6>
    <a href="register.php" class="btn btn-primary"> New Register</a>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>









<?php include('includes/footer.php'); ?>
