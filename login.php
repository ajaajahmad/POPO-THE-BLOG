<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); 
guestOnly();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ei=edge">
    <!---fontawesome--->
    <script src="https://kit.fontawesome.com/d676f19ec9.js" crossorigin="anonymous"></script>
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora&display=swap" rel="stylesheet">
    <!---styling--->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Login - Online News Portal</title>

  </head>
  <body>

      <!---TODO: INCLUDE HEADER HERE--->
      <?php include(ROOT_PATH . "/app/includes/header.php");?>

<div class="auth-content">
  <form action="login.php" method="post">
    <h2 class="form-title">Login</h2>


    <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>


    <div>
    <i class="fas fa-user"></i><label> Username</label>
      <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">

    </div>

    <div>
    <i class="fas fa-key"></i><label> Password</label>
      <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">

    </div>

    <div>
      <button type="submit" name="login-btn" class="btn btn-big">Login</button>
    
    <p>Or <a href="<?php echo BASE_URL .'/register.php' ?>">Sign Up</a></p>
     </div>
  </form>

</div>


   <!---//Footer--->


    <!---Jquery--->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>

  <!--Custom Script-->
   <script src="assets/js/scripts.js"></script>
   <!---Slick Carousel-->


  </body>

</html>
