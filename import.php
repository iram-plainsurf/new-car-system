<?php
$connect = mysqli_connect("localhost", "root", "", "cardb");
$query = '';
if(isset($_POST['buttomImport'])) {
    copy($_FILES['jsonFile']['tmp_name'], 'uploads/'.$_FILES['jsonFile']['name']);
    $data = file_get_contents('uploads/'.$_FILES['jsonFile']['name']);
    $array = json_decode($data, true); //Convert JSON String into PHP Array
          foreach($array as $row) //Extract the Array Values by using Foreach Loop
          {
           $query= "INSERT INTO customers(c_id, name, address, contact, car_model, price, payment) VALUES ('".$row["c_id"]."', '".$row["name"]."', '".$row["address"]."', '".$row["contact"]."', '".$row["car_model"]."', '".$row["price"]."', '".$row["payment"]."'); ";  // Make Multiple Insert Query 
          }
          if(mysqli_multi_query($connect, $query)) //Run Mutliple Insert Query
    {
     echo '<h5>JSON Data Imported Successfully</h5><br />';
    }
}
?>

<!-- <?php
          $connect = mysqli_connect("localhost", "root", "", "carinfo"); //Connect PHP to MySQL Database
          $query = '';
          $filename = "record.json";
          $data = file_get_contents($filename); //Read the JSON file in PHP
          $array = json_decode($data, true); //Convert JSON String into PHP Array
          foreach($array as $row) //Extract the Array Values by using Foreach Loop
          {
           $query .= "INSERT INTO customer(id,cname, address, contact,model, price, payment) VALUES ('".$row["id"]."', '".$row["cname"]."', '".$row["address"]."', '".$row["contact"]."', '".$row["model"]."', '".$row["price"]."', '".$row["payment"]."'); ";  // Make Multiple Insert Query 
          }
          if(mysqli_multi_query($connect, $query)) //Run Mutliple Insert Query
    {
     echo '<h5>JSON Data Imported Successfully</h5><br />';
    }
        ?> -->