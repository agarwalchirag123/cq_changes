<?php

//Use this to connect to a database
/* $servername = "localhost";
$username = "id18409446_cqwebteam";
$password  = "ra5Py7eA_O]d7TTz";
$database = "id18409446_blog";
 */
 $servername = "localhost";
$username = "root";
$password  = "";
$database = "blog";
$conn = mysqli_connect($servername, $username, $password, $database); 
//  $servername = "localhost";
// $username = "qyrmp3rkkjia";
// $password  = "ZaaX#a!:{2";
// $database = "cqblogs";
// $conn = mysqli_connect($servername, $username, $password, $database); 
mysqli_query($conn,"SET NAMES 'utf8'");
?>