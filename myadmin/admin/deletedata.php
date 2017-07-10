<?php
	
	include("connection.php");
	
	if(isset($_POST['removeFromproduct']))
			{
			$pid = $_POST['removeId'];
				
				$sql_delete = "DELETE FROM tbl_product WHERE id=$pid";
				mysqli_query($con,$sql_delete);
				if($sql_delete){
					echo "Product is was deleted!";
					return false;
				}
			}
			
?>