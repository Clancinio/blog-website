<?php include("../../path.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Section - Manage Posts</title>
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
                <h2 class="page-title">Manage Posts</h2>

                <table>
                    <thead>
                        <th>SN</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>This is the first post</td>
                            <td>Deano</td>
                            <td><a href="" class="edit">edit</a></td>
                            <td><a href="" class="delete">delete</a></td>
                            <td><a href="" class="publish">publish</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>This is the second post</td>
                            <td>ShannaBanna</td>
                            <td><a href="" class="edit">edit</a></td>
                            <td><a href="" class="delete">delete</a></td>
                            <td><a href="" class="publish">publish</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- // Admin Content-->

    </div>
    <!-- // End Page Wrapper-->


    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- Custom Script-->
    <script src="../../js/scripts.js"></script>
</body>

</html>