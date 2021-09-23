<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div>
            <a href="#" class="nav_logo">
                <i class='bi bi-cpu nav_logo-icon'></i>
                <span class="nav_logo-name">Social Media</span>
            </a>
            <div class="nav_list">
                <a href="./" class="nav_link
                <?php
                    if($_SERVER['REQUEST_URI'] == "/phptest/src/home/")
                        echo 'active disabled';
                ?>">
                    <i class='bx bx-grid-alt nav_icon'></i>
                    <span class="nav_name">Posts</span>
                </a>
                <a href="./?account=<?php echo $_SESSION['username']?>" class="nav_link
                <?php
                    if(!($_GET['account'] ?? "") == "")
                        echo 'active disabled'; 
                ?>">
                    <i class='bx bx-user nav_icon'></i>
                    <span class="nav_name">Account</span>
                </a>
                <a href="./?settings" class="nav_link
                <?php
                    if(isset($_GET['settings']))
                        echo 'active disabled';
                ?>">
                    <i class='bi bi-gear nav_icon'></i> <span class="nav_name">Settings</span>
                </a> 
                <a data-bs-toggle="modal" data-bs-target="#newPostModal" class="nav_link" href="">
                    <i class='bi bi-plus-lg nav_icon'></i>
                    <span class="nav_name">New Post</span>
                </a>
            </div>
        </div>
        <a href="../login/logout.php" class="nav_link feio">
            <i class='bx bx-log-out nav_icon'></i>
            <span class="nav_name">Sign Out</span>
        </a>
    </nav>
</div>