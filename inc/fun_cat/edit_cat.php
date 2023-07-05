<script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
				
<?php
include('inc.php');
$id = $_GET['id'];
$sql1 = "SELECT * FROM category WHERE id=$id";
$res1 = $conn->query($sql1);
while ($row1 = $res1->fetch_assoc()) {
	?>



<h2>Edit Category</h2>
<br>
<form method="post" action="inc/fun_cat/do_edit_cat.php">
	<label>Name:</label>
	<input type="text" name="elname" class="form-control" value="<?php echo $row1['name'];  ?>">
	<br>

	<br>

	<input type="hidden" name="id" class="form-control" value="<?php echo $row1['id'];  ?>">
	<br>

	<input type="submit" value="Go"  class="form-control btn btn-success">
</form>

<?php
	}


?>