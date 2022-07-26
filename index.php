<?php include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");

//$articles = selectAll('articles', ['published' => 1]);
$articles = array();
$articlesTitle = 'Top Stories -';

if (isset($_GET['t_id'])) {
  $articles = getArticlesByTopicId($_GET['t_id']);
  $articlesTitle = "You searched for articles under '" . $_GET['name'] . "'";
} else if (isset($_POST['search-term'])) {
  $articlesTitle = "You searched for '" . $_POST['search-term'] . "'";
  $articles = searchArticles($_POST['search-term']);
} else {
  $articles = getPublishedArticles();
}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ei=edge">
    <!---fontawesome--->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora&display=swap" rel="stylesheet">
    <!---styling--->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Online News Portal</title>

  </head>
  <body>
    
      <!---TODO: INCLUDE HEADER HERE--->
      <?php include(ROOT_PATH . "/app/includes/header.php");?>
      <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>


    <!--page wrapper-->
    <div class="page-wrapper">
     <!--post-slider-->
      <div class="post-slider">
        <h1 class="slider-title">- News Updates -</h1>
        <i class="fas fa-chevron-left prev"></i>
        <i class="fas fa-chevron-right next"></i>
        <div class="post-wrapper">
          
         <?php foreach ($articles as $article): ?>
          <div class="post">
            <img src="<?php echo BASE_URL . '/assets/img/' . $article['image']; ?>" alt="" class="slider-image">
            <div class="post-info">
              <h4><a href="single.php?id=<?php echo $article['id'];?>"><?php echo html_entity_decode(substr($article['title'], 0, 55) . '...'); ?></a></h4>
              <i class="far fa-user"> <?php echo $article['username']; ?></i>
              &nbsp;
              <i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($article['created_at'])); ?></i>
            </div>
          </div>
         <?php endforeach; ?>



          

        </div>

      </div>

     <!--//post-slider-->
<!--Content-->
<div class="content clearfix">

  <!--main-content-->


  <div class="main-content">
    <h1 class="recent-post-title"><?php echo $articlesTitle ?></h1>

    <?php foreach ($articles as $article): ?>
    <div class="post clearfix">
      <img src="<?php echo BASE_URL . '/assets/img/' . $article['image']; ?>" alt="" class="post-image">
      <div class="post-preview">
        <h><a href="single.php?id=<?php echo $article['id'];?>"><?php echo html_entity_decode(substr($article['title'], 0, 57) . '.....'); ?></a></h><br>
        &nbsp;
        <i class="far fa-user"> <?php echo $article['username']; ?></i>
        &nbsp;
        <i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($article['created_at'])); ?></i>
        <p class="preview-text">
          <?php echo html_entity_decode(substr($article['body'], 0, 150) . '...'); ?>
        <a href="single.php?id=<?php echo $article['id'];?>" class="btn read-more">Read More</a>
      </div>
    </div>
    <?php endforeach; ?>


  </div>
  <!--// main-content-->
  <div class="sidebar">

  <div class="section search">
    <h2 class="section-title">Search</h2>
    <form action="index.php" method="post">
      <input type="text" name="search-term" class="text-input" placeholder="Search..">

    </form>

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
    <img src="assets/img/ad-4.jpg" alt="Advertisement" class="sides-image">

  </div>
</div>

<!---section-1--->




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
