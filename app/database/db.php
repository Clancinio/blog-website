<?php

require("connect.php");

function displayData($values) // to be deleted
{
    echo "<pre>";
    print_r($values);
    echo "</pre>";
    die();
}

function executeQuery($sql, $data)
{
    global $conn;
    $statement = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    $statement->bind_param($types, ...$values);
    $statement->execute();
    return $statement;
}

function selectAll($table, $conditions = []) // selects all records from a specified table
{
    global  $conn;
    $sql = "SELECT * FROM $table";
    if (empty($conditions)) {
        $statement = $conn->prepare($sql);
        $statement->execute();
        $records = $statement->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    } else {
        // return records that match conditions
        //$sql = "SELECT * FROM $table WHERE username = 'Dean' AND admin = 1";

        $i = 0;
        foreach ($conditions as $key => $value) {
            if ($i == 0) {
                $sql = $sql . " WHERE $key = ?";
            } else {
                $sql = $sql . " AND $key = ?";
            }
            $i++;
        }

        $statement = executeQuery($sql, $conditions);
        $records = $statement->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
}

function selectOne($table, $conditions) // selects all records from a specified table
{
    global  $conn;
    $sql = "SELECT * FROM $table";

    $i = 0;
    foreach ($conditions as $key => $value) {
        if ($i == 0) {
            $sql = $sql . " WHERE $key = ?";
        } else {
            $sql = $sql . " AND $key = ?";
        }
        $i++;
    }

    $sql = $sql . " LIMIT 1";
    $statement = executeQuery($sql, $conditions);
    $records = $statement->get_result()->fetch_assoc();
    return $records;
}


$conditions = [
    'admin' => 1,
    'username' => 'beano'
];

$users = selectOne('users', $conditions);
displayData($users);
