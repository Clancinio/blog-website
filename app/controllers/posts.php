<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validatePost.php");

$table = 'posts';

// Query the posts table to populate the manage posts table
$posts = selectAll($table);
$topics = selectAll('topics');

// Array to hold any errors
$errors = array();

$title = "";
$body = "";
$topic_id = "";
$published = "";

// Recive id parameter from URL
if (isset($_GET["id"])) {
    $post = selectOne($table, ['id' => $_GET["id"]]);

    $id = $post['id'];
    $title = $post['title'];
    $body = $post['body'];
    $topic_id = $post['topic_id'];
    $published = $post['published'];
}

// Recive delete_id parameter from URL
if (isset($_GET["delete_id"])) {
    $count = delete($table, $_GET["delete_id"]);
    // Set some messages
    $_SESSION['message'] = "Post deleted succesfully";
    $_SESSION['type'] = "success";
    header('location: ' . BASE_URL . '/admin/posts/index.php');
    exit();
}

if (isset($_POST["add-post"])) {
    $errors = validatePost($_POST);

    //displayData($_FILES['image']['name']);

    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . "_" . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/assets/images/" . $image_name;

        // Move file to destination
        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if ($result) {
            $_POST['image'] = $image_name;
        } else {
            array_push($errors, "Failed to upload image");
        }
    } else {
        array_push($errors, "Please select an image");
    }

    // Count errors - if none then create post
    if (count($errors) == 0) {
        unset($_POST['add-post']);
        $_POST["user_id"] = 1;
        $_POST["published"] = isset($_POST['published']) ? 1 : 0;
        // Remove the html tags 
        $_POST['body'] = htmlentities($_POST['body']);

        $post_id = create($table, $_POST);
        // Set some messages
        $_SESSION['message'] = "Post created succesfully";
        $_SESSION['type'] = "success";
        header('location: ' . BASE_URL . '/admin/posts/index.php');
    } else {
        // These variables are used to keep the form filled out
        // so the user doesn't have to re-type
        $title = $_POST['title'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
}

if (isset($_POST['update-post'])) {
    $errors = validatePost($_POST);

    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . "_" . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/assets/images/" . $image_name;

        // Move file to destination
        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if ($result) {
            $_POST['image'] = $image_name;
        } else {
            array_push($errors, "Failed to upload image");
        }
    } else {
        array_push($errors, "Please select an image");
    }

    // Count errors - if none then update post
    if (count($errors) == 0) {
        $id = $_POST['id'];
        unset($_POST['update-post'], $_POST['id']);
        $_POST["user_id"] = 1;
        $_POST["published"] = isset($_POST['published']) ? 1 : 0;
        // Remove the html tags 
        $_POST['body'] = htmlentities($_POST['body']);

        $post_id = update($table, $id, $_POST);
        // Set some messages
        $_SESSION['message'] = "Post updated succesfully";
        $_SESSION['type'] = "success";
        header('location: ' . BASE_URL . '/admin/posts/index.php');
        exit();
    } else {
        // These variables are used to keep the form filled out
        // so the user doesn't have to re-type
        $title = $_POST['title'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
}
