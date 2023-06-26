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
      .card{
        margin:80px 20px;
      }
    </style>
    <div class="row" style="margin-left: 18px;
    margin-right: 18px">

      <?php 
    require 'partials\_nav.php';
    include 'dbcon.php';
    $cart_id = $_SESSION['cart_id'];
    $query = "SELECT Product_id,Name, Image, price, Discount, Description, Category FROM product order by Product_id ASC ";
    $queryfire = mysqli_query($con,$query);
    $num = mysqli_num_rows($queryfire);
    if($num>0){
      while($product = mysqli_fetch_array($queryfire)){
        // print_r($product);
        ?>
      <div class="col-lg-3 col-md-4 col-sm-12">
        <form action="" method="POST">
           <div class="card">
             <h6 class="card-title bg-info text-white p-2">
               <?php
               echo $product['Name'];
               ?>
             </h6>
             <div class="card-body">
               <img src="<?php echo "products/".$product['Image'];?>"  alt="" class="img-fluid" style="height:212px">
               <h6>
                 &#8377 <?php echo $product['price'];?>
                 <span>(<?php echo $product['Discount'];?>% off)</span>

               </h6>
               
             </div>
             <div class=" btn-group d-flex">
             <a class='flex-fill btn btn-success' href="AddtoCart.php?id=<?php echo $product['Product_id'];?>"button class="btn btn-sucess"type="submit" name='Add' style="text-decoration: none;">Add to cart</button></a>
             <a class='flex-fill btn btn-warning' href="display.php?id=<?php echo $product['Product_id'];?>"button class="btn btn-warning" type="submit" style="text-decoration: none;">View product</button></a>
             </div>

           </div>

        </form>

      </div>
      

    <?php

      }
    }
    
    ?>
    

</div>
<!-- //     <section style="display: inline-flex;margin: 33px;width:100%;">
//     <div class="card" style="width: 31%;margin-right: 50px">
//           <img src="pics\jacket.jpg" class="card-img-top" alt="...">
//           <div class="card-body">
//           <h5 class="card-title">Card title</h5>
//         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
//         </div>
//           <ul class="list-group list-group-flush">
//             <li class="list-group-item">An item</li>
//             <li class="list-group-item">A second item</li>
//             <li class="list-group-item">A third item</li>
//           </ul>
//         <div class="card-body">
//             <a href="#" class="card-link">Card link</a>
//             <a href="#" class="card-link">Another link</a>
//         </div>
//         </div>
       
//     </section>
//     <!-- Optional JavaScript; choose one of the two! -->

<!-- //     <!-- Option 1: Bootstrap Bundle with Popper -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

   <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script> -->
<!-- //     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
//     -->
<!-- //   </body> -->
<!-- // </html> --> 
