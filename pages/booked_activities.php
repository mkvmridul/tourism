<!Doctype html>
<html>
      <head>
      <title>Login</title>
            <link rel="stylesheet" href="../css/styles.css">
            <link rel="stylesheet" href="../css/home.css">
      </head>

      <body>
            <?php include_once "./components/nav.php" ?>
            <br />

            <div class="main">
                  <h1 class="title">My Bookings</h1>
                  <br />
                  <br />     
                  <div class="blogs">  
                        <?php 
                               require "../php/database_conf.php";     
                              $db_query= $mysql_conn->prepare("select * from booked_activities ba join activities a on ba.activityID = a.activityID join customers c on c.customerID = ba.customerID where c.username = ?");
                              $db_query->bind_param("s",$_SESSION['user']);
                              $db_query->execute();
                              $db_output = $db_query->get_result();
                              while($row = $db_output->fetch_assoc())
                              {
                                    // print_r($row);
                        ?>
                              <div class="blog">
                                    <img src="../assets/activities.svg" width="10" style="display: inline;"/>
                                    <span>
                                          <h1 style="display: inline;"><b>Activity Name: &nbsp;&nbsp;</b><?=$row['activity_name'] ?></h1>
                                          <br />
                                          <br />
                                          <p style="display: inline;"><b>Description: &nbsp;&nbsp;</b><?=$row['description']?></p>
                                          <br />
                                          <br />
                                          <br />
                                          <b>Price: &nbsp;&nbsp;</b><span class="date" style="color: green;">￡ <?=$row['price']?></span>
                                          <br />
                                          <br />
                                         <b>Date: &nbsp;&nbsp;</b> <span style="color: green;"> <?=$row['date_of_activity']?></span>
                                          <br />
                                          <br />
                                          <b>Number of tickets: &nbsp;&nbsp;</b><span style="color: green;"> <?=$row['number_of_tickets']?></span>
                                    </span>
                              </div>
                              <br />
                              <br />
                              <br />
                        <?php } ?>
                  </div>
            </div>
      </body>
</html>