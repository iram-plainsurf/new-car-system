<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>Customer Form</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">	
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/customersDashUD.js"></script>
</head>

<body>
	 <div class="container-fluid"> 
        <br><br>   	
		<div class="panel panel-danger">
		  <div class="panel-heading">Customer Data</div>
		  <div class="panel-body">
			    <div class="row">
			    	<div class="col-md-2 col-md-offset-3">
			    		<label>Customer Name :<span style="color:red";>*</span></label>
			    	</div>
			    	<div class="col-md-4">
			    		<input type="hidden" id="txt_customer_id" >
			    		<input type="text" id="txt_customer_name" class="form-control" placeholder="Customer Name">
			    	    <br><span id="name_error"></span>
			    	</div>
			    </div><br>

			    <div class="row">
			    	<div class="col-md-2  col-md-offset-3">
			    		<label>Address :</label>	
			    	</div>
			    	<div class="col-md-4">
			    	  <input type="text" id="txt_address" class="form-control" placeholder="Address">	
			    	  <br><span id="address_error"></span>       	
			    	</div> 
			    </div><br>

			    <div class="row">
			    	<div class="col-md-2 col-md-offset-3">
			    		<label>Conatct Number:<span style="color:red">*</span></label>			    		
			    	</div>
			    	<div class="col-md-4">
			    		<input type="text" id="txt_contact" class="form-control" placeholder="Contact Number">
			    		<br><span id="number_error"></span>		    		
			    	</div>			    	
			    </div><br>

			    <div class="row">
			    	<div class="col-md-2  col-md-offset-3">
			    		<label>Car Model:</label>	
			    	</div>
			    	<div class="col-md-4">
			    	  <input type="text" id="txt_model" class="form-control" placeholder="Car Model">	
			    	  <br><span id="model_error"></span>       	
			    	</div> 
			    </div><br>

			    <div class="row">
			    	<div class="col-md-2  col-md-offset-3">
			    		<label>Price :<span style="color:red";>*</span></label>	
			    	</div>
			    	<div class="col-md-4">
			    	  <input type="text" id="txt_price" class="form-control" placeholder="price">	
			    	  <br><span id="price_error"></span>       	
			    	</div> 
			    </div><br>

			     <div class="row">
			    	<div class="col-md-2  col-md-offset-3">
			    		<label>Payment :</label>	
			    	</div>
			    	<div class="col-md-4">
			    		<select name="price" id="txt_payment" class="form-control">
			    			<option>loan</option>
			    			<option>cash</option>
			    			<option>credit</option>
                            </select>
			    	 <!-- <input type="text" id="txt_price" class="form-control" placeholder="price">	
			    	  <br><span id="price_error"></span> -->      	
			    	</div> 
			    </div><br>

			    <div class="row">
			    	<div class="col-md-1 col-md-offset-4">
			    		<input type="submit" id="btn_update" class="btn btn-lg btn-info" value="Update">
			    	</div>
			    			    	
			    	<div class="col-md-1">
			    		<input type="submit" id="btn_clear" class="btn btn-lg btn-warning" value="Clear">
			    	</div>			    	
			    </div><br>


			    <div class="row">
			    	<div class="col-md-7 col-md-offset-3">
			    		<table class="table table-striped table-bordered table-hover table-condensed">
			    			 <thead>
			    			 	 <tr>
			    			 	 	<th>Sr.No</th>
			    			 	 	<th>Customer Name</th>
			    			 	 	<th>Address</th>
			    			 	 	<th>Conatct Number</th>
			    			 	 	<th>Car Model</th>
			    			 	 	<th>Price</th>
			    			 	 	<th>Payment</th>
			    			 	 	<th>Action</th>
			    			 	 </tr>
			    			 </thead>
			    			 <tbody id="loadData"></tbody>
			    		</table>
			    	</div>
			    </div>
		  </div>
		</div>
    </div>
</body>
</html>