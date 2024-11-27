<?php

require_once 'main.php';
require_once 'User.php';

class Auth {
    public static function login(string $username, string $password): void {
        $user = User::find('username', $username);

        if (!$user) {
            header('Location: ?alert=Users%20does%20not%20exist');
            return;
        }
        
        if (password_verify($password, $user->password)) {
            $_SESSION['user_id'] = $user->id;
            header('Location: ');
            return;
        }

        header('Location: ?alert=Wrong%20password');
    }

    public static function register(
        string $username,
        string $email,
        string $name,
        string $password,
        string $verify_password
    ): void {
            $db = DB::conn();

            if (User::find('username', $username))
                header('Location: ?alert=Username%20not%20available');

            if (User::find('email', $email))
                header('Location: ?alert=Email%20already%20in%20use');

            if($password != $verify_password)
                header('Location: ?alert=Password\'s%20don\'t%20match');

            $st = $db->prepare('INSERT INTO User (USERNAME, EMAIL, NAME, PASSWORD) VALUES (:user, :email, :name, :pw)');
            $st->bindParam(':user', $username);
            $st->bindParam(':email', $email);
            $st->bindParam(':name', $name);
            $hash = password_hash($password, PASSWORD_BCRYPT);
            $st->bindParam(':pw', $hash);
            $st->execute();
            header('Location: ?alert=Account%20successfully%20created');
        }

    public static function logout() {
        session_start();
        session_destroy();
        header('Location: ../home/');
    }

    public static function current_user() {
        if (isset($_SESSION['user_id'])) {
            return User::find('id', $_SESSION['user_id']);
        }

        return null;
    }

    public static function check() {
        return isset($_SESSION['user_id']);
    }
}