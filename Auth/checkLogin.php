<?php
include '../connection.php';
include './sweetAlert.php';
session_start();
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

 
    $select = "SELECT email, password, is_admin, profile FROM tbl_user WHERE email='$email'";
    $rs = mysqli_query($conn, $select);

    if ($row = mysqli_fetch_assoc($rs)) {
 
        if ($password == $row['password']) { 
   
            $_SESSION['login'] = 1;
            $_SESSION['email'] = $row['email'];
            $_SESSION['is_admin'] = $row['is_admin'];
            $_SESSION['profile'] = $row['profile'];


            if ($_SESSION['is_admin'] == 1) {
                alert('Login successfully!', 'Welcome Admin', 'success', '../Backend/index.php');
            } else {
                alert('Login successfully!', 'Welcome user', 'success', '../Frontend/frontend.php');
            }
        } else {
            alert('Wrong password or email', 'Try again!', 'error', 'login.php');
        }
    } else {
        alert('Wrong password or email', 'Try again!', 'error', 'login.php');
    }
}
