<div class="modal fade" id="newPostModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" lang="en">New Post</h5>
                <h5 class="modal-title" id="exampleModalLabel" lang="de">Neuen Post erstellen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="index.php" method="post">
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <label for="post-content">
                            <h6 lang="en"> Post text: </h6>
                            <h6 lang="de"> Post text: </h6>
                        </label>
                        <textarea type="text" name="post-content" class="form-control" id="post-content" placeholder="Post..." required rows="6"></textarea>
                    </div>
                    <div class="form-group mb-2">
                        <label for="post-imgurl">
                            <h6 lang="en"> Image Link (optional): </h6>
                            <h6 lang="de"> Bild Link (optional): </h6>
                        </label>
                        <input type="text" name="post-imgurl" class="form-control" id="post-imgurl" placeholder="Image URL...">
                    </div>
                    <div class="form-group">
                        <label for="post-tags">
                            <h6 lang="en"> Tags (optional): </h6>
                            <h6 lang="de"> Tags (optional): </h6>
                        </label>
                        <input type="text" name="post-tags" class="form-control" id="post-tags" placeholder="Tags...">
                    </div>
                    <?php 
                        //require('../mysql.php');
                        $st = $mysql->prepare("SELECT * FROM posts");
                        $st->execute();
                        $id = $st->rowCount();
                        $id++;
                        echo $id;
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" name="post-submit">
                </div>
            </form>
        </div>
    </div>
</div>

<?php
    //require('../mysql.php');
    if(isset($_POST['post-submit']))
    {
        date_default_timezone_set("Europe/Berlin");

        $id = md5(time() . mt_rand(1, 1000000));
        $user = $_SESSION['username'];
        $text = $_POST['post-content'];
        $img  = ($_POST['post-imgurl'] ?? "");
        $tags = ($_POST['post-tags'] ?? "");
        $time = date("h:i a", time());
        $date = date("d. M Y");

        $st3 = $mysql->prepare('INSERT INTO posts (POSTID, PUSERNAME, POSTTEXT, IMGURL, PTIME, PDATE, PTAGS) VALUES (:id, :user, :text, :img, :time, :date, :tags)');
        $st3->bindParam(':id', $id);
        $st3->bindParam(':user', $user);
        $st3->bindParam(':text', $text);
        $st3->bindParam(':img', $img);
        $st3->bindParam(':time', $time);
        $st3->bindParam(':date', $date);
        $st3->bindParam(':tags', $tags);
        $st3->execute();
    }
?>