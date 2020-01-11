<?php include("../../path.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Section - Edit Post</title>
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
                <a href="create.php" class="btn btn-big">Add Post</a>
                <a href="index.php" class="btn btn-big">Manage Posts</a>
            </div>

            <div class="content">
                <h2 class="page-title">Edit Post</h2>

                <form action="create.html" method="POST">
                    <div class="form-row">
                        <label for="">Title</label>
                        <input type="text" name="title" class="text-input">
                    </div>
                    <div class="form-row">
                        <label for="">Body</label>
                        <textarea name="body" id="body"></textarea>
                    </div>
                    <div class="form-row">
                        <label for="">Image</label>
                        <input type="file" name="image" class="text-input">
                    </div>
                    <div class="form-row">
                        <label for="">Topic</label>
                        <select name="topic" class="text-input">
                            <option value="Day Hikes">Day Hikes</option>
                            <option value="Muli-day Hikes">Muli-day Hikes</option>
                            <option value="Snow Shoing">Snow Shoing</option>
                            <option value="Back country camping">Back country camping</option>
                        </select>
                    </div>
                    <div>
                        <button name="edit-post" class="btn btn-big">Update Post</button>
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