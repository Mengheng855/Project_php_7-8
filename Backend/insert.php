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
    if ($ex) {
        echo 123;
    }
}
