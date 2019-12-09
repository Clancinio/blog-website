<?php

require("connect.php");

function displayData($values)
{
    echo "<pre>";
    print_r($values);
    echo "</pre>";
    die();
}

function selectAll($table)
{
    global  $conn;
    $sql = "SELECT * FROM $table";
    $statement = $conn->prepare($sql);
    $statement->execute();
    $records = $statement->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}

$users = selectAll('users');
displayData($users);
