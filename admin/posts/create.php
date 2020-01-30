<?php include("../../path.php") ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Section - Add Post</title>
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
                <h2 class="page-title">Create Post</h2>

                <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

                <!--Form -->
                <form action="create.php" method="POST">
                    <div class="form-row">
                        <label for="">Title</label>
                        <input type="text" name="title" value="<?php echo $title ?>" class="text-input">
                    </div>
                    <div class="form-row">
                        <label for="">Body</label>
                        <textarea name="body" id="body"><?php echo $body ?></textarea>
                    </div>
                    <div class="form-row">
                        <label for="">Image</label>
                        <input type="file" name="image" class="text-input">
                    </div>
                    <div class="form-row">
                        <label>Topic</label>
                        <select name="topic_id" id="topic_id" class="text-input">
                            <option value="">Select</option>
                            <?php foreach ($topics as $key => $topic): ?>
                                <?php if (!empty($topic_id) && $topic_id == $topic['id']): ?>
                                    <option selected value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                                <?php else: ?>
                                    <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?> 
                        </select>
                    </div>
                    <div>
                         <label>
                            <input type="checkbox" name="published">
                                Publish
                        </label>
                    </div>
                    <div>
                        <button type="submit" name="add-post" class="btn btn-big">Post</button>
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
        <script src="../../assets/js/editor.js"></script>
</body>

</html>