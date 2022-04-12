<?php
 include 'sql_connect.php';
  require_once "./header.php";
  $sql ="select * from transfers";
  $query =mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Transaction history</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
</html>
<div class="jumbotron" style="background-color:#E5E4E2;">
        <h2 class="text-center pt-4">Transaction History </h2>
        
       <br>
       <div class="table-responsive-sm " >
        <table class=" container text-center table table-hover  table-striped table-condensed table-bordered  bg-light text-dark ">
        <thead>
            <tr>
                <th class="text-center">Transaction ID </th>
                <th class="text-center">Sender name</th>
                <th class="text-center">Sender Ac_no</th>
                <th class="text-center">Receiver name</th>
                <th class="text-center">Receiver Ac_no</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>  
        </thead>
        <tbody>
        <?php

            
            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr >
                <td class="py-2"><?php echo $rows['t_no']; ?></td>
                <td class="py-2"><?php echo $rows['s_name']; ?></td>
                <td class="py-2"><?php echo $rows['s_acc_no']; ?></td>
                <td class="py-2"><?php echo $rows['r_name']; ?></td>
                <td class="py-2"><?php echo $rows['r_acc_no']; ?> </td>
                <td class="py-2"><?php echo $rows['amount']; ?> </td>
                <td class="py-2"><?php echo $rows['date_time']; ?> </td>
            </tr>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<div >
<?php
    include "./footer.php";
?>
</div> 