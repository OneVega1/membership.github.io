
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
<?php include('message.php');  ?>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">PDF</h2>
</div>

    
    <hr/>
    <div class="row">
        <?php
        include("db.php");

        $query = "SELECT * FROM pdf_file";
        $query = mysqli_query($conn,$query);
        while($info=mysqli_fetch_array($query)) {
            
            ?>
             <embed type="application/pdf" src="pdf/<?php echo $info['pdf'] ; ?>" width="700" height="500">

        
        </div>
        <?php }
        ?>
        </div>
        </div>

        <footer>
    <p class="p-3 bg-dark text-white text-center">Powered by [ONEVEGA Systems Pvt. Ltd.]</p>
</footer>
        
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        </body>
        </html>
