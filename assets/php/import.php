<?php
include("php/config.php");

    if (isset($_POST['buttomImport'])) 
    {
    copy($_FILES['jsonFile']['temp_name'], 'jsonFiles/'.$_FILES['jsonFile']['name']);    
    $data = file_get_contents('jsonFiles/'.$_FILES['jsonFile']['name']);
    echo $data;

   // $customer = json_encode($data);
   // print_r($customer);
    }



    ?>


    <form method="post" action="post" enctype="multipart/form-data">
                                    Json File
                                    <input type="file" name="jsonFile">
                                    <input type="submit" value="Import" name="buttomImport">
    </form>
                                