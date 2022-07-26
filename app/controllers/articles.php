<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateArticle.php");
include(ROOT_PATH . "/app/helpers/middleware.php");


$table = 'articles';

$topics = selectAll('topics');
$articles = selectAll($table);


$errors = array();
$id = "";
$title = "";
$body = "";
$topic_id = "";
$published = "";

if (isset($_GET['id'])) {
    $article = selectOne($table, ['id' => $_GET['id']]);
    $id = $article['id'];
    $title = $article['title'];
    $body = $article['body'];
    $topic_id = $article['topic_id'];
    $published = $article['published'];
}


if (isset($_GET['delete_id'])) {
    adminOnly();
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = "Article deleted successfully";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/admin/articles/index.php");
    exit();
}

if (isset($_GET['published']) && isset($_GET['p_id'])) {
    adminOnly();
    $published = $_GET['published'];
    $p_id = $_GET['p_id'];
    $count = update($table, $p_id, ['published' => $published]);
    $_SESSION['message'] = "Article published state changed!";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/admin/articles/index.php");
    exit();
}


if (isset($_POST['add-article'])) {
    adminOnly();
    $errors = validateArticle($_POST);

    if (!empty($_FILES['image']['name'])) {
       $image_name = time() . '_' . $_FILES['image']['name'];
       $destination = ROOT_PATH . "/assets/img/" . $image_name;

       $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

       if ($result) {
           $_POST['image'] = $image_name;
       } else {
           array_push($errors, "Failed to upload image");
       }

    } else {
       array_push($errors, "Article image required");
    }
     
    if (count($errors) == 0) {
    unset($_POST['add-article']);
    $_POST['user_id'] = $_SESSION['id'];
    $_POST['published'] = isset($_POST['published']) ? 1 : 0;
    $_POST['body'] = htmlentities($_POST['body']);

    $article_id = create($table, $_POST);
    $_SESSION['message'] = "Article created successfully";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/admin/articles/index.php");
    exit();
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
}


if (isset($_POST['update-article'])) {
    adminOnly();
    $errors = validateArticle($_POST);

    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/assets/img/" . $image_name;
 
        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
 
        if ($result) {
            $_POST['image'] = $image_name;
        } else {
            array_push($errors, "Failed to upload image");
        }
 
     } else {
        array_push($errors, "Article image required");
     }

     if (count($errors) == 0) {
        $id = $_POST['id'];
        unset($_POST['update-article'], $_POST['id']);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['body'] = htmlentities($_POST['body']);
    
        $article_id = update($table, $id, $_POST);
        $_SESSION['message'] = "Article updated successfully";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/admin/articles/index.php");
        //exit();
        } else {
            $title = $_POST['title'];
            $body = $_POST['body'];
            $topic_id = $_POST['topic_id'];
            $published = isset($_POST['published']) ? 1 : 0;
        }
}