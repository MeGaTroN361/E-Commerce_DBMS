
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

    <title>Product</title>
  </head>
  <style>
    body{
background:#eee;
}

/*panel*/
.panel {
    border: none;
    box-shadow: none;
}

.panel-heading {
    border-color:#eff2f7 ;
    font-size: 16px;
    x-title {
    color: #2A3542;
    font-size: 14px;
    font-weight: 400;
    margin-bottom: 0;
    margin-top: 0;
    font-family: 'Open Sans', sans-serif;
}

/*product list*/

.prod-cat li a{
    border-bottom: 1px dashed #d9d9d9;
}

.prod-cat li a {
    color: #3b3b3b;
}

.prod-cat li ul {
    margin-left: 30px;
}

.prod-cat li ul li a{
    border-bottom:none;
}
.prod-cat li ul li a:hover,.prod-cat li ul li a:focus, .prod-cat li ul li.active a , .prod-cat li a:hover,.prod-cat li a:focus, .prod-cat li a.active{
    background: none;
    color: #ff7261;
}

.pro-lab{
    margin-right: 20px;
    font-weight: normal;
}

.pro-sort {
    padding-right: 20px;
    float: left;
}

.pro-page-list {
    margin: 5px 0 0 0;
}

.product-list img{
    width: 100%;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
}

.product-list .pro-img-box {
    position: relative;
}
.adtocart {
    background: #fc5959;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    color: #fff;
    display: inline-block;
    text-align: center;
    border: 3px solid #fff;
    left: 45%;
    bottom: -25px;
    position: absolute;
}

.adtocart i{
    color: #fff;
    font-size: 25px;
    line-height: 42px;
}

.pro-title {
    color: #5A5A5A;
    display: inline-block;
    margin-top: 20px;
    font-size: 16px;
}

.product-list .price {
    color:#fc5959 ;
    font-size: 15px;
}

.pro-img-details {
    margin-left: -15px;
}

.pro-img-details img {
    width: 100%;
}

.pro-d-title {
    font-size: 16px;
    margin-top: 0;
}

.product_meta {
    border-top: 1px solid #eee;
    border-bottom: 1px solid #eee;
    padding: 10px 0;
    margin: 15px 0;
}

.product_meta span {
    display: block;
    margin-bottom: 10px;
}
.product_meta a, .pro-price{
    color:#fc5959 ;
}

.pro-price, .amount-old {
    font-size: 18px;
    padding: 0 10px;
}

.amount-old {
    text-decoration: line-through;
}

.quantity {
    width: 120px;
}

.pro-img-list {
    margin: 10px 0 0 -15px;
    width: 100%;
    display: inline-block;
}

.pro-img-list a {
    float: left;
    margin-top:20px;
    margin-right: 10px;
    margin-bottom: 10px;
}

.pro-d-head {
    font-size: 18px;
    font-weight: 300;
}
  </style>
  <body>
  <?php require 'partials\_nav.php'?>
  <?php
  include 'dbcon.php';
	  $Product_id = $_GET['id'];
	  echo $Product_id;
	  $cart_id= $_SESSION['cart_id'];
	  $cart_q = "";
	  
	  $query = "SELECT Name, Image, price, Discount, Description,Category FROM product WHERE Product_id = '$Product_id' ";
	  $queryfire = mysqli_query($con,$query);
	  $product = mysqli_fetch_array($queryfire);
	  ?>
  <div class="container bootdey">
<div class="col-md-12">
<section class="panel">
      <div class="panel-body">
          <div class="col-md-6">
              <div class="pro-img-details">
                  <img src="<?php echo "products/".$product['Image'];?>" alt="" f>
              </div>
          </div>
          
          <div class="col-md-6" style="
    margin-top: 41px;
">
              <h4 class="pro-d-title">
                  <a href="#" class="">
                    <?php 
                    echo $product['Name'];
                    ?>
                  </a>
              </h4>
              <p>
              <?php
              echo $product['Description'];
              ?>
              </p>
              <div class="product_meta">
                  <span class="posted_in"> <strong>Categories:<?php echo $product['Category']?> </strong>
              </div>
              <div class="product_meta">
                  <span class="posted_in"> <strong>Description:
                      </strong>
                      <p><?php echo $product['Description']?></p>
              </div>
              <span class="pro-price">&#8377 <?php echo $product['price']?></span></div>
              <!-- <div class="form-group">
                  <label>Quantity</label>
                  <input type="quantiy" placeholder="1" class="form-control quantity" style="margin-top:10px;">
              </div> -->
              <p>
                 <a href="AddtoCart.php?id=<?php echo $Product_id;?>"><button class="btn btn-round btn-danger" type="button"style="margin-top:10px;"><i class="fa fa-shopping-cart" ></i> Add to Cart</button></a>
                 <a href="buynow.php?id=<?php echo $Product_id;?>"> <button class="btn btn-round btn-danger" type="button"style="margin-top:10px;margin-left: 32px;"><i class="fa fa-shopping-cart" ></i>Buy Now</button></a>
              </p>
              
          </div>
      </div>
  </section>
  </div>
  </div>
  </body>
</html>