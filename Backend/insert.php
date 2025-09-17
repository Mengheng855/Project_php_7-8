<?php
include '../connection.php';
if (isset($_SERVER['REQUEST_METHOD']) == 'POST') {
    $title = $_POST['title'];
    $price = $_POST['price'];
    $des = $_POST['description'];
    $file = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $path = 'upload/' . $file;
    move_uploaded_file($tmp_name, $path);
    $insert = "INSERT INTO tbl_product (title,price,description,product_image)
   VALUES ('$title','$price','$des','$file')";
    $ex = mysqli_query($conn, $insert);
    $select="SELECT product_id FROM tbl_product ORDER BY product_id DESC LIMIT 1";
    $rs=mysqli_query($conn,$select);
    $select_id=mysqli_fetch_assoc($rs)['product_id'];
    if($select_id){
        echo $select_id;
    }
}
