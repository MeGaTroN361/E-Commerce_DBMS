<?php
session_start();
include 'dbcon.php';
$cart_id= $_SESSION['cart_id'];
$query1="DELETE FROM customer WHERE cart_id='$cart_id'";
$query_run=mysqli_query($con,$query1);
if($query_run){
?>
<script>
    alert("Account deleted");
</script>
<?php
}
session_destroy();
header('location:login.php');
?>
