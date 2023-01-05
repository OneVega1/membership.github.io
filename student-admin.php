

<?php
Session_start(); 
?>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
  

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="section">
<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
            <?php include('message.php');  ?>
                <div class="card-header">
                    
                    
                    <h5>Only For Admin</h5>
</div>
<div calss="card-body">

    <form action="deletecode.php" method="POST">
    
        
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
    <a href="index.php" class="btn btn-danger float-end">BACK</a>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>










<?php include('includes/footer.php'); ?>