<?php
include("connection.php");
//if(isset($_POST(["editePro"])){
	$pid = $_POST["pid"];
	$newtext = $_POST["text"];
	$colum_name = $_POST["col_name"];
	//$pprice = $_POST["p_price"];
	//$pbrand = $_POST["p_brand"];
	//$pdes = $_POST["p_des"];
	//pro_category,pro_name,pro_price,pro_brand,pro_des
	$result = "UPDATE tbl_product SET ".$colum_name."='$newtext' WHERE id='$pid'";
		$run = mysqli_query($con,$result);
	
		if($result){
			echo"You are Update Successfull!";
		}else{
			echo"Not UPDATE";
		}
	//}

?>