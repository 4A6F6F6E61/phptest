<?php
/*
$host = '127.0.0.1';
$name = 'phptest';
$user = 'root';
$password = 'ejYrkGnz1';
*/
$host = 'remotemysql.com';
$name = 'WTtfKp6ijf';
$user = 'WTtfKp6ijf';
$password = 'dYTYNFiwu4';

try {
    $mysql = new PDO("mysql:host=$host;dbname=$name", $user, $password);
} catch (PDOException $e) {
    echo "SQL ERROR: " . $e->getMessage();
}