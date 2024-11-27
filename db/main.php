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
    private static $host     = 'localhost';
    private static $port     = '3306';
    private static $name     = 'social-media';
    private static $user     = 'root';
    private static $password = '';

    public static function conn() {
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];
        return new PDO(
            "mysql:host=" . self::$host . ";port=" . self::$port . ";dbname=" . self::$name,
            self::$user,
            self::$password,
            $options
        );
    }
}
?>