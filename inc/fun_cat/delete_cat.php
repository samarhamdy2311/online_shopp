<?php 

include('../../inc.php');

$id = $_GET['id'];

$sql = "DELETE FROM category WHERE id=$id ";
$conn->query($sql);

header('location:../../category.php');











 ?>