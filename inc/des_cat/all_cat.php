<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>

<h1>All Categorys</h1>

<table id="customers">
  <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>CONTROL</th>
  </tr>

<?php
include('inc.php');
$sql = " SELECT * FROM category ";
$res = $conn->query($sql);
while ($row = $res->fetch_assoc()) {
  ?>
 <tr>
    <td><?php echo $row['id'];    ?></td>
    <td><?php echo $row['name'];  ?></td>
    <td>
      <a href="?do=edit&id=<?php echo $row['id'];?>" >
        <button class="btn btn-success">Edit</button>
      </a>
      <a href="inc/fun_cat/delete_cat.php?id=<?php echo $row['id'];?>" >
        <button class="btn btn-danger">Delete</button>
      </a>
    </td>
  </tr>



  <?php
}



?>



 

</table>
<br>
<a href="?do=add">
    <button class="btn btn-primary">Add new</button>
</a>