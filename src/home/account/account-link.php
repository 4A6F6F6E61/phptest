<a href="?account=<?php echo $_SESSION['user_id']?>" class="link_nav
<?php
    if(!($_GET['account'] ?? "") == "")
        echo 'active-nav disabled'; 
?>">
    <i class='bx bx-user nav_icon'></i>
    <span class="nav_name">Account</span>
</a>