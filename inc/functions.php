<?php

function get_all_sub($table_name) {
    global $connection;

    try {
        $results = $connection->query(
            "SELECT *
            FROM {$table_name}
            ORDER BY id ASC
        ");

    } catch (Exception $e) {
        echo "ERORR!: " . $e->getMessage() . "<br />";
        die();
    }

    return $results->fetchAll(PDO::FETCH_ASSOC);
}

function get_single_sub($table_name, $id) {
    global $connection;
    try {
        $results = $connection->prepare(
            "SELECT *
            FROM {$table_name}
            WHERE id = ?"
        );
        $results->bindParam(1, $id);
        $results->execute();
    } catch (Exception $e) {
        echo "ERORR!: " . $e->getMessage() . "<br />";
        die();
    }

    return $results->fetch(PDO::FETCH_ASSOC);
}

function delete_single_sub($table_name, $id) {
    global $connection;

    try {
        $results = $connection->prepare(
            "DELETE FROM {$table_name}
            WHERE id = ?"
        );

        $results->bindParam(1, $id);
        $results->execute();

    } catch (Exception $e) {
        echo "ERORR!: " . $e->getMessage() . "<br />";
        die();
    }

    return $results;
}
