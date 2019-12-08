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
    <?php include("app/includes/nav.php"); ?>

    <div class="auth-content">
        <form action="login.html" method="post">
            <h2 class="form-title">Login</h2>

            <div class="form-row">
                <label for="username">Username</label>
                <input type="text" name="username" class="text-input">
            </div>
            <div class="form-row">
                <label for="username">Password</label>
                <input type="password" name="password" class="text-input">
            </div>

            <div class="form-row">
                <button type="submit" name="login-btn" class="btn btn-big">Login</button>
            </div>
            <p>Or <a href="register.html">Register</a></p>
        </form>
    </div>



    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- Custom Script-->
    <script src="assets/js/scripts.js"></script>
</body>

</html>