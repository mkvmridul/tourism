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
            <div class="main">
                  <center>
                        <form action="./search_activities.php" method="GET">
                              <input type="text" name="search"  placeholder="search any activities here"  style="display: inline;"/>
                              &nbsp;
                              &nbsp;
                              <button style="display: inline;">Find</button>
                        </form>
                  </center>
                  <br />
                  <br />     
                  <div class="blogs">  
                        <?php 

                              if ($_GET['search']) {
                                  require "../php/database_conf.php";
                                  $search_string = $_GET['search'];
                                  $query = "select * from activities where activity_name like '%$search_string%' or description like '%$search_string%'";
                                  if ($result = mysqli_query($mysql_conn, $query)) {
                                      if (mysqli_num_rows($result) > 0) {
                                          while ($row = mysqli_fetch_array($result)) {
                                          ?>
                                                <div class="blog">
                                                      <img src="../assets/activities.svg" width="10" style="display: inline;"/>
                                                      <span>
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
                                                            <input type="number" placeholder="No. of tickets (1 is selected)" style="display: inline; width: 60%";/>
                                                            &nbsp;
                                                            &nbsp;
                                                            <button style="display: inline;">Book Now</button>
                                                      </span>
                                                </div>
                                                <br />
                                                <br />
                                                <br />
                        <?php
                                          }
                                      }
                                  }
                              }
                        ?>
                  </div>
            </div>
      </body>
</html>