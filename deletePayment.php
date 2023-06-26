<?php
session_start();
include 'dbcon.php';
$Payment_id = $_GET['id'];
$query = "DELETE FROM payments WHERE Payment_id = '$Payment_id'";
$query_fire = mysqli_query($con,$query);
if($query_fire){
    ?>
    <script>
        alert("Payment details deleted successfully");
        window.location.href="adminhome.php";
    </script>
    <?php
}else{
    ?>
    <script>
        alert("Payment details couldn't be deleted");
    </script>
    <?php
}
?>