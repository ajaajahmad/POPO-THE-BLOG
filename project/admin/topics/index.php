<!DOCTYPE php>
<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/topics.php"); 
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

    <title>Admin Section - Manage Topics</title>

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
        <a href="create.php" class="btn btn-big">Add Topics</a>
        <a href="index.php" class="btn btn-big">Manage Topics</a>

      </div>

      <div class="content">
        <h2 class="page-title">Manage Topics</h2>

        <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

        <table>
          <thead>
            <th>SN</th>
            <th>Name</th>
            <th colspan="2">Action</th>
          </thead>
          <tbody>
          <?php foreach ($topics as $key => $topic): ?>
            <tr>
                                    <td><?php echo $key + 1; ?></td>
                                    <td><?php echo $topic['name']; ?></td>
                                    <td><a href="edit.php?id=<?php echo $topic['id']; ?>" class="edit">Edit</a></td>
                                    <td><a href="index.php?del_id=<?php echo $topic['id']; ?>" class="delete">Delete</a></td>
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
