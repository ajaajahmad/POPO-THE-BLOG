<!DOCTYPE php>
<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/articles.php"); ?>
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

    <title>Admin Section - Manage Article</title>

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
        <h2 class="page-title">Manage Articles</h2>
        <?php include(ROOT_PATH . "/app/includes/messages.php"); 
        adminOnly();
        ?>
        <table>
          <thead>
            <th>SN</th>
            <th>Title</th>
            <th>Author</th>
            <th colspan="3">Action</th>
          </thead>
          <tbody>
          <?php foreach ($articles as $key => $article): ?>
              <tr>
               <td><?php echo $key + 1; ?></td>
               <td><?php echo $article['title'] ?></td>
               <td>Ajaaj</td>
                <td><a href="edit.php?id=<?php echo $article['id']; ?>" class="edit">Edit</a></td>
                <td><a href="edit.php?delete_id=<?php echo $article['id']; ?>" class="delete">Delete</a></td>

                 <?php if ($article['published']): ?>
                <td><a href="edit.php?published=0&p_id=<?php echo $article['id'] ?>" class="unpublish">Unpublish</a></td>
                <?php else: ?>
                <td><a href="edit.php?published=1&p_id=<?php echo $article['id'] ?>" class="publish">Publish</a></td>
                <?php endif; ?>
                                    
              </tr>
              <?php endforeach; ?>

          </tbody>
        </table>
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
