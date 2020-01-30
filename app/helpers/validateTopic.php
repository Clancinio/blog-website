<?php

function validateTopic($topic)
{

    // FORM VALIDATION
    $errors = array();

    if (empty($topic['name'])) {
        array_push($errors, "Name is required");
    }

    // Check if topic already exists in the DB
    $existingTopic = selectOne('topics', ['name' => $topic['name']]);
    if ($existingTopic) {
        array_push($errors, "Topic already exists");
    }
    return $errors;
}
