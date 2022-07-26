<!DOCTYPE php>
<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); 
adminOnly();
?>
<php lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ei=edge">
    <!---fontawesome--->
    <script src="https://kit.fontawesome.com/d676f19ec9.js" crossorigin="anonymous"></script>
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora&display=swap" rel="stylesheet">
    <!---styling--->
    <link rel="stylesheet" href="../../assets/css/style.css">

    <link rel="stylesheet" href="../../assets/css/admin.css">

    <title>Admin Section - Add User</title>

  </head>
  <body>
  <!--- admin headrer here... --->
<?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

    <!--admin page wrapper-->
    <div class="admin-wrapper">

     <!--LEFT SIDEBAR-->

    <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

     <!--// LEFT SIDEBAR-->

     <!--ADMIN CONTENT-->
     <div class="admin-content">
      <div class="button-group">
        <a href="create.php" class="btn btn-big">Add User</a>
        <a href="index.php" class="btn btn-big">Manage Users</a>

      </div>

      <div class="content">
      <h2 class="page-title">Add User</h2>

<?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

<form action="create.php" method="post">
    <div>
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
    </div>
    <div>
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $email; ?>" class="text-input">
    </div>
    <div>
        <label>Password</label>
        <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
    </div>
    <div>
        <label>Password Confirmation</label>
        <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input">
    </div>
    <div>
        <?php if (isset($admin) && $admin == 1): ?>
            <label>
                <input type="checkbox" name="admin" checked>
                Admin
            </label>
        <?php else: ?>
            <label>
                <input type="checkbox" name="admin">
                Admin
            </label>
        <?php endif; ?>
        
    </div>

    <div>
        <button type="submit" name="create-admin" class="btn btn-big">Add User</button>
    </div>
       </form>

      </div>
      </div>

     <!--// ADMIN CONTENT-->
    </div>
   <!---//admin page wrapper--->


    <!---Jquery--->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>
   <!--CKEditor-->
   <script src="https://cdn.ckeditor.com/ckeditor5/15.0.0/classic/ckeditor.js"></script>
  <!--Custom Script-->
   <script src="../../assets/js/scripts.js"></script>
   <!---Slick Carousel-->


  </body>

</php>
