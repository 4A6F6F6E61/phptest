<?php
    $_SESSION['current-page'] = "post";
?>
<div class="nav-2 shadow-sm">
    <a href="<?php echo $_SESSION['back-url']?>"> Back</a>
    <h2>Post</h2>
</div>
<div class="post">
    <div class="user">
        <div class="img">
            <?php echo '<img src="' . $user_img . '" alt="Error" round>';?>
        </div>
        <div class="n">
            <div class="name"><?php echo $name ?></div>
            <div class="username">@<?php echo $username ?></div>
        </div>
    </div>
    <br>
    <div class="content">
        <div class="post-content">
        <?php
            echo $post_text;
                
            if($img_url != "") 
                echo "<a href=\"" . $_SERVER['REQUEST_URI'] . "&full-img-src=" . $img_url . "\"><div class=\"img-2\"><img src=\"" . $img_url . "\" alt=\"Error\"></div></a>";
        ?>
        </div>
    </div>
    <br>
    <div class="info">
        <div class="time">
            <?php echo $time ?>
        </div>
        <div class="date">
            <?php echo $date ?>
        </div>
    </div>
</div>