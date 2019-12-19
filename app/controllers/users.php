<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateUser.php");

$errors = array();
$username = "";
$email = "";
$password = "";
$passwordConf = "";
$table = 'users';

function loginUser($user)
{
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = 'Welcome! You are now logged in.';
    $_SESSION['type'] = 'success';

    if ($_SESSION['admin']) {
        // Redirect user to the dashboard if they are admins
        header("location:" . BASE_URL . "/admin/dashboard.php");
    } else {
        // Redirect user to the index.php page
        header("location:" . BASE_URL . "/index.php");
    }
    exit();
}

if (isset($_POST["register-btn"])) {

    $errors = validateUser($_POST);

    if (count($errors) == 0) {
        // UNSET FIELD THAT WILL NOT BE CONTAINED IN THE DATABASE
        unset($_POST["register-btn"], $_POST["password-conf"]);
        $_POST["admin"] = 0;

        // HASH THE PASSWORD
        $_POST["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);

        // CREATE NEW USER FROM THE REGISTRATION FORM
        $user_id = create($table, $_POST);
        $user = selectOne($table, ['id' => $user_id]);

        // Log user in
        loginUser($user);
    } else {

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['password-conf'];
    }
}

if (isset($_POST["login-btn"])) {
    $errors = validateLogin($_POST);

    if (count($errors) == 0) {
        $user = selectOne($table, ['username' => $_POST['username']]);

        if ($user && password_verify($_POST['password'], $user['password'])) {
            // Log user in
            loginUser($user);
        } else {
            array_push($errors, "Wrong credentials");
        }
    }

    $username = $_POST['username'];
    $password = $_POST['password'];
}
