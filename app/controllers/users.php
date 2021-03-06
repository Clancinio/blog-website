_<?php

    include(ROOT_PATH . "/app/database/db.php");
    include(ROOT_PATH . "/app/helpers/validateUser.php");

    $table = 'users';
    $admin_users = selectAll($table, ["admin" => 1]);

    $errors = array();
    $username = "";
    $email = "";
    $password = "";
    $passwordConf = "";
    $admin = "";
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

    if (isset($_POST["register-btn"]) || isset($_POST["create-admin"])) {

        $errors = validateUser($_POST);

        if (count($errors) == 0) {
            // UNSET FIELD THAT WILL NOT BE CONTAINED IN THE DATABASE
            unset($_POST["register-btn"], $_POST["password-conf"], $_POST["create-admin"]);

            // HASH THE PASSWORD
            $_POST["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);

            if (isset($_POST['admin'])) {
                $_POST["admin"] = 1;
                $user_id = create($table, $_POST);
                $_SESSION['message'] = "Admin user created successfuly";
                $_SESSION['type'] = "success";
                // Redirect user to the dashboard if they are admins
                header("location:" . BASE_URL . "/admin/users/index.php");
                exit();
            } else {
                // CREATE NEW USER FROM THE REGISTRATION FORM
                $user_id = create($table, $_POST);
                $user = selectOne($table, ['id' => $user_id]);
                // Log user in
                loginUser($user);
            }
        } else {

            $username = $_POST['username'];
            $admin = isset($_POST['admin']) ? 1 : 0;
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

if (isset($_GET['delete_id'])){
    $count = delete($table, $_GET['delete_id']);
    // Set message
    $_SESSION['message'] = "Admin user deleted";
    $_SESSION['type'] = "success";
    // Redirect user to the dashboard if they are admins
    header("location:" . BASE_URL . "/admin/users/index.php");
    exit();

}