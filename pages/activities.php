<?php
           if($_GET['error'])echo "<script>alert('Already booked activity')</script>" ;
?>
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
            <br />
            <br />
            <br />
            <br />
            <br />     
            <div class="main">
                  <h1 class="title">Activities</h1>
                  <br />
                  <br />     
                  <div class="blogs">  
                        <?php 
                               require "../php/database_conf.php";     
                              $db_query= $mysql_conn->prepare("select * from activities");
                              $db_query->execute();
                              $db_output = $db_query->get_result();
                              while($row = $db_output->fetch_assoc())
                              {
                        ?>
                              <div class="blog">
                                    <img src="../assets/tourism.jpg" width="10" style="display: inline;"/>
                                    <span>
                                          <form action="../php/book_activity_form.php" method="POST">
                                                <h1 style="display: inline;"><?=$row['activity_name'] ?></h1>
                                                <br />
                                                <br />
                                                <p style="display: inline;"><?=$row['description']?></p>
                                                <br />
                                                <br />
                                                <br />
                                                <span class="date" style="color: green;">￡ <?=$row['price']?></span>
                                                <br />
                                                <br />
                                                <input type="number" placeholder="No. of tickets (1 is selected)" name="no_of_tickets" style="display: inline; width: 60%";/>
                                                <input type="hidden" name="activity_id"  value=<?=$row['activityID']?>/>
                                                &nbsp;
                                                &nbsp;
                                                <button style="display: inline;">Book Now</button>
                                          </form>
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