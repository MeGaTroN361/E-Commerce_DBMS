<?php
session_start();
include 'dbcon.php';
$cart_id= $_SESSION['cart_id'];
$p_name = $_GET['Name'];
$p_id = "SELECT Product_id FROM product WHERE Name = '$p_name'";
$fire = mysqli_query($con,$p_id);
$product_id = mysqli_fetch_assoc($fire);
$remove = "DELETE FROM cart_item WHERE Product_id = '$product_id[Product_id]'";
$firedelete = mysqli_query($con,$remove);
if($firedelete){
    ?>
    <script>
        alert("the products has been removed from the cart");
        window.location.href="cart.php";
    </script>
    <?php
}else{
    ?>
    <script>
        alert("the product cannot be removed");
    </script>
    <?php
}
?>