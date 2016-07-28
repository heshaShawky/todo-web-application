<?php

$db = array(
    "host" => "localhost",
    "user" => "root",
    "pass" => "",
    "name" => "todo_app"
);

foreach ($db as $key => $value) {
    define(strtoupper($key), $value);
}

try {

    $connection = new PDO("mysql:host=".HOST.";dbname=".NAME, USER, PASS);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connection->exec("SET NAMES 'utf8'");

} catch (Exception $e) {
    echo "ERORR!: " . $e->getMessage() . "<br />";
    die();
}
