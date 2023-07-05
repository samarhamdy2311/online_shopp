<?php
include('../../inc.php');
$id       = $_POST['id']; 
$elname   = $_POST['elname'];
$desc     = $_POST['desc'];
$price    = $_POST['price'];
$brand    = $_POST['brand'];
$cat      = $_POST['cat'];
$sale     = $_POST['sale'];
$count    = $_POST['count'];

$img_name = $_FILES['cover'] ['name'];
$img_size = $_FILES['cover'] ['size'];
$img_tmp  = $_FILES['cover'] ['tmp_name'];

$arrext   = array('jpg','gif','jpeg','png');
$extuplode= explode('.', $img_name);
$extuplodecheck = end($extuplode);

if (!in_array($extuplodecheck, $arrext)) {
	echo "ext error";
	exit();
}

if ($img_size > 4000000) {
	echo "size error";
	exit();
}

$new_img_name = time().rand(0,1000000).$img_name ;

move_uploaded_file($img_tmp,"imgs/$new_img_name");


$sql = "UPDATE products SET  name ='$elname', description ='$desc', category ='$cat', sale ='$sale', brand ='$brand', cover ='$new_img_name',  count ='$count', price ='$price' WHERE id= $id";

 $conn->query($sql);

 header('location:../../products.php');

 









?>