<?php

require_once 'main.php';
require_once 'Model.php';

class User extends Model {
    protected static $tableName = 'user';

    public int     $id;
    public string  $username;
    public ?string $user_img;
    public string  $password;
    public string  $name;
    public string  $email;
    public ?string $bio;
    public string  $created_at;
    public string  $updated_at;
    public ?string $deleted_at;
}