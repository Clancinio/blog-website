<?php include("../../path.php") ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Section - Add User</title>
    <!-- Stylesheets-->
    <link rel="stylesheet" href="../../assets/css/normalize.css">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link rel="stylesheet" href="../../assets/css/admin_styles.css">
    <!-- Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Calistoga|Lato&display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <script src="https://kit.fontawesome.com/3877972586.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include(ROOT_PATH . "/app/includes/admin_nav.php"); ?>
    <!-- END NAV-->


    <!-- Admin Page Wrapper-->
    <div class="admin-wrapper">
        <!-- Left Side-Bar-->
        <?php include(ROOT_PATH . "/app/includes/admin_sidebar.php") ?>
        <!-- // Left Side-Bar-->

        <!-- Admin Content-->
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add User</a>
                <a href="index.php" class="btn btn-big">Manage Users</a>
            </div>

            <div class="content">
                <h2 class="page-title">Add User</h2>
                <!-- Display messages -->
                <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
                <form action="create.php" method="POST">

                    <div class="form-row">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="text-input" value="<?php echo $username ?>">
                    </div>
                    <div class="form-row">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="text-input" value="<?php echo $email ?>">
                    </div>
                    <div class="form-row">
                        <label for="username">Password</label>
                        <input type="password" name="password" class="text-input" value="<?php echo $password ?>">
                    </div>
                    <div class="form-row">
                        <label for="username">Password Confirmation</label>
                        <input type="password" name="password-conf" class="text-input" value="<?php echo $passwordConf ?>">
                    </div>
                    <div class="form-row">
                        <?php if (isset($admin) && $admin == 1) : ?>
                            <label>
                                <input type="checkbox" name="admin" checked>
                                Admin
                            </label>
                        <?php else : ?>
                            <label>
                                <input type="checkbox" name="admin">
                                Admin
                            </label>
                        <?php endif; ?>
                    </div>
                    <div>
                        <button class="btn btn-big" name="create-admin">Add User</button>
                    </div>
                </form>
            </div>
            <!-- // Admin Content-->

        </div>
        <!-- // End Page Wrapper-->


        <!--JQuery-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

        <!-- CKeditor-->
        <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>

        <!-- Custom Script-->
        <script src="../../js/editor.js"></script>
</body>

</html>