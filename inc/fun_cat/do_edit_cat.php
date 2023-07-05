<?php
include('../../inc.php');
$id       = $_POST['id']; 
$elname   = $_POST['elname'];



$sql = "UPDATE category SET  name ='$elname' WHERE id= $id";

 $conn->query($sql);

 header('location:../../category.php');

 









?>