<?php>
// Importing DBConfig.php file.
include 'DBconfig.php';

// Creating connection.
 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

 // Getting the received JSON into $json variable.
 $json = file_get_contents('php://input');

 // echo $json;

 // decoding the received JSON and store into $obj variable.
 $obj = json_decode($json,true);

 // Populate name from JSON $obj array and store into $name.
$wr_subject = $obj['wr_subject'];

// Populate email from JSON $obj array and store into $email.
$wr_writer = $obj['wr_writer'];

// Populate phone number from JSON $obj array and store into $phone_number.
$wr_hp = $obj['wr_hp'];

 // Creating SQL query and insert the record into MySQL database table.
$Sql_Query = "insert into g5_write_test10 (wr_subject,wr_writer,wr_hp) values ('$wr_subject','$wr_writer','$wr_hp')";


 if(mysqli_query($con,$Sql_Query)){

 // If the record inserted successfully then show the message.
$MSG = 'Data Inserted Successfully into MySQL Database' ;

// Converting the message into JSON format.
$json = json_encode($MSG);

// Echo the message.
 echo $json ;

 }
 else{

 echo 'Try Again';

 }
 mysqli_close($con);
?>
