<div class="feed">
    <?php
        $post_id = $_GET["post"] ?? "";

        if($post_id != "")
        {
            require('../mysql.php');

            $st = $mysql->prepare("SELECT * FROM posts WHERE POSTID = :id");
            $st->bindParam(":id", $_GET["post"]);
            $st->execute();
            $row = $st->fetch();

            $username = $row['PUSERNAME'];
            $post_text = $row['POSTTEXT'];
            $img_url = $row['IMGURL'];
            $time = $row['PTIME'];
            $date = $row['PDATE'];

            $st = $mysql->prepare("SELECT * FROM accounts WHERE USERNAME = :user");
            $st->bindParam(":user", $username);
            $st->execute();
            $row = $st->fetch();
            $name = $row['NAME'];

            include "post.php";
        } else {
            echo "test";
        }
    ?>
</div>