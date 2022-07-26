<?php include("path.php"); ?>
<?php include(ROOT_PATH . '/app/controllers/articles.php'); 

if (isset($_GET['id'])) {
  $article = selectOne('articles', ['id' => $_GET['id']]);
  
}
$topics = selectAll('topics');
$articles = selectAll('articles', ['published' => 1]);

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

    <title><?php echo $article['title']; ?> - Online News Portal</title>

  </head>
  <body>
          <!---TODO: INCLUDE HEADER HERE--->
          <?php include(ROOT_PATH. "/app/includes/header.php");?>
    <!--page wrapper-->
    <div class="page-wrapper">

<!--Content-->
<div class="content clearfix">

  <!--main-content-->


  <div class="main-content">

    <!--MAIN CONTENT-->
<div class="main-content single">
<!--<img src="assets/img/3.jpg" alt="" class="posts-image">-->
  <h class="post-title"><?php echo $article['title']; ?></h>
  <div class="post-content">
   <?php echo html_entity_decode($article['body']); ?>
    </div>
</div>



    <!--MAIN CONTENT-->


  </div>
  <!--// main-content-->

  <!--SIDEBAR-->
  <div class="sidebar single">

    <div class="section popular">
     <h3 class="section-title">Related News</h3>

      <?php foreach ($articles as $a): ?>
      <div class="post clearfix">
        <img src="<?php echo BASE_URL . '/assets/img/' . $a['image']; ?>" alt="">
        <a href="" class="title"><h4><?php echo $a['title'] ?> </h4>
        </a>
    </div>
<?php endforeach; ?>
    </div>
  <div class="section topics">
    <h2 class="section-title">Topics</h2>
    <ul>
    <?php foreach ($topics as $key => $topic): ?>
      <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>
    <?php endforeach; ?>
    </ul>
  </div>
  <div class="section topics">
    <h2 class="section-title">Advertisement</h2>
    <img src="assets/img/ad-4.jpg" alt="Advertisement" class="section-image">

  </div>
</div>



<!--//Content-->



    </div>

    <!--//page wrapper-->

   <!---TODO: Include Footer--->

   <?php include(ROOT_PATH. "/app/includes/footer.php");?>




   <!---//Footer--->


    <!---Jquery--->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>

  <!--Custom Script-->
   <script src="assets/js/scripts.js"></script>
   <!---Slick Carousel-->
   <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  </body>

</html>
