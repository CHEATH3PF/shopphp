<?php
include "config.php";
include "header.php";
?>
<p>
<a href="create.php" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Data</a>
 
</p>
<table id="ghatable" class="display table table-bordered table-stripe" cellspacing="0" width="100%">
<thead>
     <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Gender</th>
          <th>Phone</th>
          <th>Address</th>
          <th>Action</th>
     </tr>
</thead>
<tbody>
<?php
$res = $mysqli->query("<span id="IL_AD10" class="IL_AD">SELECT</span> * FROM personal");
while ($row = $res->fetch_assoc()):
?>
     <tr>
          <td><?php echo $row['id_personal'] ?></td>
          <td><?php echo $row['name'] ?></td>
          <td><?php echo $row['gender'] ?></td>
          <td><?php echo $row['telp'] ?></td>
          <td><?php echo $row['address'] ?></td>
          <td>
          <a href="update.php?u=<?php echo $row['id_personal'] ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a>
          <a onclick="return confirm('Are you want deleting data')" href="delete.php?d=<?php echo $row['id_personal'] ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</a>
          </td>
     </tr>
<?php
endwhile;
?>
</tbody>
</table>     
<?php
include "footer.php";
?>