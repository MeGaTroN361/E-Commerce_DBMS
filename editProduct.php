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

    <title>Signup</title>
  </head>
  <body>
    <style>
      .img{
        width:196px;
      margin:auto;
      }
      .box{
        display: block;
    border-radius: 4px;
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
      if(isset($_POST['Edit'])){
        // $email = mysqli_real_escape_string($con,$_POST['email']);
        // $_SESSION['email'] = $email;
        $name = mysqli_real_escape_string($con,$_POST['product_name']);
        $price = mysqli_real_escape_string($con,$_POST['price']);
        $category = mysqli_real_escape_string($con,$_POST['category']);
        // $_SESSION['password'] = $password;
        $discount = mysqli_real_escape_string($con,$_POST['discount']);
        // $_SESSION['cpassword'] = $cpassword;
        $Product_id = $_GET['id'];
        $epquery = "UPDATE product SET Name='$name',price='$price',Discount='$discount',Category='$category' WHERE Product_id = '$Product_id'";
        $query = mysqli_query($con,$epquery);
        if ($query) {
                ?>
                <script>
                alert("edit success");
                window.location.href="adminhome.php";
                </script>
                <?php
            }else{
                ?>
                <script>
                alert("edit not success");
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
    <div class="box" style="width:397px; height : 500px ;margin: auto">
      <div class="a-box-inner a-padding-extra-large">
      <div class="container">
        <h1 class="text-center">Edit Product</h1>
        <form action="" method="POST" >
            <!-- <div class="mb-3 col-md-6">
                    <label for="emial" class="form-label" style="font-size: larger;margin-top: 30px;">Email id</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
            </div> -->
            <div class="mb-3 col-md-6">
                <label for="product_name" class="form-label">Product name</label>
                <input type="product_name" class="form-control" id="product_name" name="product_name" required>
            </div>
            <div class="mb-3 col-md-6">
                <label for="price" class="form-label">price</label>
                <input type="price" class="form-control" id="price" name="price" required>
            </div>
            <div class="mb-3 col-md-6">
                <label for="category" class="form-label">category</label>
                <input type="category" class="form-control" id="category" name="category" required>
            </div>
            <div class="mb-3 col-md-6">
                <label for="discount" class="form-label">discount</label>
                <input type=discount" class="form-control" id="discount" name="discount" required>
                <div id="emailHelp" class="form-text" style="width: 292px;">Make sure to type the same password.</div>
            </div>
            <!-- <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">By continuing, you agree to Zippercart's Conditions of Use and Privacy Notice.</label>
            </div> -->
            <div class="register">
                  <button type="Edit" name="Edit" class="btn btn-primary">Edit</button>
            </div>
        </form>
    </div>
    <!-- <p>already have an account?<a href="login.php">login</a>
   </p> -->
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
</html>