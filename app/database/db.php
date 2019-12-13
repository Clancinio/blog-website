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

function create($table, $data)
{
    global $conn;
    // $sql = "INSERT INTO users SET username = ?, admin = ?, email = ?, password = ?";
    $sql = "INSERT INTO $table SET";

    $i = 0;
    foreach ($data as $key => $value) {
        if ($i == 0) {
            $sql = $sql . " $key = ?";
        } else {
            $sql = $sql . ", $key = ?";
        }
        $i++;
    }
    $statement = executeQuery($sql, $data);
    $id = $statement->insert_id;
    return $id;
}

function update($table, $id, $data)
{
    global $conn;
    // $sql = "UPDATE users SET username = ?, admin = ?, email = ?, password = ? WHERE id = ?";
    $sql = "UPDATE $table SET";

    $i = 0;
    foreach ($data as $key => $value) {
        if ($i == 0) {
            $sql = $sql . " $key = ?";
        } else {
            $sql = $sql . ", $key = ?";
        }
        $i++;
    }

    $sql = $sql . " WHERE id = ?";
    $data['id'] = $id; // adds another key pair to the data array
    $statement = executeQuery($sql, $data);
    return $statement->affected_rows;
}

function delete($table, $id)
{
    global $conn;
    // $sql = "DELETE FROM usere WHERE id = ?";
    $sql = "DELETE FROM $table WHERE id = ?";

    $statement = executeQuery($sql, ['id' => $id]);
    return $statement->affected_rows;
}
