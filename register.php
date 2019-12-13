<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <!-- Stylesheets-->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Calistoga|Lato&display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <script src="https://kit.fontawesome.com/3877972586.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- NAV BAR -->
    <?php include(ROOT_PATH . "/app/includes/nav.php"); ?>

    <div class="auth-content">
        <form action="register.php" method="post">
            <h2 class="form-title">Register</h2>

            <!-- <div class="msg success error">
                <li>Username required</li>
            </div> -->
            <div class="form-row">
                <label for="username">Username</label>
                <input type="text" name="username" class="text-input">
            </div>
            <div class="form-row">
                <label for="email">Email</label>
                <input type="email" name="email" class="text-input">
            </div>
            <div class="form-row">
                <label for="username">Password</label>
                <input type="password" name="password" class="text-input">
            </div>
            <div class="form-row">
                <label for="username">Password Confirmation</label>
                <input type="password" name="password-conf" class="text-input">
            </div>
            <div class="form-row">
                <button type="submit" name="register-btn" class="btn btn-big">Register</button>
            </div>
            <p>Or <a href="<?php echo BASE_URL . '/login.php' ?>">Sign In</a></p>
        </form>
    </div>



    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- Custom Script-->
    <script src="assets/js/scripts.js"></script>
</body>

</html>