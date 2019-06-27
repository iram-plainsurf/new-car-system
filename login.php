<?php

session_start();
//require("php/config.php");

$db=mysqli_connect("localhost","root","","cardb");

if(isset($_POST['btn_login']))
{
	//session_start();
	$username=$_POST['username'];
	$password=$_POST['password'];

	//$password = md5($password);
	$sql="SELECT username, password FROM  car_tbl WHERE username='$username' AND password='$password'";
	$result =mysqli_query($db,$sql);

	$row=mysqli_fetch_array($result);

	if($row)
	{
		if ($row['username'==$username])
		 {
			$_SESSION['username']='$username';
			header("location:index.php");
		}
		//$_SESSION['message']="you are login";
		//$_SESSION['username']=$username;
		
	}

	else
	{
	header("location:login.php");
	}
}
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>Car Login Page</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">	
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="assets/js/customerlogin.js"></script>
	</head>
<body>
	<form method="post" action="login.php">
	<div class="container">
		<br><br><br><br><br><br>
		<div class="panel panel-primary">
		  <div class="panel-heading"><center><b><u>Login</u></b></center></div>
			<div class="panel-body">
			    <div class="row">
			    	<div class="col-md-2 col-md-offset-3">
			    		<label>User Name :<label>
			    	</div>
			    	<div class="col-md-3">
			    		<!--<input type="hidden" id="txt_customer_id" >-->
			    		<input type="text" name="username" class="form-control" placeholder="User Name">
			    	    <br><span id="username_error"></span>
			    	</div>
			    </div><br>
			    <div class="row">
			    	<div class="col-md-2 col-md-offset-3">
			    		<label>Password :</label>
			    	</div>
			    	<div class="col-md-3">
			    		<input type="password" name="password" class="form-control" placeholder="Password">
			    	    <br><span id="password_error"></span>
			    	</div>
			    </div><br>

			    <div class="row">
			    	<div class="col-md-2 col-md-offset-4">
			    		<input type="submit" name="btn_login" id="btn_login" class="btn btn-lg btn-success" value="Login">
			    	</div>
			    			    	
			    	<div class="col-md-2">
			    		<input type="submit" id="btn_clear" class="btn btn-lg btn-warning" value="Clear">
			    	</div>			    	
			    </div>
		    </div>
		</div>
	</div>

</form>
</body>
</html>