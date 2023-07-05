<?php
include('../../inc.php');
$id           = $_POST['id']; 
$name         = $_POST['name'];
$email        = $_POST['email'];
$password     = $_POST['password'];
$date         = $_POST['date'];



$sql = "UPDATE admins SET  name ='$name', email ='$email',password ='$password', date ='$date'  WHERE id= $id";

 $conn->query($sql);

 header('location:../../admin.php');







?>