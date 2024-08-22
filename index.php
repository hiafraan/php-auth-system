<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/main.css" />
    <!-- Google Fonts Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>PHP AUTH SYSTEM</title>
  </head>
  <body>
   <main class="container">
   <section class="auth">
    <h3>Login</h3>
    <form action="includes/login.inc.php" method="post" class="login">
      <input type="text" name="username" placeholder="Username" />
      <input type="password" name="pwd" placeholder="Password" />
      <button>Login</button>
    </form>
    </section>

    <section class="auth">
    <h3>Signup</h3>
    <form action="includes/signup.inc.php" method="post" class="signup">
      <?php
        signup_inputs()
      ?>
      <button>Signup</button>
    </form>

    <?php
        check_signup_errors();
     ?>
     </section>
    </main>
  </body>
</html>
