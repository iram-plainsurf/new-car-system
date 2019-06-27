<?php
	require("config.php");

	if($_POST["action"]=="save")
	{
		$txt_customer_name=$_POST["txt_customer_name"];
		$txt_address=$_POST["txt_address"];
		$txt_contact=$_POST["txt_contact"];
		$txt_model=$_POST["txt_model"];
		$txt_price=$_POST["txt_price"];
		$txt_payment=$_POST["txt_payment"];

		$sql=mysqli_query($con,"INSERT INTO  customers VALUES('','".$txt_customer_name."','".$txt_address."','".$txt_contact."','".$txt_model."','".$txt_price."','".$txt_payment."')");

		//echo $sql;
		if ($sql>0) 
		{
		   echo "1";
		}
		else
		{
			echo "0";
		}
	}

?>