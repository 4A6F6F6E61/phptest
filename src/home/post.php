<div class="nav">
        <a href="./"> Back</a>
        <h2>Post</h2>
    </div>
    <div class="post">
        <div class="user">
            <div class="img">
                <img src="https://pbs.twimg.com/profile_images/1415717225135284224/DCDFXLZV_normal.jpg" alt="Error">
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
                    echo "<img src=\"" . $img_url . "\" alt=\"Error\">";
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