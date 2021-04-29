<?php session_start(); session_destroy(); ?>

<!Doctype html>
<html>
      <head>
      <title>Login</title>

      <link rel="stylesheet" href="../css/styles.css">
      <link rel="stylesheet" href="../css/auth.css">

      </head>

      <body>


           <form action="../php/login_form.php" method="post">
                  <h1 class="title">
                        Login
                  </h1>
                <br />
                <?php if($_SESSION['login_error']) { ?>
                  <p style="color: red"> Invalid Credentials</p>
                <?php } ?>
                <input  placeholder="Enter your user name" name="username"></input>
                <input  type="password" placeholder="Enter your Password" name="password"></input>
                <a class="link" href="./register.php">Or Register Now</a>
                <br /><br />
                <button>Login</button>
           </form>

           <img src="../assets/auth.svg" alt="login"/>

      </body>
</html>