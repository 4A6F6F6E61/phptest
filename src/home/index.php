<?php
require_once '../../db/main.php';
require_once '../../db/Auth.php';
require_once '../../db/User.php';
session_start();

if(isset($_SESSION['user_id']))
{
    $logged_in_user_img = User::find('id', $_SESSION['user_id'])->user_img;
}
if(isset($_SESSION['current-page']))
    $_SESSION['current-page'] = 'home';

if(isset($_POST['login-submit']))
{
    Auth::login($_POST['login-username'], $_POST['login-password']);
}
if(isset($_POST['register-submit']))
{
    Auth::register(
        $_POST['register-username'],
        $_POST['register-email'],
        $_POST['register-name'],
        $_POST['register-password'],
        $_POST['register-password2']
    );
}

if(isset($_GET['alert'])) echo $_GET['alert'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel="stylesheet" href="side-root.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css" integrity="sha512-xnP2tOaCJnzp2d2IqKFcxuOiVCbuessxM6wuiolT9eeEJCyy0Vhcwa4zQvdrZNVqlqaxXhHqsSV1Ww7T2jSCUQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="./main.css">
        <link rel="stylesheet" href="./sidebar.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <script>
            var lang = navigator.language || navigator.userLanguage
            console.log(lang)
            if (lang == "en_US")
                document.getElementsByTagName("html")[0].lang = "en"
            else if (lang == "de")
                document.getElementsByTagName("html")[0].lang = "de"
                
        </script>
        
    </head>
    <body id="body-pd">
        
    <?php
        include 'new-post.php';
        include '../login/login-register.php';

        if(isset($_GET['full-img-src']))
        {
            include 'fullscreen.php';
        }
    ?>
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <?php 
            if(isset($_SESSION['user_id']) && $logged_in_user_img)
                echo "<div class=\"header_img\"><img src=\"$logged_in_user_img\" alt=\"\"></div>";
            else if (isset($_SESSION['user_id']))
                echo "<div class=\"header_img\"><img src=\"../img/default-user.png\" alt=\"\"></div>";
            else
                echo '<button
                        type="button"
                        class="btn btn-primary"
                        data-mdb-toggle="modal"
                        data-mdb-target="#exampleModal"
                      >
                        Login
                      </button>';
        ?>
    </header>
    <?php
        include 'nav.php'
    ?>
    <!--Container Main start-->
    <div class="main">
        <?php 
                include "feed.php";
        ?>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", event => {

            const showNavbar = (toggleId, navId, bodyId, headerId) => {
                const toggle = document.getElementById(toggleId),
                nav = document.getElementById(navId),
                bodypd = document.getElementById(bodyId),
                headerpd = document.getElementById(headerId)

                // Validate that all variables exist
                if(toggle && nav && bodypd && headerpd){
                    toggle.addEventListener('click', ()=>{
                    // show navbar
                    nav.classList.toggle('show-2')
                    // change icon
                    toggle.classList.toggle('bx-x')
                    // add padding to body
                    bodypd.classList.toggle('body-pd')
                    // add padding to header
                    headerpd.classList.toggle('body-pd')
                    })
                }
            }

            showNavbar('header-toggle','nav-bar','body-pd','header')     

            // Your code to run since DOM is loaded and ready
            var myModal = document.getElementById('newPostModal')
            var myInput = document.getElementById('myInput')

            myModal.addEventListener('shown.bs.modal', function () {
                myInput.focus()
            })
        });
    </script>
    <!-- MDB -->
    <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
    ></script>
    </body>
</html>
