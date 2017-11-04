<?php>
// Importing DBConfig.php file.
include 'DBconfig.php';

// Creating connection.
 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);


$Sql_Query = "select * from g5_write_test10";

$result = mysqli_query($con,$Sql_Query);
while($row = $result->fetch_assoc())
{
  $json = json_encode($row);
  echo $json;
}

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
