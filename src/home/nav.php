<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div>
            <a href="#" class="nav_logo">
                <i class='bx bx-layer nav_logo-icon'></i>
                <span class="nav_logo-name">BBBootstrap</span>
            </a>
            <div class="nav_list">
                <a href="./" class="nav_link <?php if($_SERVER['REQUEST_URI'] == "/phptest/src/home/") echo 'active'; ?>">
                    <i class='bx bx-grid-alt nav_icon'></i>
                    <span class="nav_name">Dashboard</span>
                </a>
                <a href="./?account=<?php echo $logged_in_user?>" class="nav_link <?php if(!($_GET['account'] ?? "") == "") echo 'active'; ?>">
                    <i class='bx bx-user nav_icon'></i>
                    <span class="nav_name">Account</span>
                </a>
                <a href="./?settings" class="nav_link <?php if(isset($_GET['settings'])) echo 'active'; ?>">
                    <i class='bi bi-gear nav_icon'></i> <span class="nav_name">Settings</span>
                </a> 
                <a href="#" class="nav_link"> 
                    <i class='bx bx-bookmark nav_icon'></i> 
                    <span class="nav_name">Bookmark</span> 
                </a> 
                <a href="#" class="nav_link"> 
                    <i class='bx bx-folder nav_icon'></i> 
                    <span class="nav_name">Files</span> 
                </a> 
                <a href="#" class="nav_link"> 
                    <i class='bx bx-bar-chart-alt-2 nav_icon'></i> 
                    <span class="nav_name">Stats</span>
                 /a>
            </div>
        </div>
        <a href="../login/logout.php" class="nav_link feio">
            <i class='bx bx-log-out nav_icon'></i>
            <span class="nav_name">SignOut</span>
        </a>
    </nav>
</div>