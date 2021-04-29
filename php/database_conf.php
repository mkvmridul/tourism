<?php
 
 $server = "localhost";
 $user = "phpmyadmin";
 $password = "newpassword";
 $db = "travel";


 //connection to database
$mysql_conn = mysqli_connect($server,$user,$password,$db);
 
if($mysql_conn === false){
      print_r("<h1>conn failed</h1>");
      echo "conn. failed" .  mysqli_connect_error();
} 

?>