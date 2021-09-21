<div class="post user" onclick="window.location.assign('?post=<?php echo $post_id?>')">
    <div class="img">
        <?php echo '<img src="' . $user_img . '" alt="Error" round>';?>
    </div>
    <div class="n">
        <div class="b">
            <div class="name-2"><?php echo $name ?> </div>
            <div class="username-2">@<?php echo $username ?></div>
            <div class="date-2"><?php echo $date ?></div>
        </div>
        <div class="post-content-2">
            <?php
                echo $post_text;

                if($img_url != "")
                    echo "<div class=\"img-2\"><img src=\"" . $img_url . "\" alt=\"Error\" class=\"limit-img\"></div>";
            ?>
        </div>
    </div>
</div>
