<?php

$host     = 'localhost';
$port     = '3306';
$name     = 'social-media';
$user     = 'root';
$password = '';

try {
    $mysql = new PDO("mysql:host=$host;port=$port;dbname=$name", $user, $password);
} catch (PDOException $e) {
    echo "SQL ERROR: " . $e->getMessage();
}
class DB {
    private static $host = "localhost";
    private static $dbname = "your_database_name";
    private static $username = "your_username";
    private static $password = "your_password";

    public static function conn() {
        $host     = 'localhost';
        $port     = '3306';
        $name     = 'social-media';
        $user     = 'root';
        $password = '';
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];
        return new PDO("mysql:host=$host;port=$port;dbname=$name", $user, $password, $options);
    }
}
?>