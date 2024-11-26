<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
    rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script>
        var lang = navigator.language || navigator.userLanguage
        console.log(lang)
        if (lang == "en_US")
            document.getElementsByTagName("html")[0].lang = "en"
        else if (lang == "de")
            document.getElementsByTagName("html")[0].lang = "de"
    </script>
    <!--<link rel="stylesheet" href="index.css">-->
</head>
<body>
    <?php
        require('../db/main.php');
        $login = $_GET['login'] ?? false;

        include 'login/login-register.php';
/*
        if(!$login)
            include "login/register.php";
        else
            include "login/login.php";
        $username = $_POST['username'] ?? "";
        $password = $_POST['password'] ?? "";
        
        if ($username === "admin" && $password === "test")
            include "home/index.php";
        else if ($username != "" && $password != "") {
            include "login.php";
            echo "<script>alert(\"Wrong Password!\")</script>";
        } else include "login.php";*/
    ?>
    <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
    ></script>
</body>
</html>