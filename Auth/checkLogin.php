<?php
include '../connection.php';
include './sweetAlert.php';
session_start();
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $select="SELECT email ,is_admin,profile FROM tbl_user WHERE email='$email' AND password='$password'";
    $rs=mysqli_query($conn,$select);
    if($row=mysqli_fetch_assoc($rs)){
        $_SESSION['login']=1;
        $_SESSION['email']=$row['email'];
        $_SESSION['is_admin']=$row['is_admin'];
        $_SESSION['profile']=$row['profile'];
        if($_SESSION['is_admin']==1){
            
             alert('Login successfully!','Welcome Admin','success','../Backend/index.php');
        }elseif($_SESSION['is_admin']==0){
            alert('Login successfully!','Welcome user','success','../Frontend/frontend.php');
        }else{
             alert('Wrong password or email','Try again!','error','../Frontend/frontend.php');
        }
    }
}

?>