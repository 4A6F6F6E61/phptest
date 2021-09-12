<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php include "form.html"?>
    <br>
    <?php
        $firstname = $_GET["firstname"] ?? "";
        $age = $_GET["age"] ?? "";
        if($firstname != "" && $age != "")
            echo "name: " . $firstname . "<br> Age: " .  $age;
    ?>
</body>
</html>