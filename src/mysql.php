<?php

$host = 'http://35.197.235.105/';
$name = 'social media app';
$user = 'root';
$password = 'J3UsnjXtA2XxYV';

try {
    $mysql = new PDO("mysql:host=$host;dbname=$name", $user, $password);
} catch (PDOException $e) {
    echo "SQL ERROR: " . $e->getMessage();
}