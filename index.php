<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        Name: <input type="text" name="firstname">
        <br>
        Age: <input type="text" name="age">
        <br>
        <input type="submit" >
    </form>
    <br>
    <?php
        echo $_GET["firstname"] . "<br>" .  $_GET["age"];
    ?>
</body>
</html>