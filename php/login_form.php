<?php

//lets start the session
session_start();

// database conn
require "./database_conf.php";

$db_query= $mysql_conn->prepare("select * from customers where username = ?");
$db_query->bind_param("s",$_POST['username']);
$db_query->execute();
$db_output = $db_query->get_result();

//get array output
while($row = $db_output->fetch_assoc())
{
      $encrypted_password = $row['password_hash'];
}

//redirect according to credentials
if(password_verify($_POST['password'],$encrypted_password)){
      $_SESSION['user'] = $_POST['username'];
      header("location: ../pages/home.php");
}else{
      $_SESSION['login_error'] = true;
      header('Location: ../pages/login.php');
}

?>