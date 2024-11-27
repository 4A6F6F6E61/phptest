<?php

require_once 'Database.php';
require_once 'Model.php';
require_once 'User.php';

class Post extends Model {
    protected static $tableName = 'post';

    public int    $id;
    public int    $user_id;
    public string $content;
    public string $img_url;
    public string $created_at;
    public string $updated_at;
    public string $deleted_at;
    public bool   $nsfw;

    public function user(): User {
        return User::find('id', $this->user_id);
    }
}