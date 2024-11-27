<?php
include_once '../../db/User.php';

$_SESSION['current-page'] = "account";

$users = User::all();

$user = $users[0];


?>
<div class="p-2">
    <h1 class="text-center">Account</h1>
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 100%;">
            <img src="<?= $user->user_img ?>" class="card-img-top" alt="User Image">
            <div class="card-body">
                <h5 class="card-title"><?= $user->username ?></h5>
                <p class="card-text"><?= $user->bio ?></p>
                <a href="index.php?page=edit-account" class="btn btn-primary">Edit Account</a>
            </div>
        </div>
    </div>
</div>