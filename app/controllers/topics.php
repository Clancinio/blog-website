<?php

include(ROOT_PATH . "/app/database/db.php");

$table = 'topics';

$id = '';
$name = '';
$description = '';

$topics = selectAll($table);

if (isset($_POST["add-topic"])) {
    unset($_POST["add-topic"]);
    $topic_id = create('topics', $_POST);
    $_SESSION['message'] = 'Topic created successfully!';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/topics/index.php');
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $topics = selectOne($table, ['id' => $id]);
    $id = $topics['id'];
    $name = $topics['name'];
    $description = $topics['description'];
}

if (isset($_POST['edit-topic'])) {
    $id = $_POST['id'];
    unset($_POST['edit-topic'], $_POST['id']);
    $topic_id = update($table, $id, $_POST);
    // Display message 
    $_SESSION['message'] = 'Topic updated successfully!';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/topics/index.php');
    exit();
}
