<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateUser.php");

$errors = array();
$username = "";
$email = "";
$password = "";
$passwordConf = "";

if (isset($_POST["register-btn"])) {

    $errors = validateUser($_POST);

    if (count($errors) == 0) {
        // UNSET FIELD THAT WILL NOT BE CONTAINED IN THE DATABASE
        unset($_POST["register-btn"], $_POST["password-conf"]);
        $_POST["admin"] = 0;

        // HASH THE PASSWORD
        $_POST["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);

        // CREATE NEW USER FROM THE REGISTRATION FORM
        $user_id = create('users', $_POST);
        $user = selectOne('users', ['id' => $user_id]);

        // Log user in
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['admin'] = $user['admin'];
        $_SESSION['id'] = $user['id'];
        $_SESSION['id'] = $user['id'];
        $_SESSION['message'] = "Welcome! You are now logged in.";
        $_SESSION['type'] = "succes";
        // Redirect user to the index.php page
        header("location:" . BASE_URL . "/index.php");
        exit();
    } else {

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['password-conf'];
    }
}
