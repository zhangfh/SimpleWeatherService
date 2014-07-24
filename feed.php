<?php
include ("./db_connect.php");
ini_set('display_errors', 1);
ini_set('log_errors', 1);  
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$link = mysqli_connect("localhost","root","","test") or die("Error " . mysqli_error($link)); 



$sql = "select * from weather order by timestamp desc, station desc limit 2";
$result = mysqli_query($link,$sql) or trigger_error(mysql_error());
$output = array();
$output[0]= mysqli_fetch_assoc($result);
$output[1]= mysqli_fetch_assoc($result);
echo json_encode($output);
?>