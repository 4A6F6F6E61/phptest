<div class="feed">
    <?php
        $post_id = $_GET["post"] ?? "";
        
        if($post_id != "") {
            include "post.php";
        } else {
            echo "test";
        }
    ?>
</div>