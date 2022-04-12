<?php
  include 'sql_connect.php';
  if(isset($_POST['submit']))
  {
      $from = $_GET['id'];
      $to = $_POST['to'];
      $amount = $_POST['amount'];
  
      $sql = "SELECT * from customer where userid=$from";
      $query = mysqli_query($conn,$sql);
      $sql1 = mysqli_fetch_array($query); 
  
      $sql = "SELECT * from customer where userid=$to";
      $query = mysqli_query($conn,$sql);
      $sql2 = mysqli_fetch_array($query);
  
      // constraint to check input of negative value by user
      if (($amount)<0)
     {
          echo '<script type="text/javascript">';
          echo ' alert("Negative Value cannot be transfered!!! ")';  // showing an alert box.
          echo '</script>';
      }
      // constraint to check zero values
      else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }
    else if($amount == 0){

        echo "<script type='text/javascript'>";
        echo "alert('Oops! Zero value cannot be transferred!!!')";
        echo "</script>";
    }

    else {
          
            // deducting amount from sender's account
            $newbalance = $sql1['balance'] - $amount;
            $sql = "UPDATE customer set balance=$newbalance where userid=$from";
           mysqli_query($conn,$sql);

            // adding amount to reciever's account
            $newbalance = $sql2['balance'] + $amount;
            $sql = "UPDATE customer set balance=$newbalance where userid=$to";
            mysqli_query($conn,$sql);
            
   
        
            $sender = $sql1['name'];
            $sacnum=$sql1['acc_number'];

            $receiver=$sql2['name'];
            $racnum=$sql2['acc_number'];

            $sql="INSERT INTO transfers(s_name,s_acc_no, r_name,r_acc_no, amount) VALUES ('$sender','$sacnum','$receiver','$racnum','$amount')";
            $query=mysqli_query($conn,$sql);        
  
            if($query){
            echo "<script> alert('Transaction Successful');
                    window.location='history.php';
                </script>";
                }
                else{
                    echo "<script> alert('Transaction not Successful');
                    window.location='history.php';
                </script>";
                }
            $newbalance= 0;
            $amount =0;
          }
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Transfer Money</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 

      </head>    
<body>
<div class="jumbotron text-center "  style="background-color:#E5E4E2;">
        <h1>Transfer Amount </h1>
            <?php
                include 'sql_connect.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  customer where userid=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
      <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table class=" container col-sm-7 text-center table table-striped table-condensed table-bordered text-light bg-secondary">
                <tr>
                    <th class="text-center">Sender Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center ">Account-number</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Balance</th>
                </tr>
                <tr>
                <td class="py-2"><?php echo $rows['userid'] ?></td>
                <td class="py-2"><?php echo $rows['name']?></td>
                <td class="py-2"><?php echo $rows['acc_number']?></td>
                <td class="py-2"><?php echo $rows['email']?></td>
                <td class="py-2"><?php echo $rows['balance']?></td>
                </tr>
            </table>
        </div >
        <br>
        <label>Transfer Money To:</label>
        <select name="to" class="form-control container col-sm-3" required>
            <option value="" disabled selected>Choose receiver</option>
            <?php
                include 'sql_connect.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM customer where userid!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['userid'];?>" >
                
                    <?php echo $rows['name'] ;?> (Balance: 
                    <?php echo $rows['balance'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
            <div>
        </select>
        <br>
        <br>
            <label>Enter Amount:</label>
            <input type="number" class="form-control container col-sm-3" name="amount" required>   
            <br><br>
                <div class="text-center" >
            <button class="btn btn-primary" name="submit" type="submit" id="btn">Transfer</button>
            </div>
        </form>
    </div>
<div class="fixed-bottom">
<?php
    include "./footer.php";
?>
</div> 
  </body>
</html>