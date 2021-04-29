<?php 
      
      // start session
      session_start();

      //include db conn
      require_once "./database_conf.php";



      //get user id from session
      $user_id = null;
      $db_query= $mysql_conn->prepare("select * from customers where username = ?");
      $db_query->bind_param("s",$_SESSION['user']);
      $db_query->execute();
      $db_output = $db_query->get_result();
      

      //get array output
      while($row = $db_output->fetch_assoc())
      {
            $user_id = $row['customerID'];
      }

      $activityID = (int)$_POST['activity_id'];
      $number_of_tickets = (int)$_POST['no_of_tickets'];
      $date_time = date('Y-m-d H:i:s');


      //check for unique user_id and activity_id
      $validation_query = "select * from booked_activities ba where ba.customerID = $user_id and ba.activityID = $activityID";
      if ($mysql_conn->query($validation_query)) {
                  header('Location: ../pages/activities.php?error=true');
      } else {
                  echo "Error: " . $validation_query . "<br>" . $mysql_conn->error;
      }

      //insert query
      $mysqli_sql_query = "INSERT INTO booked_activities
                   VALUES 
                  (
                  $activityID,
                  $user_id,
                  '$date_time',
                  $number_of_tickets
                  )";

            if ($mysql_conn->query($mysqli_sql_query) === TRUE) {
                        header('Location: ../pages/booked_activities.php');
            } else {
                        echo "Error: " . $mysqli_sql_query . "<br>" . $mysql_conn->error;
            }
?>