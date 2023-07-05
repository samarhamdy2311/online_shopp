<?php
include('../../inc.php');
$elname   = $_POST['elname'];
$desc     = $_POST['desc'];
$price    = $_POST['price'];
$brand    = $_POST['brand'];
$cat      = $_POST['cat'];
$sale     = $_POST['sale'];
$count    = $_POST['count'];



if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$errors = array();

	$all_emgs = array();
	
$uploaded_files = $_FILES['cover'];

$img_name = $uploaded_files ['name'];
$img_size = $uploaded_files ['size'];
$img_tmp  = $uploaded_files ['tmp_name'];
$img_error = $uploaded_files ['error'];

$arrext   = array('jpg','gif','jpeg','png');




if ($img_error[0] == 4) {
 	echo 'no file uploaded';
 }else{
 	$file_count = count($img_name);

for ($i=0; $i < $file_count ; $i++) { 
	
$errors =  array();

$extuplode[$i]= explode('.', $img_name[$i]);
$extuplodecheck[$i] = end($extuplode[$i]);
$img_random[$i] = rand(0, 10000000000000) . '.'.$extuplodecheck[$i];


if ($img_size[$i] > 4000000) {
	$errors[] = 'error size';
	exit();
}

if (!in_array($extuplodecheck[$i], $arrext)) {
	echo "ext error";
	exit();
}

if (empty($errors)) {

	move_uploaded_file($img_tmp[$i],"imgs/$img_random[$i]");

	$all_emgs[] = $img_random[$i];


}else{

     echo "error for file number" . ($i + 1);
     echo "file name: ".$img_name[$i];

	foreach ($errors as $error) {
		echo $error ;
	}
}


}
}


$img_filed = implode(',', $all_emgs);

}




$sql = "INSERT INTO products(name, description, category, sale, brand, cover,count, price, date)
 VALUES ('$elname','$desc','$cat','$sale','$brand','$img_filed','$count','$price','date(y-m-d)')";

 $conn->query($sql);

 header('location:../../products.php');

 



?>