<?php

$host     = 'localhost;port=8080';
$name     = 'social-media';
$user     = 'root';
$password = '';

try {
    $mysql = new PDO("mysql:host=$host;dbname=$name", $user, $password);
} catch (PDOException $e) {
    echo "SQL ERROR: " . $e->getMessage();
}