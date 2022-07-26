<?php

function validateTopic($topic)
{

    $errors = array();


    if (empty($topic['name'])) {
        array_push($errors, 'Name is required');
    }

    
    $existingTopic = selectOne('topics', ['name' => $article['name']]);
    if ($existingTopic) {
        if (isset($article['update-topic']) && $existingTopic['id'] != $article['id']) {
        array_push($errors, 'Topic with that title already exists');
        }
        
        if (isset($article['add-topic'])) {
        array_push($errors, 'Topic with that title already exists');
        }
    }

    return $errors;
}