
      <?php 
            session_start();

            if(!$_SESSION['user']){
                  header('Location: ../pages/login.php');
            }
      ?>



      <nav>
            <span class="title" style="color: white">
                  <a href="./../pages/home.php">Tourist</a>
            </span>

            <span class="menu">
            <a href="./activities.php">Explore Activities</a>
            <a href="./booked_activities.php">Bookings</a>
            <a href="./search_activities.php">Search Activities</a>
            <?php if($_SESSION['user']) {?>
                  <a href="../pages/login.php">Logout</a>
            <?php } ?>
            </span>
      </nav>
            