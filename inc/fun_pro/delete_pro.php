<?php 

include('../../inc.php');

$id = $_GET['id'];

$sql = "DELETE FROM products WHERE id=$id ";
$conn->query($sql);

header('location:../../products.php');











 ?>