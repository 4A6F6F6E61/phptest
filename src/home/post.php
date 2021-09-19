<div class="post user">
    <div class="img">
        <img src="https://pbs.twimg.com/profile_images/1415717225135284224/DCDFXLZV_normal.jpg" alt="Error" round>
    </div>
    <div class="n">
        <div class="b">
            <div class="name-2"><?php echo $name ?> </div>
            <div class="username-2">@<?php echo $username ?></div>
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