<?php

function validateUser($user)
{

    // FORM VALIDATION
    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, "Username is required");
    }

    if (empty($user['email'])) {
        array_push($errors, "Email is required");
    }

    if (empty($user['password'])) {
        array_push($errors, "Password is required");
    }

    if ($user['password-conf'] !== $user['password']) {
        array_push($errors, "Passwords do not match");
    }

    // Check if user already exists in the DB
    $existingUser = selectOne('users', ['email' => $user['email']]);
    if (isset($existingUser)) {
        array_push($errors, "Email already exists");
    }
    return $errors;
}

function validateLogin($user)
{

    // FORM VALIDATION
    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, "Username is required");
    }

    if (empty($user['password'])) {
        array_push($errors, "Password is required");
    }

    return $errors;
}
