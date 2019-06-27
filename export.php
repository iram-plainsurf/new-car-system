<!-- json export -->
<?php  
//PDO is a extension which  defines a lightweight, consistent interface for accessing databases in PHP.  
$db=new PDO('mysql:dbname=cardb;host=localhost;','root','');  
//here prepare the query for analyzing, prepared statements use less resources and thus run faster  
$row=$db->prepare('select * from  customers');  
  
$row->execute();//execute the query  
$json_data=array();//create the array  
foreach($row as $rec)//foreach loop  
{  
$json_array['c_id']=$rec['c_id'];  
    $json_array['name']=$rec['name'];    
    $json_array['address']=$rec['address'];    
    $json_array['contact']=$rec['contact'];    
    $json_array['car_model']=$rec['car_model'];    
    $json_array['price']=$rec['price'];    
    $json_array['payment']=$rec['payment'];   



//here pushing the values in to an array  
    array_push($json_data,$json_array);  
  
}  
  
//built in PHP function to encode the data in to JSON format  
echo json_encode($json_data);  
//download json file
$file = 'cardb.json';
file_put_contents($file, json_encode($json_data));
header("Content-type: application/json");
header('Content-Disposition: attachment; filename="'.basename($file).'"'); 
header('Content-Length: ' . filesize($file));
readfile($file);