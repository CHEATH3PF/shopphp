<?php
include("connection.php");
//$show = '';
if(isset($_POST["product"])){
	$category_query = "SELECT * FROM tbl_product";
	$run_query = mysqli_query($con,$category_query) or  die(mysqli_error($con));
			echo "
				<table id='datatable' id='datatable-responsive' class='table table-striped table-bordered' cellspacing='0' width='100%'>
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Product Category</th>
                          <th>Product Name</th>
						  <th>Product Price</th>
                          <th>Product Brand</th>
                          <th>Product Des</th>
                          <th>Controll Action</th>
                        </tr>
                      </thead>
                      <tbody>
			";
	if(mysqli_num_rows($run_query)> 0){
		while($row = mysqli_fetch_array($run_query)){
			$p_id = $row['id'];
			$p_cat = $row['pro_category'];
			$p_name = $row['pro_name'];
			$p_price = $row['pro_price'];
			$p_brand = $row['pro_brand'];
			$p_des = $row['pro_des'];
			echo "
				<tr>I 
				<td ><center>$p_id</center></td>
				<td contenteditable pid1='$p_id' class='p_cat'>$p_cat</td>
				<td contenteditable pid2='$p_id' class='p_name'>$p_name</td>
				<td contenteditable pid3='$p_id' class='p_price'>$p_price</center></td>
				<td contenteditable pid4='$p_id' class='p_brand'>$p_brand</td>
				<td contenteditable pid5='$p_id' class='p_des'>$p_des</td>
				<td>
				<a  remove_id='$p_id'  class='btn btnn-danger remove' title='delete'><i style='color: red;' class='fa fa-trash'></i></a>|<a  update_id='$p_id'  class='btn btn-infoo update'  title='Edit'><i class='fa fa-edit'></i></a>
				</td>
				
				</tr>
				
			";
			
			
		}
		echo "</tbody>";
		echo "</table>";
		
		
		
	}
}


?>