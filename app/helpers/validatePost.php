<?php 
function validatePost($post)
{

    // FORM VALIDATION
    $errors = array();

    if (empty($post['title'])) {
        array_push($errors, "Title is required");
    }

    if (empty($post['body'])) {
        array_push($errors, "Body is required");
    }

    if (empty($post['topic_id'])) {
        array_push($errors, "Please select a topic");
    }


    // Check if a post already exists in the DB
    $existingPost = selectOne('posts', ['title' => $post['title']]);
    if ($existingPost) {
        array_push($errors, "That title already exists");
    }
    return $errors;
}



?>