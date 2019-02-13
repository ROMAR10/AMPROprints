<?php
include_once 'application/models/MySQL/connect.php';
?>

<?php
$sql = "SELECT * FROM products;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result); ?>


<table class="table table-striped table-hover table-sm" style="margin: 0px; border: 1px solid #ddd;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Brand</th>
      <th scope="col">Type</th>
      <th scope="col">Category</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <tbody>
   <?php
   while($row = mysqli_fetch_assoc($result)){
    ?>
    <tr>
      <th scope="row"><?php echo $row["prd_id"];?></th>
      <td><?php echo $row["brand"];?></td>
      <td><?php echo $row["type"];?></td>
      <td><?php echo $row["category"];?></td>
      <td>
        <button type="button" data-toggle="modal" data-target="#edit" data-uid="2" class="update btn btn-success btn-sm"><i class="fas fa-folder-open"></i></button>
        <button type="button" data-toggle="modal" data-target="#edit" data-uid="2" class="update btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
        <button type="button" data-toggle="modal" data-target="#edit" data-uid="2" class="update btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
      </td>
    </tr>

    <?php
  }
  ?>

</tbody>

</table>