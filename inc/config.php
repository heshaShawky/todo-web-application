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
