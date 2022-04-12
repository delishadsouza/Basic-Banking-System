<?php
  session_start();
  $count = 0;
  include 'sql_connect.php';
  include "./header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body style="background-image: url('./images/bg.webp');background-size: cover ; height:fit-content;">

    <div class=" container "style="width:200px;height:200px;position:fixed;top:50%;left:63%;margin-top: -185px;
            margin-left: -100px;">
    <div class="  text-center text-light  py-3" style="background-color:#483D8B;border-radius:20px; opacity: 0.95; width:500px ;padding:20px;color:white;float:right;">
        <div class="  text-center text-light  py-3"style="padding:50px;opacity: 5.0;">    <h1>WELCOME TO  OUR BANK</h1>
            <hr>
                <a class="nav-link btn-primary btn btn-outline-danger text-light " href="customers.php">View Customers</a>
                <br>
                <a class="nav-link btn-primary btn btn-outline-danger text-light" href="history.php">View Transaction History</a>
        </div>    
    </div>
</div> 
<div class="fixed-bottom">
<?php
    include "./footer.php";
?>
</div> 
</body>
</html>


