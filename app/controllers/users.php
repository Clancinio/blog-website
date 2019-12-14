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

        displayData($user);
    } else {

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['password-conf'];
    }
}
