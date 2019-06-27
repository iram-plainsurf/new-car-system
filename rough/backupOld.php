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
         <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <br><br><br><br><br>
                    <div class="panel panel-success">
                         <div class="panel-heading">Backup Data</div>
                         <div class="panel-body">
                <div class="row">
                    <div class="col-md-6 col-md-offset-4">
                     <div class="row">
                        <div class="col-md-6" >
                            <div class="main-box mb-red">
                                <i class="fa fa-file-text fa-5x"></i>
                                <h5>Import</h5>
                                <form class="md-form" method="post"  enctype="multipart/form-data">
                                  <div class="file-field">
                                    <div class="btn btn-sm">
                                      <span></span>
                                      <input type="file" name="jsonFile">
                                    </div>
                                    <div class="file-path-wrapper">
                                      <input type="submit" value="Import" name="buttomImport">
                                    </div>
                                  </div>
                                </form>
                            </a>
                        </div>
                    </div>

                     <div class="col-md-6">
                        <div class="main-box mb-pink">
                            <a href="export.php">
                                <i class="fa fa-file-text fa-5x"></i>
                                <h5>Export</h5>
                            </a>
                        </div>
                    </div>



                    <?php
    require("assets/php/config.php");

     if(isset($_POST['buttomImport']))
      {
    copy($_FILES['jsonFile']['tmp_name'], 'jsonFiles/'.$_FILES['jsonFile']['name']);
    $data = file_get_contents('jsonFiles/'.$_FILES['jsonFile']['name']);
    $customers = json_decode($data);
    foreach ($customers as $customers)
     {
        $stmt = $conn->prepare('insert into customers(name, address, contact, car_model, price, payment) values(:name, :address, :contact, :car_model, :price, :payment)');
        $stmt->bindValue('name', $customers->name);
        $stmt->bindValue('address', $customers->address);
        $stmt->bindValue('contact', $customers->contact);
        $stmt->bindValue('car_model', $customers->car_model);
        $stmt->bindValue('price', $customers->price);
        $stmt->bindValue('payment', $customers->payment);
        $stmt->execute();
    }
}
?>
                  
                </div>
            </div>
      </div>
</div>
</div>
</div>
</body>
</html>