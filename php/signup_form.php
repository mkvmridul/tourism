<?php

      // database conn
      require "./database_conf.php";

      $stmt = $mysql_conn->prepare("INSERT INTO customers ( username, password_hash, customer_forename, customer_surname, customer_postcode, customer_address1, customer_address2, date_of_birth) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

            // set parameters and execute
      $username = $_POST['username'];
      $password_hash = password_hash($_POST['password_hash'], PASSWORD_DEFAULT);
      $customer_forename = $_POST['customer_forename'];
      $customer_surname = $_POST['customer_surname'];
      $customer_postcode = $_POST['customer_postcode'];
      $customer_address1 = $_POST['customer_address1'];
      $customer_address2 = $_POST['customer_address2'];
      $date_of_birth = $_POST['date_of_birth'];

      $stmt->bind_param("ssssssss", $username, $password_hash, $customer_forename, $customer_surname, $customer_postcode, $customer_address1, $customer_address2, $date_of_birth);
      $stmt->execute();

      header('Location: ../pages/login.php');

?>