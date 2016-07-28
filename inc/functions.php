<?php

function get_all_posts() {
    global $connection;

    try {
        $results = $connection->query(
            "SELECT *
            FROM tasks
            ORDER BY id ASC
        ");

    } catch (Exception $e) {
        echo "ERORR!: " . $e->getMessage() . "<br />";
        die();
    }

    return $results->fetchAll(PDO::FETCH_ASSOC);
}

function get_single_post($id) {
    global $connection;
    try {
        $results = $connection->prepare(
            "SELECT *
            FROM tasks
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

function delete_single_post($id) {
    global $connection;

    try {
        $results = $connection->prepare(
            "DELETE FROM tasks
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
