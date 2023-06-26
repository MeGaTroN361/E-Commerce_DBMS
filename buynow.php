<?php
session_start();
include 'dbcon.php';
$cart_id= $_SESSION['cart_id'];
$Product_id = $_GET['id'];


$Product_search = "SELECT * FROM cart_item WHERE Product_id = '$Product_id'  AND Cart_id ='$cart_id'";
$psearch = mysqli_query($con,$Product_search);
$Product_count = mysqli_num_rows($psearch);
if($Product_count){
    $Product =mysqli_fetch_assoc($psearch);
    $Quantity = 0;
    $Quantity = intval($Product['Quantity'])+1;
    $update = "UPDATE cart_item SET Quantity = '$Quantity'  WHERE Product_id = '$Product_id' AND Cart_id ='$cart_id'";
    $query_fire = mysqli_query($con,$update);
    ?>
    <script>
    alert("Already Exists The quantity has been increased by 1");
    <?php
    sleep(1);
    ?>
    window.location.href="products.php";
</script>
<?php
}else{
$query = "INSERT INTO cart_item(Cart_id, Product_id,Quantity,Date, Purchase) VALUES ($cart_id,$Product_id,1,'2022-01-24','no')";
$added = mysqli_query($con,$query);
if ($added) {
?>
<script>
    alert("Added successfully");
    <?php
    sleep(1);
    ?>
    window.location.href="cart.php";
</script>
    <?php
 }
}
?>