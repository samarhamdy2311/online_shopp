<?php
session_start();
include('../../inc.php');


$elname      = $_POST['elname'];
$email       = $_POST['email'];
$password    = $_POST['password'];
$password_md5 = md5($password);
$date        = $_POST['date'];

$errors=[];

if (empty($_POST['elname'])) {
  $errors[]='error name' ;
}

if (empty($errors)) {
  $sql = "INSERT INTO admins ( name , email , password , date )
                 VALUES ('$elname','$email','$password_md5','$date')";

 $conn->query($sql);

 header('location:../../admin.php');
}else{
    $_SESSION['error']= $errors;
header('location:../../admin.php?do=add');
}



