<?php

require("connect.php");

function displayData($values) // to be deleted
{
    echo "<pre>";
    print_r($values);
    echo "</pre>";
    die();
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

        $statement = $conn->prepare($sql);
        $values = array_values($conditions);
        $types = str_repeat('s', count($value));
        $statement->bind_param($types, ...$values);
        $statement->execute();
        $records = $statement->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
}

$conditions = [
    //key     value
    'admin' => 1,
    'username' => 'beano'
];

$users = selectAll('users', $conditions);
displayData($users);
