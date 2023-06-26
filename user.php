<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <style>
      
  </style>
  <body style="display:flex;">
  <?php
	  include 'dbcon.php';
	  $cart_id= $_SESSION['cart_id'];
    $userquery="SELECT Name, Address, Email, Phone_no, Pincode, cart_id, C_pass, Confim_pass, Customer_id FROM customer WHERE cart_id='$cart_id'";
    $query_run=mysqli_query($con,$userquery);
    $user = mysqli_fetch_array($query_run);
	   
	  
  ?>
    <div class="container1" style="
    width: 25%;
    height: 709px;
    background-color: #a0b6c3;display: inline-flex;
    flex-direction: column;    font-size: 19px;s
">
<a href="changepassword.php"><button style="    margin: 10px;
    margin-top: 30px;    border: 2px;
    border-radius: 10px;width: 294px;">Change password</button></a>
<a href="purchasehistory.php"><button style="    margin: 10px;
    margin-top: 30px;    border: 2px;
    border-radius: 10px;width: 294px;">Purchase History</button></a>
<a href="delete.php"><button style="    margin: 10px;
    margin-top: 30px;    border: 2px;
    border-radius: 10px;width: 294px;">Delete Account</button></a>  
    <a href="products.php"><button style="    margin: 10px;
    margin-top: 30px;    border: 2px;
    border-radius: 10px;    width: 293px;">Home</button></a>
<a href="logout.php"><button style="    margin: 10px;
    margin-top: 30px;    border: 2px;
    border-radius: 10px;width:293px">Logout</button></a>
</div>
    <div class="container2" style="
    width: 70%;
    height: 273px;margin-top:24px;
">
<center>
 <img src="pics/user1.jpg" alt="" style="height:200px; width:200px;border-radius:50%;border: 1px solid black;"></center>
 <div class="name">
 <center style="font-size:33px;"> <?php echo $user['Name'];?></center></div>
 <div class="info">
  <p style="font-size: 22px;
    margin: 80px;
    margin-left: 263px;">

    E-mail: <?php echo $user['Email'];?> <br>
    <br>
    Phone:  <?php echo $user['Phone_no'];?> <br>
    <br>
    Address:<?php echo $user['Address'];?> <br>
    <br>
    Pincode:<?php echo $user['Pincode'];?> <br>
</p>

</div>
</div>

  </body>
</html>