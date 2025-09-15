<?php
include '../connection.php';
include './sweetAlert.php';
if(isset($_POST['register'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $file=$_FILES['file']['name'];
    $tmp_name=$_FILES['file']['tmp_name'];
    $path='image/'.$file;
    move_uploaded_file($tmp_name,$path);
    
    $insert="INSERT INTO tbl_user (username,email,password,profile) VALUES ('$username','$email','$pass','$file')";
    $ex=mysqli_query($conn,$insert);
    if($ex){
        alert('Register successfully!','You can login now','success','login.php');
    }else{
        alert('Register unsuccessfully!','Try again!','error','register.php');
    }
}
?>