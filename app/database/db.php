<?php

require("connect.php");

function displayData($values) // to be deleted
{
    echo "<pre>";
    print_r($values);
    echo "</pre>";
    die();
}

function selectAll($table) // selects all records from a specified table
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
