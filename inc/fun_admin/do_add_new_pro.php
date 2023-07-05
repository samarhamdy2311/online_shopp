<?php
include('../../inc.php');

$elname      = $_POST['elname'];
$email       = $_POST['email'];
$password    = $_POST['password'];
$date        = $_POST['date'];




$sql = "INSERT INTO admins ( name , email , password , date )
                 VALUES ('$elname','$email','$password','$date')";

 $conn->query($sql);

 header('location:../../admin.php');