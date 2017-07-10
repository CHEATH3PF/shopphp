<?php

include("connection.php");

			$pcat = $_POST["cat"];
			$pname = $_POST["name"];
			$pprice = $_POST["price"];
			$pbrand = $_POST["brand"];
			$pdes = $_POST["des"];


			
			$insert = "INSERT INTO tbl_product(pro_category,pro_name,pro_price,pro_brand,pro_des)VALUES('".$pcat."','".$pname."','".$pprice."','".$pbrand."','".$pdes."')" or die(mysqli_error($con));
			//$insert = "INSERT INTO `tbl_product` (`pro_catagory`, `pro_name`, `pro_price`, `pro_brand`, `pro_des`) VALUES (NULL, '$pcat', '$pname', '$pprice', '$pbrand', '$pdes')";
			//$insert = ("INSERT INTO tbl_product(pro_category,pro_name,pro_price,pro_brand,pro_des) VALUES('$pcat','$pname','$pprice','$pbrand','$pdes')");
			$run_query = mysqli_query($con,$insert);
			if($run_query){
				echo"You are insert Successe!";
			}else{
				echo"You are not Successe!";
			}
			
?>