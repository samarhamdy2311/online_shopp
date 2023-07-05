
<script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
				



<h2>Add New Products</h2>
<br>
<form action="inc/des/do_add_new_pro.php" method="post" enctype="multipart/form-data">
	<label>Name:</label>
	<input type="text" name="elname" class="form-control">
	<br>

	<label>Description:</label>
	<br>
	<textarea style="height: 200px;" class="form-control" name="desc"></textarea>
	<br>

	<label>Cover:</label>
	<input type="file" name="cover[]" class="form-control" multiple = "multiple">

	<br>

	<label>Price:</label>
	<input type="number" name="price" class="form-control">
	<br>

	<label>Brand:</label>
	<select class="form-control" name="brand">
		<?php
		include('inc.php');
$sql1 = " SELECT * FROM brand ";
$res1 = $conn->query($sql1);
while ($row1 = $res1->fetch_assoc()) {
  ?>
 <option value ="<?php echo $row1['id']?>"><?php echo $row1['name']; ?></option>
  <?php
}
		?>
	</select>
	<br>


	<label>Category:</label>
	<select class="form-control" name="cat">
		<?php
$sql2 = " SELECT * FROM category ";
$res2 = $conn->query($sql2);
while ($row2 = $res2->fetch_assoc()) {
  ?>
 <option value ="<?php echo $row2['id']?>"><?php echo $row2['name']; ?></option>
  <?php
}
		?>
	</select>
	<br>

	<label>Sale:</label>
	<input type="text" name="sale" class="form-control">
	<br>

	<label>Count:</label>
	<input type="number" name="count" class="form-control">
	<br>

	<input type="submit" value="Go" name="submit" class="form-control btn btn-success"/>
</form>

