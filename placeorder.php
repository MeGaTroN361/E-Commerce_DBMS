<?php
session_start();
include 'dbcon.php';
$cart_id = $_SESSION['cart_id'];
$query = "UPDATE cart_item SET Purchase='Yes' WHERE cart_id = '$cart_id'";
$query_fire = mysqli_query($con,$query);
if($query_fire){
    ?>
    <script>
        alert("Order placed");
        window.location.href="products.php";
    </script>
    <?php
}else{
    ?>
    <script>
        alert("order not placed");
    </script>
    <?php
}
?>