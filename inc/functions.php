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

function create_user($username, $password, $email) {
    global $connection;

    try {
        $results = $connection->prepare(
            "INSERT INTO users (name, password, email)
            VALUES (?, ?, ?)"
        );
        $results->bindParam(1, $username);
        $results->bindParam(2, $password);
        $results->bindParam(3, $email);
        $results ->execute();

    } catch (Exception $e) {
        echo "ERORR!: " . $e->getMessage() . "<br />";
        die();
    }

    return $results;
}

function user_login ($email, $password) {
    global $connection;

    try {
        $results = $connection->prepare(
            "SELECT *
            FROM users
            WHERE email = ? AND password = ?"
        );
        $results->bindParam(1, $email);
        $results->bindParam(2, $password);
        $results->execute();

    } catch (Exception $e) {
        echo "ERORR!: " . $e->getMessage() . "<br />";
    }

    return $results->fetch(PDO::FETCH_ASSOC);
}

function create_board ($title, $user_id) {
    global $connection;

    try {
        $results = $connection->prepare(
            "INSERT INTO boards (title, user_id) VALUES (?, ?)"
        );
        $results->bindParam(1, $title);
        $results->bindParam(2, $user_id);
        $results->execute();

    } catch (Exception $e) {
        echo "ERORR!: " . $e->getMessage() . "<br />";
        die();
    }

    return $results;
}

function read_boards($user_id) {
    global $connection;

    try {
        $results = $connection->prepare(
            "SELECT *
            FROM boards
            WHERE user_id = ?"
        );
        $results->bindParam(1, $user_id);
        $results->execute();
    } catch (Exception $e) {
        echo "ERORR!: " . $e->getMessage() . "<br />";
        die();
    }

    return $results->fetchAll(PDO::FETCH_ASSOC);
}

function create_list($title, $board_id) {
    global $connection;

    try {
        $results = $connection->prepare(
            "INSERT INTO todos_lists (title, board_id)
            VALUES (?, ?)"
        );
        $results->bindParam(1, $title);
        $results->bindParam(2, $board_id);
        $results->execute();
    } catch (Exception $e) {
        echo "ERORR!: " . $e->getMessage() . "<br />";
        die();
    }

    return $results;
}

function read_lists($board_id) {
    global $connection;

    try {
        $results = $connection->prepare(
            "SELECT *
            FROM todos_lists
            WHERE board_id = ?"
        );
        $results->bindParam(1, $board_id);
        $results->execute();
    } catch (Exception $e) {
        echo "ERORR!: " . $e->getMessage() . "<br />";
        die();
    }

    return $results->fetchAll(PDO::FETCH_ASSOC);
}
