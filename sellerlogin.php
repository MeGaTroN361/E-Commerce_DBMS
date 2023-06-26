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
  <body>
    <style>
       /* body{
         background: aqua;
       } */
      .img{
        width:300px;
      margin:auto;
      }
      .box{
        /* box-shadow: 10px 10px 8px 10px #888888; */
        display: block;
    border-radius: 4px;
    border: 1px #ddd solid;
    background-color: #fff;
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
    </style>
    <?php
    include 'dbcon.php';
    if(isset($_POST['Login'])){
      $semail = $_POST['email'];
      $spassword = $_POST['password'];

      $email_search = "SELECT * FROM seller WHERE Email = '$semail'";
      $query = mysqli_query($con,$email_search);
      $email_count = mysqli_num_rows($query);
      if($email_count){
        $email_pass =mysqli_fetch_assoc($query);
        $db_pass = $email_pass['Spass'];
        $Seller_id = $email_pass['Seller_id'];
        $_SESSION['Seller_id'] = $Seller_id;
        if($db_pass === $spassword){
          ?>
          <script>
            window.location.href="adminhome.php";
          </script>
          <?php
        }else{
          ?>
          <script>
          alert("Invalid password");
          </script>
          <?php
        }
      }else{
        ?>
        <script>
          alert("Invalid email");
        </script>
        <?php
      }
    }
    ?>
    <a href="login.php">customer?</a>
    <div class="container" style="margin: auto;width: auto;">
    <div class="img" id="image" style="margin: auto;"> 
       <img src="pics/zippercart.png" alt="zipperlogo" height="150">
    </div>
    <div class="section">
    <div class="box" style="width:397px; height : 400px ;margin: auto">
      <div class="a-box-inner a-padding-extra-large">
        <form action="" method="POST" style="margin-left: 20px;margin-top: 20px;margin-bottom: 20px;">
        <h1>Admin Login</h1>
            <div class="mb-3 col-md-6">
                    <label for="emial" class="form-label" style="font-size: larger;margin-top: 30px;">Email id</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-md-6">
                  <label for="password" class="form-label"style="font-size: larger;">Password</label>
                  <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Forgot password</label>
            </div>
            <button type="submit" name="Login" class="btn btn-primary">Login</button>
        </form>
      </div>
    </div>  
    </div>
    <div class="divider"><hr class="one" style="position: relative;right: 124px;top: 17px;">New to Zippercart?<hr class="two"style="position: relative;left: 153px;top: -14px;">
    </div>
    <div class="button" style="height: 100px;text-align: center;margin-top: 33px;">
    <a href="signup.php">
    <button type="submit" class="btn btn-primary" style="
    margin-top: 20px;
    width: 398px;margin-bottom: 57px;">Create an Account</button>
    </a>
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