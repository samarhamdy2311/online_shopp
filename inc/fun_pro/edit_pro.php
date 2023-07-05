<script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
				
<?php
include('inc.php');
$id = $_GET['id'];
$sql1 = "SELECT * FROM products WHERE id=$id";
$res1 = $conn->query($sql1);
while ($row1 = $res1->fetch_assoc()) {
	?>



<h2>Edit Product</h2>
<br>
<form method="post" action="inc/fun_pro/do_edit_pro.php" enctype="multipart/form-data">
	<label>Name:</label>
	<input type="text" name="elname" class="form-control" value="<?php echo $row1['name'];  ?>">
	<br>

	<label>Description:</label>
	<br>
	<textarea style="height: 200px;" class="form-control" name="desc" ><?php echo $row1['description'];  ?></textarea>
	<br>

	<label>Cover:</label>
	<input type="file" name="cover" class="form-control">
	<br>

	<label>Price:</label>
	<input type="number" name="price" class="form-control" value="<?php echo $row1['price'];  ?>">
	<br>

	<label>Brand:</label>
	<select class="form-control" name="brand" >
		<?php
		include('inc.php');
$sql = " SELECT * FROM brand ";
$res = $conn->query($sql);
while ($row = $res->fetch_assoc()) {
  ?>
 <option value ="<?php echo $row['id']?>"><?php echo $row['name']; ?></option>
  <?php
}
		?>
	</select>
	<br>


	<label>Category:</label>
	<select class="form-control" name="cat">
		<?php
$sql = " SELECT * FROM category ";
$res = $conn->query($sql);
while ($row = $res->fetch_assoc()) {
  ?>
 <option value ="<?php echo $row['id']?>"><?php echo $row['name']; ?></option>
  <?php
}
		?>
	</select>
	<br>

	<label>Sale:</label>
	<input type="text" name="sale" class="form-control" value="<?php echo $row1['sale'];  ?>">
	<br>

	<label>Count:</label>
	<input type="number" name="count" class="form-control" value="<?php echo $row1['count'];  ?>">
	<br>

	<input type="hidden" name="id" class="form-control" value="<?php echo $row1['id'];  ?>">
	<br>

	<input type="submit" value="Go"  class="form-control btn btn-success">
</form>

<?php
	}


?>