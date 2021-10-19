<div class="post user">
    <div class="img">
        <a href="./?account=<?php echo $username?>">
            <img src="<?php echo $user_img ?> " alt="Error" round>
        </a>
    </div>
    <div class="n">
        <div class="b">
            <div class="btn-group shadow-0 dropend">
                <?php include "./account/account-dropdown.php" ?>
            </div> 
            <div class="username-2">@<a href="./?account=<?php echo $username?>" class="username-2"><?php echo $username ?></a></div>
            <div class="date-2"><?php echo $date ?></div>
            <?php 
                if($nsfw) echo "<div class=\"nsfw-tag\">nsfw</div>"
            ?>
        </div> 
        <div class="post-content-2" onclick="window.location.assign('?post=<?php echo $post_id?>')">
            <?php
                echo $post_text;
                if(isset($_GET['settings']) || isset($_GET['account']) || isset($_GET['post'])) 
                {
                    if($img_url != "")
                        echo "<a href=\"&full-img-src=" . $img_url . "\"><div class=\"img-2\"><img src=\"" . $img_url . "\" alt=\"Error\" class=\"limit-img\"></div></a>";
                } else
                {
                    if($img_url != "")
                        echo "<a href=\"./?full-img-src=" . $img_url . "\"><div class=\"img-2\"><img src=\"" . $img_url . "\" alt=\"Error\" class=\"limit-img\"></div></a>";
                }
                
            ?>
        </div>
    </div>
</div>
