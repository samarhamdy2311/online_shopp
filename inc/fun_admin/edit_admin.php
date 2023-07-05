<script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
				
<?php
include('inc.php');
$id = $_GET['id'];
$sql1 = "SELECT * FROM admins WHERE id=$id";
$res1 = $conn->query($sql1);
while ($row1 = $res1->fetch_assoc()) {
	?>



<h2>Edit Admin</h2>
<br>
<form method="post" action="inc/fun_admin/do_edit_admin.php">
	<label>Name:</label>
	<input type="text" name="name" class="form-control" value="<?php echo $row1['name'];  ?>">
	<br>


	<label>Email:</label>
	<input type="email" name="email" class="form-control" value="<?php echo $row1['email'];  ?>">
	<br>

	<label>Password:</label>
	<input type="password" name="password" class="form-control" value="<?php echo $row1['password'];  ?>">
	<br>


	<label>Date:</label>
	<input type="date" name="date" class="form-control" value="<?php echo $row1['date'];  ?>">
	<br>
	
<input type="hidden" name="id" class="form-control" value="<?php echo $row1['id'];  ?>">
	<br>


	<input type="submit" value="Done"  class="form-control btn btn-success">
</form>

<?php
	}


?>