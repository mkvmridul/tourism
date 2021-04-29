<!Doctype html>
<html>
      <head>
      <title>Register</title>

      <link rel="stylesheet" href="../css/styles.css">
      <link rel="stylesheet" href="../css/auth.css">

      </head>

      <body>


           <form action="../php/signup_form.php" method="POST">
                  <h1 class="title">
                        Register
                  </h1>
                <br />
                <input  placeholder="create your user name" name="username" type="text"></input>
                <input  placeholder="Create your Password"  name="password_hash" type="password"></input>
                <input  placeholder="Your First Name" name="customer_forename" type="text" required></input>
                <input  placeholder="Last Name" name="customer_surname" type="text" required></input>
                <input  placeholder="Date Of birth" name="date_of_birth" type="date" required></input>
                <input  placeholder="Your Address line 1" name="customer_address1" type="text" required></input>
                <input  placeholder="Your Address line 2" name="customer_address2" type="text"></input>
                <input  placeholder="Your Postal Code" name="customer_postcode" type="text" required></input>
                <a class="link" href="./login.php">Or Login Now</a>
                <br /><br />
                <br /><br />
                <button>Register</button>
           </form>

           <img src="../assets/register.svg" alt="login"/>

      </body>
</html>