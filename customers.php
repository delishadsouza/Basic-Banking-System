<?php
  include 'sql_connect.php';
  require_once "./header.php";
  $sql = "SELECT * FROM customer";
  $result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Customers</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
   
<body >
  </body>
</html>
<div class="jumbotron text-center "  style="background-color:#E5E4E2;">
  
  <h1 class="text-center pt-2" >All customers</h1>
  <br>
  <div class="row" >
    <div class="col ">
      <div class="table-responsive ">
        <table class="container col-sm-8 text-center table-hover mx-auto table-condensed  table-bordered bg-light text-dark ">
          <thead>
            <tr >
              <th scope="col" class="text-center py-2">User-id</th>
              <th scope="col" class="text-center py-2">Name</th>
              <th scope="col" class="text-center py-2">Account-number</th>
              <th scope="col" class="text-center py-2">E-mail</th>
              <th scope="col" class="text-center py-2">Balance</th>
              <th scope="col" class="text-center py-2">Transfer operation</th>
            </tr>
          </thead>

          <tbody>
            <?php 
            while($rows=mysqli_fetch_assoc($result)){
            ?>
              <td scope="col" class="text-center py-2"><?php echo $rows['userid'] ?></td>
              <td scope="col" class="text-center py-2"><?php echo $rows['name']?></td>
              <td scope="col" class="text-center py-2"><?php echo $rows['acc_number']?></td>
              <td scope="col" class="text-center py-2"><?php echo $rows['email']?></td>
              <td scope="col" class="text-center py-2"><?php echo $rows['balance']?></td>
              <td id="button"><a href="transfer.php?id= <?php echo $rows['userid'] ;?>"> <button type="button" class="btn btn-outline-primary btn-sm">Transfer</button></a></td> 
            </tr>
            <?php
             }
            ?>
          
            </tbody>
              </table>
        </div>
      </div>
  </div>
</div>

</div>  
<div >
<?php
    include "./footer.php";
?>
</div> 

