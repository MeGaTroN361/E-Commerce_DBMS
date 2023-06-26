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

    <title>Registration</title>
  </head>
  <body>
    <style>
      .img{
        width:196px;
      margin:auto;
      }
      .box {
    display: block;
    border-radius: 8px;
    border: 1px #ddd solid;
    background-color: #fff; 
    /* box-shadow: 10px 10px 8px 10px #888888; */
     }
      .section{

      }
.form-control {
    display: block;
    width: 348px;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.divider {
    text-align: inherit;
    position: relative;
    left: 106px;
    top: 6px;;
    width:366px;
    padding-top: 1px;
    margin-bottom: 14px;
    line-height: 0;
    font-size: large;
    margin:auto;
}
hr {
    margin: 1rem 0;
    color: inherit;
    background-color: currentColor;
    border: 0;
    width: 124px;
    opacity: .25;
    }
    *, ::after, ::before {
    box-sizing: border-box;
    margin-left: 4px;
    margin-bottom: -2px;
}
h1{
    font-weight: 500;
    line-height: 1.2;
}
    </style>
    <?php
    
    include 'dbcon.php';
    if(isset($_POST['sregister'])){
      $semail = $_SESSION['email'];
      // echo "$email";  
      $spassword = $_SESSION['password'];
      // echo "$password";
      $scpassword = $_SESSION['cpassword'];
      // echo "$cpassword";
    $sfullname = mysqli_real_escape_string($con,$_POST['sfullname']);
    $sPhoneno = mysqli_real_escape_string($con,$_POST['sPhoneNum']);
    $sAddress = mysqli_real_escape_string($con,$_POST['sAddress']);
    $sPincode = mysqli_real_escape_string($con,$_POST['spincode']);
    // $pass = password_hash($password,PASSWORD_BCRYPT);
    // $cpass = password_hash($cpassword,PASSWORD_BCRYPT);

    

    $sinserquery = "INSERT INTO seller(Seller_id, Address, Name, Spass, confirm_spass, Phone_no, Email, pincode) VALUES (NULL,'$sAddress','$sfullname','$spassword','$scpassword','$sPhoneno','$semail',$sPincode)";
    $siquery = mysqli_query($con,$sinserquery);
    if ($siquery) {
      ?>
      <script>
        window.location.href="sellerproducts.php";
      </script>
    <?php
    }
    
  }

    ?>
    <div class="container" style="margin: auto;width: auto;margin-bottom:-2px">
    <div class="img" id="image" style="margin: auto;"> 
       <img src="pics/zippercart.png" alt="zipperlogo" height="100">
    </div>
    <div class="section">
    <div class="box" style="width:397px; height : 80vh ;margin: auto">
      <div class="a-box-inner a-padding-extra-large">
      <div class="container">
        <h1 class="text-center">Admin Register</h1>
        <form action="" method="POST" >
        <section style="display: inline-flex;">
        <div class="mb-3 col-md-6">
                    <label for="Fullname" class="form-label" style="font-size: large;margin-top: 5px;">Full Name</label>
                    <input type="fullname" class="form-control" id="sfullname" name="sfullname" aria-describedby="emailHelp" required>
            </div>
            <!-- <div class="mb-3 col-md-6">
                    <label for="lastname" class="form-label" style="font-size: large;margin-top: 5px;">Last Name</label>
                    <input type="lastname" class="form-control" id="lastname" name="lastname" aria-describedby="emailHelp" style="width:170px">
            </div> -->
            </section>
            <!-- <div class="mb-3 col-md-6">       
                    <label for="emial" class="form-label" style="font-size: large;margin-top: 5px;">Email id</label>
                    <input type="email" class="form-control" id="emial" name="emial" aria-describedby="emailHelp">
            </div> -->
            <div class="mb-3 col-md-6">
                    <label for="PhoneNum" class="form-label" style="font-size: large;margin-top: 5px;">Phone Number</label>
                    <input type="PhoneNum" class="form-control" id="sPhoneNum" name="sPhoneNum" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3 col-md-6">
                <label for="Address" class="form-label">Address</label>
                <input type="Address" class="form-control" id="sAddress" name="sAddress" required>
            </div>
            <section style="display:flex">
            <!-- <div class="mb-3 col-md-6">
                <label for="landmark" class="form-label">Landmark</label>
                <input type="landmark" class="form-control" id="landmark" name="landmark" style="width: 170px;">
            </div> -->
            <div class="mb-3 col-md-6">
                <label for="pincode" class="form-label">Pincode</label>
                <input type="pincode" class="form-control" id="spincode" name="spincode" style="width: 170px;" required>
            </div>
            </section>
            <!-- <div class="mb-3 col-md-6">       
                    <label for="map" class="form-label" style="font-size: large;margin-top: 5px;">Map</label>
                   Google map-->
                <!-- <div id="map-container-google-3" class="z-depth-1-half map-container-3">
                    <iframe src="https://maps.google.com/maps?q=warsaw&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                        style="border:0" allowfullscreen></iframe>
                </div>
            </div> -->
            <div class="register11">
                <button type="register1" class="btn btn-primary" name="sregister" style="width:300px">Register</button>
            </div>
        </form>
    </div>
      </div>
    </div>  
    </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>s