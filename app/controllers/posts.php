<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validatePost.php");

$table = 'posts';

// Query the topics table to populate the topics dropdown
$topics = selectAll('topics');
// Query the posts table to populate the manage posts table
$posts = selectAll($table);

$errors = array();

if (isset($_POST["add-post"])) {
    unset($_POST["add-post"], $_POST['topic_id']);
    $_POST["user_id"] = 1;
    $_POST["published"] = 1;

    $post_id = create($table, $_POST);
    header('location: ' . BASE_URL . '/admin/posts/index.php');
}
