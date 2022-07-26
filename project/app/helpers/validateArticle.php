<?php


function validateArticle($article)
{
    $errors = array();

    if (empty($article['title'])) {
        array_push($errors, 'Title is required');
    }

    if (empty($article['body'])) {
        array_push($errors, 'Body is required');
    }

    if (empty($article['topic_id'])) {
        array_push($errors, 'Please select a topic');
    }

    $existingArticle = selectOne('articles', ['title' => $article['title']]);
    if ($existingArticle) {
        if (isset($article['update-post']) && $existingArticle['id'] != $article['id']) {
        array_push($errors, 'Article with that title already exists');
        }
        
        if (isset($article['add-article'])) {
        array_push($errors, 'Article with that title already exists');
        }
    }

    return $errors;
}