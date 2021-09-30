<div class="l-navbar" id="nav-bar">
    <nav class="nav-idk">
        <div>
            <a href="#" class="nav_logo">
                <i class='bi bi-cpu nav_logo-icon'></i>
                <span class="nav_logo-name">Social Media</span>
            </a>
            <div class="nav_list">
                <a href="./" class="link_nav
                <?php
                    if($_SERVER['REQUEST_URI'] == "/phptest/src/home/")
                        echo 'active-nav disabled';
                ?>">
                    <i class='bx bx-grid-alt nav_icon'></i>
                    <span class="nav_name">Posts</span>
                </a>
                <?php
                    if(isset($_SESSION['username']))
                        include "account/account-link.php";
                ?>
                <a href="./?settings" class="link_nav
                <?php
                    if(isset($_GET['settings']))
                        echo 'active-nav disabled';
                ?>">
                    <i class='bi bi-gear nav_icon'></i> <span class="nav_name">Settings</span>
                </a> 
                <?php 
                    if(isset($_SESSION['username']))
                        include "new-post-link.php"
                ?>
            </div>
        </div>
        <a href="../login/logout.php" class="link_nav feio">
            <i class='bx bx-log-out nav_icon'></i>
            <span class="nav_name">Sign Out</span>
        </a>
    </nav>
</div>