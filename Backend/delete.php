<?php
include '../connection.php';
$id=$_POST['id'];
$delete="DELETE FROM tbl_product WHERE product_id='$id'";
mysqli_query($conn,$delete)
?>