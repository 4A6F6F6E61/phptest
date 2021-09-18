<?php 
    if(isset($_POST['submit']))
    {
        require('./mysql.php');
        $st = $mysql->prepare("SELECT * FROM accounts WHERE USERNAME = :user");
        $st->bindParam(":user", $_POST['username']);
        $st->execute();
        $count = $st->rowCount();

        if($count == 1)
        {
            $row = $st->fetch();
            if(password_verify($_POST['password'], $row['PASSWORD']))
            {
                session_start();
                $_SESSION['username'] = $row['USERNAME'];
                header('Location: home');
                exit;
            } else {
                echo "Wrong password";
            }
        } else {
            echo "User does not exist";
        }
    }
?>


<div class="reg-log">
    <form action="index.php?login=1" method="post" id="login">
        <div class="form-group srnm">
            <label for="username">
                <h4 lang="en"> Username </h4>
                <h4 lang="de"> Benutzername </h4>
            </label>
            <input type="text" name="username" class="form-control" id="username" placeholder="Username" required>
        </div>
        <div class="form-group">
            <label for="password">
                <h4 lang="en"> Password </h4>
                <h4 lang="de"> Passwort </h4>
            </label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
        </div>
        <br>
        <input type="submit" class="btn btn-primary" name="submit">
        <a class="btn btn-secondary" href="?login=0">Register</a>
    </form>
</div>