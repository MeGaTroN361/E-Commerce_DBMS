<?php
session_start();
include 'dbcon.php';
$cart_id = $_GET['id'];
$query = "DELETE FROM customer WHERE cart_id = '$cart_id'";
$query_fire = mysqli_query($con,$query);
if($query_fire){
    ?>
    <script>
        alert("account deleted successful");
        window.location.href="adminhome.php";
    </script>
    <?php
}else{
    ?>
    <script>
        alert("account couldn't be deleted");
    </script>
    <?php
}
?>