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

    <title>Cart</title>
  </head>
  <style>
      @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

body {
    background-color: #eeeeee;
    font-family: 'Open Sans', serif;
    font-size: 14px
}

.container-fluid {
    margin-top: 70px
}

.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.40rem
}

.img-sm {
    width: 80px;
    height: 80px
}

.itemside .info {
    padding-left: 15px;
    padding-right: 7px
}

.table-shopping-cart .price-wrap {
    line-height: 1.2
}

.table-shopping-cart .price {
    font-weight: bold;
    margin-right: 5px;
    display: block
}

.text-muted {
    color: #969696 !important
}

a {
    text-decoration: none !important
}

.card {
    width:100vw;
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, .125);
    border-radius: 0px
}

.itemside {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 100%
}

.dlist-align {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex
}

[class*="dlist-"] {
    margin-bottom: 5px
}

.coupon {
    border-radius: 1px
}

.price {
    font-weight: 600;
    color: #212529
}

.btn.btn-out {
    outline: 1px solid #fff;
    outline-offset: -5px
}

.btn-main {
    border-radius: 2px;
    text-transform: capitalize;
    font-size: 15px;
    padding: 10px 19px;
    cursor: pointer;
    color: #fff;
    width: 100%
}

.btn-light {
    color: #ffffff;
    background-color: #F44336;
    border-color: #f8f9fa;
    font-size: 12px
}

.btn-light:hover {
    color: #ffffff;
    background-color: #F44336;
    border-color: #F44336
}

.btn-apply {
    font-size: 11px
}
  </style>
  <body>
	  <?php
	  include 'dbcon.php';
	//   $Product_id = $_GET['id'];
	  $cart_id= $_SESSION['cart_id'];
      $total = 0;
      $q = 0;
	  
	  $query = "SELECT Name, Image, price,Quantity, Description,Purchase FROM product,cart_item WHERE product.Product_id = cart_item.Product_id AND cart_item.cart_id = '$cart_id' AND cart_item.Purchase = 'yes' ";
	  $queryfire = mysqli_query($con,$query);
	//   $product = mysqli_fetch_array($queryfire);
    //   print_r($product);
	  $num = mysqli_num_rows($queryfire);
	  
	  ?>

    <div class="row">
        <aside class="col-lg-9">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-borderless table-shopping-cart">
                        <thead class="text-muted">
                            <tr class="small text-uppercase">
                                <th scope="col">Product</th>
                                <th scope="col" width="120">Quantity</th>
                                <th scope="col" width="120">Price</th>
                                <th scope="col" width="120">Purchased</th>
                                <th scope="col" class="text-right d-none d-md-block" width="200"></th>
                            </tr>
                        </thead>
						<?php
						if($num>0){
							while($product = mysqli_fetch_array($queryfire)){
								?>
                        <tbody>
                            <tr>
                                <td>
                                    <figure class="itemside align-items-center">
                                        <div class="aside"><img src="<?php echo "products/".$product['Image'];?>" class="img-sm"></div>
                                        <figcaption class="info"> <a href="#" class="title text-dark" data-abc="true"><?php echo $product['Name'];?></a>
                                        </figcaption>
                                    </figure>
                                </td>
                                <td>
									<h6>
                                    <?php echo $product['Quantity'];?>
									</h6>
								</td>
                                <td>
                                    <div class="price-wrap"> <var class="price">&#8377 <?php echo $product['price'];?></var></div>
                                </td>
                                <td class="text-right d-none d-md-block">Purchased</td>
                            </tr>
                        </tbody>
						<?php
                        $q = $product['Quantity'];
                        $total = $total + ($q*$product['price']);
						}
					}
						?>
                    </table>
                </div>
            </div>
        </aside>



        <!-- <aside class="col-lg-3">
            <div class="card mb-3">
            </div>
            <div class="card">
                <div class="card-body">
                    <dl class="dlist-align">
                        <dt>Total price:</dt>
                        <dd class="text-right ml-3">&#8377 <?php echo $total;?></dd>
                    </dl>

                    <dl class="dlist-align">
                        <dt>Total:</dt>
                        <dd class="text-right text-dark b ml-3"><strong>&#8377 <?php echo $total;?></strong></dd>
                    </dl>
                    <hr> <a href="products.php" class="btn btn-out btn-primary btn-square btn-main" data-abc="true"> Make Purchase </a> <a href="products.php" class="btn btn-out btn-success btn-square btn-main mt-2" data-abc="true">Continue Shopping</a>
                </div>
            </div>
        </aside> -->
    </div>
</div>
</body>
</html>
