<?php

$host = 'localhost';
$name = 'social media app';
$user = 'root';
$password = 'ejYrkGnzPqZM';

try {
    $mysql = new PDO("mysql:host=$host;dbname=$name", $user, $password);
} catch (PDOException $e) {
    echo "SQL ERROR: " . $e->getMessage();
}