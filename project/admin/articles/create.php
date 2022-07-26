<!DOCTYPE php>
<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/articles.php"); 
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

    <title>Admin Section - Add Article</title>

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
        <a href="create.php" class="btn btn-big">Write Article</a>
        <a href="index.php" class="btn btn-big">Manage Articles</a>

      </div>

      <div class="content">
        <h2 class="page-title">Write Articles</h2>
        
        <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

       <form action="create.php" method="post" enctype="multipart/form-data">
         <div>
           <label>Title</label>
           <input type="text" name="title" value="<?php echo $title ?>" class="text-input">

         </div>
         <div>
           <label>Body</label>
           <textarea name="body" id="body"><?php echo $body ?></textarea>
         </div>
         <div>
           <label>Image</label>
           <input type="file" name="image" class="text-input">
         </div>
         <div>
           <label>Topics</label>
           <select name="topic_id" class="text-input">
           <option value=""></option>
                <?php foreach ($topics as $key => $topic): ?>
                <?php if (!empty($topic_id) && $topic_id == $topic['id'] ): ?>
                <option selected value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                <?php else: ?>
                <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                <?php endif; ?>

                <?php endforeach; ?>
             </select>
         </div>
         <div>
              <?php if (empty($published)): ?>
              <label><input type="checkbox" name="published">Publish</label>
              <?php else: ?>
              <label><input type="checkbox" name="published" checked>Publish</label>
              <?php endif; ?>
                           

         </div>
         <div>
           <button type="submit" name="add-article" class="btn btn-big">Add Article</button>
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
