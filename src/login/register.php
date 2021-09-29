<?php 
    if(isset($_POST['submit-reg']))
    {
        //require('./mysql.php');
        $st = $mysql->prepare("SELECT * FROM accounts WHERE USERNAME = :user");
        $st->bindParam(":user", $_POST['username-reg']);
        $st->execute();
        $count = $st->rowCount();

        if($count == 0)
        {
            if(isset($_POST['username-reg']) && $_POST['password-reg'] == $_POST['password-reg-2'])
            {
                $st = $mysql->prepare('INSERT INTO accounts (USERNAME, PASSWORD) VALUES (:user, :pw)');
                $st->bindParam(':user', $_POST['username-reg']);
                $hash = password_hash($_POST['password-reg'], PASSWORD_BCRYPT);
                $st->bindParam(':pw', $hash);
                $st->execute();
                echo "Account successfully created";
            } else {
                echo "Password's don't match";
            }
        } else
            echo "Username not available";
    }
?>

<div class="reg-log">
    <form action="index.php?login=0" method="post" id="register">
        <div class="form-group srnm">
            <label for="username-reg">
                <h4 lang="en"> Username </h4>
                <h4 lang="de"> Benutzername </h4>
            </label>
            <input type="text" name="username-reg" class="form-control" id="username-reg" placeholder="Username" required>
        </div>
        <div class="form-group srnm">
            <label for="password-reg">
                <h4 lang="en"> Password </h4>
                <h4 lang="de"> Passwort </h4>
            </label>
            <input type="password" name="password-reg" class="form-control" id="password-reg" placeholder="Password" required>
        </div>
        <div class="form-group">
            <label for="password-reg-2">
                <h4 lang="en"> Repeat password </h4>
                <h4 lang="de"> Passwort wiederholen </h4>
            </label>
            <input type="password" name="password-reg-2" class="form-control" id="password-reg" placeholder="Repeat password" required>
        </div>
        <br>
        <div class="space-between">
            <input type="submit" class="btn btn-primary" name="submit-reg">
            <a class="btn btn-light" href="?login=1">Login</a>
        </div>
    </form>
</div>