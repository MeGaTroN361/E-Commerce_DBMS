<?php
session_start();
include 'dbcon.php';
$Product_id = $_GET['id'];
$query = "DELETE FROM product WHERE Product_id = '$Product_id'";
$query_fire = mysqli_query($con,$query);
if($query_fire){
    ?>
    <script>
        alert("Product deleted successful");
        window.location.href="adminhome.php";
    </script>
    <?php
}else{
    ?>
    <script>
        alert("Product couldn't be deleted");
    </script>
    <?php
}
?>