<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/topics.php"); 
adminOnly();
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
    <link rel="stylesheet" href="../../assets/css/style.css">

    <link rel="stylesheet" href="../../assets/css/admin.css">

    <title>Admin Section - Add Topics</title>

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
        <a href="create.php" class="btn btn-big">Add Topic</a>
        <a href="index.php" class="btn btn-big">Manage Topics</a>

      </div>

      <div class="content">
        <h2 class="page-title">Add Topic</h2>
        <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
        
       <form action="create.php" method="post">
         <div>
           <label>Name</label>
           <input type="text" name="name" value="<?php echo $name ?>" class="text-input">
         </div>
         <div>
           <label>Discription</label>
           <textarea name="description" id="body"><?php echo $description ?></textarea>
         </div>

         <div>
           <button type="submit" name="add-topic" class="btn btn-big">Add Topic</button>
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

</html>
