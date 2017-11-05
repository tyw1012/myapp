<meta charset="utf-8">
<?php>
// Importing DBConfig.php file.
include 'DBconfig.php';

// Creating connection.
 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

mysqli_set_charset($con,"utf8");

$Sql_Query = "select * from test";

$result = mysqli_query($con,$Sql_Query) ;

$emparray = array();
   while($row =mysqli_fetch_assoc($result))
   {
             $emparray[] = $row;
   }


// $json_result = json_encode($emparray);
// $json_result = urldecode($json_result);
//
// echo iconv("CP949", "UTF-8", $json_result);
// echo '<pre>';
// print_r($emparray);
// echo '</pre>';

echo json_encode($emparray, JSON_UNESCAPED_UNICODE);

// print_r($result) ;

//  if(mysqli_query($con,$Sql_Query)){
//
//  // If the record inserted successfully then show the message.
// $MSG = $obj;
//
// // Converting the message into JSON format.
// $json = json_encode($MSG);
//
// // Echo the message.
//  echo $json ;
//
//
//  }
//  else{
//
//  echo 'Try Again';
//
//  }
 mysqli_close($con);
?>
