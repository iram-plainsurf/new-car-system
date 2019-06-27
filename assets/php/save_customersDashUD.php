<?php
	require("config.php");


	if($_POST["action"]=="fetchData")
	{

       $sql=mysqli_query($con,"SELECT * FROM customers");
       $html="";
       $i=1;
       while ($row=mysqli_fetch_array($sql)) {
       	  $html.="<tr>";
       	  $html.="<td>".$i."</td>";
       	  $html.="<td>".$row['name']."</td>";
       	  $html.="<td>".$row['address']."</td>";
       	  $html.="<td>".$row['contact']."</td>";
       	  $html.="<td>".$row['car_model']."</td>";
       	  $html.="<td>".$row['price']."</td>";
       	  $html.="<td>".$row['payment']."</td>";
       	  $html.="<td><a href='#' class='btn btn-primary' id='".$row['c_id']."edit' onClick='getEmployee(this);'>Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='#' class='btn btn-danger' id='".$row['c_id']."delete' onClick='deleteEmployee(this);'>Delete</a></td>";
       	  $html.="</tr>";
       	  $i++;
       }
       echo $html;
	}

    if($_POST["action"]=="getRow")
    {
    	$sql=mysqli_query($con,"SELECT * FROM customers WHERE c_id=".$_POST['c_id']);
    	$arr = array();
    	while ($row=mysqli_fetch_array($sql)) 
    	{
    		$arr['emp_id']=$row['c_id'];
    		$arr['txt_customer_name']=$row['name'];
    		$arr['txt_address']=$row['address'];
    		$arr['txt_contact']=$row['contact'];
    		$arr['txt_model']=$row['car_model'];
    		$arr['txt_price']=$row['price'];
    		$arr['txt_payment']=$row['payment'];

    	}
    	echo json_encode($arr);
    }

	if($_POST["action"]=="update")

	
	{
		$id=$_POST["id"];
		$txt_customer_name=$_POST["txt_customer_name"];
		$txt_address=$_POST["txt_address"];
		$txt_contact=$_POST["txt_contact"];
		$txt_model=$_POST["txt_model"];
		$txt_price=$_POST["txt_price"];
		$txt_payment=$_POST["txt_payment"];

		$sql=mysqli_query($con,"UPDATE customers SET name='".$txt_customer_name."',address='".$txt_address."',contact='".$txt_contact."',car_model='".$txt_model."',price='".$txt_price."',payment='".$txt_payment."' WHERE c_id=".$id);

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


	if($_POST["action"]=="delete")
	{
		$id=$_POST["c_id"];
		$sql=mysqli_query($con,"DELETE FROM customers WHERE c_id=".$id);

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