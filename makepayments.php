<?php

session_start();
?>

<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  

    <title>Welcome </title>
    <link rel="stylesheet" href="style.css" class="stylesheet">
  </head>
  <body>
    <style>
      *{
        margin: 0;
        padding: 0;
      }
      .body{
        overflow:hidden;
      }
      /* .card{
        margin:80px 20px;
      } */
      .form-check-inline{
          margin: 80px 20px;
      }
      h2{
          margin: 80px 20px;
      }
    </style>
    <div class="row" style="margin-left: 18px;
    margin-right: 18px">

      <?php 
    require 'partials\_nav.php';
    include 'dbcon.php';
    $total = $_GET['id'];
    $date = date("Y-m-d");
    ?>
    <div>
            <h2>
                Payment type:
            </h2>
    </div>
    <div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio" value="COD">COD(Cash on delivery)
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio" value="UPI">UPI
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio" value="card">card
  </label>
</div>
<div>
            <h2>
                Total amount: &#8377 <?php echo $total;?>
            </h2>
    </div>
    </body>
</html>