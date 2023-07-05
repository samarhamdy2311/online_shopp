
<script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
				



<h2>Add New Admin</h2>
<br>
<form method="post" action="inc/fun_admin/do_add_new_admin.php">
	<label>Name:</label>
	<input type="text" name="elname" class="form-control">
	<?php
if (isset($_SESSION['error'])) {
	 foreach ($_SESSION['error'] as $value=>$hh) {
	echo $hh;
	}
	session_destroy();
}
	
	 ?> 
	<br>


	<label>Email:</label>
	<input type="email" name="email" class="form-control">
	<br>

	<label>Password:</label>
	<input type="password" name="password" class="form-control" >
	<br>

	
	<label>Date:</label>
	<input type="date" name="date" class="form-control">
	<br>



	

	<input type="submit" value="Done" class="form-control btn btn-success">
</form>