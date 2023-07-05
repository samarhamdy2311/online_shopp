
<style>
  img
  {width: 100px;
    height: outo}
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

<h1>All Products</h1>

<table id="customers">
  <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>DESCRIPTION</th>
    <th>COVER</th>
    <th>PRICE</th>
    <th>BRAND</th>
    <th>CATEGORY</th>
    <th>SALE</th>
    <th>COUNT</th>
    <th>CONTROL</th>
  </tr>

<?php
include('inc.php');
$sql = " SELECT * FROM products ";
$res = $conn->query($sql);
while ($row = $res->fetch_assoc()) {
  ?>
 <tr>
    <td><?php echo $row['id'];    ?></td>
    <td><?php echo $row['name'];  ?></td>
    <td><?php echo $row['description']; ?></td>
    <td><?php $img= $row['cover']; ?>
      <img src="inc/des/imgs/<?php echo $img ?>">
    </td>
    <td><?php echo $row['price']; ?></td>
    <td><?php $brandid= $row['brand']; 
$sql1 = "SELECT * FROM brand WHERE id = $brandid";
$res1 = $conn->query($sql1);
while ($row1 =$res1->fetch_assoc()) {
  echo $row1['name'];
}



  ?></td>
    <td><?php $catid = $row['category'];
$sql1 = "SELECT * FROM category WHERE id = $catid";
$res1 = $conn->query($sql1);
while ($row1 =$res1->fetch_assoc()) {
  echo $row1['name'];
}




     ?></td>
    <td><?php echo $row['sale']; ?></td>
    <td><?php echo $row['count']; ?></td>
    <td>
      <a href="?do=edit&id=<?php echo $row['id'];?>" >
        <button class="btn btn-success">Edit</button>
      </a>
      <a href="inc/fun_pro/delete_pro.php?id=<?php echo $row['id'];?>" >
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