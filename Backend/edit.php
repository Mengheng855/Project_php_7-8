<?php
include '../connection.php';
if(isset($_SERVER['REQUEST_METHOD'])=="POST"){
    $id=$_POST['id'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $des = $_POST['description'];
    $file = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $path = 'upload/' . $file;
    move_uploaded_file($tmp_name, $path);
    $sql="UPDATE tbl_product SET title='$title', price='$price', description='$des', product_image='$file' WHERE product_id='$id'";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Data Updated Successfully";
    }else{
        echo "Data Not Updated";
    }
}