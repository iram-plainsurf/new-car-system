


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>:: Morris Garage ::</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    </head>
  <body>
    <div class="container-fluid">
                <!-- header code -->
            <div class="row">
                <div class="col-md-12" id="head_dash1">
                <h4 id="text1">
                     <span class="glyphicon glyphicon-cog" aria-hidden="true"  class="leaf1"></span>&nbsp;&nbsp;
                   <i class="glyphicon glyphicon-share pull-right"></i>
                   :: Morris Garage ::
                   </h4>
                </div>
            </div>

      


        <div class="row">
             <div class="col-md-2">
                 

                  <!-- sideBar Code of DashBoard -->
                  <ul class="nav nav-pills nav-stacked left-menu arrows_list" id="stacked-menu">
                     <li>
                        <a href="#" data-target="#item1" data-toggle="collapse" data-parent="#stacked-menu" class="mainDept collapsed"><i class="fa fa-file"></i>&nbsp;&nbsp;Morris Garage  <span class="caret arrow "></span></a>
                        <ul class="nav nav-stacked left-submenu collapse" id="item1" style="height: 0px;">
                          <li><a href="customersDashUD.php" class="dash1" >List</a></li>
                          <li><a href="backup.php" class="dash1" >Backup</a></li>
                          <li><a href="logout.php" class="dash1" >Logout</a></li>
                        </ul>
                      </li>
                    </ul>
                     </div>
                </div>


                <div class="col-md-6 col-md-offset-4">
                    <div class="col-md-1 col-md-offset-10">
                        <a href="customers.php"><input type="submit" id="btn_save" class="btn btn-lg btn-success"  value="Add"></a>
                    </div>

                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                         </ol>
                          <!--<div class="col-md-12">-->

                          </div>

                     <br><br> 
   

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
    </div>
</body>
</html>
