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
                    <div class="form-outline mb-3">
                        <textarea type="text" name="post-content" class="form-control" id="post-content" required rows="6"></textarea>
                        <label class="form-label" for="post-content">
                            <p lang="en"> Post text: </p>
                            <p lang="de"> Post text: </p>
                        </label>
                    </div>
                    <div class="form-outline mb-3">
                        <input type="text" name="post-imgurl" class="form-control" id="post-imgurl">
                        <label class="form-label" for="post-imgurl">
                            <p lang="en"> Image Link (optional): </p>
                            <p lang="de"> Bild Link (optional): </p>
                        </label>
                    </div>
                    <!-- Tags -->
                    <div class="form-outline">
                        <input type="text" name="post-tags" class="form-control" id="post-tags">
                        <label class="form-label" for="post-tags">
                            <p lang="en"> Tags (optional): </p>
                            <p lang="de"> Tags (optional): </p>
                        </label>
                    </div>
                    <!-- NSFW checkbox -->
                    <div class="form-check mt-3">
                        <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id="flexCheckDefault"
                            name="post-nsfw"
                        >
                        <label class="form-check-label" for="flexCheckDefault">
                            nsfw
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
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
        $user = $_SESSION['user_id'];
        $text = $_POST['post-content'];
        $img  = ($_POST['post-imgurl'] ?? "");
        $tags = ($_POST['post-tags'] ?? "");
        $time = date("h:i a", time());
        $date = date("d. M Y");
        if(isset($_POST['post-nsfw']))
            $post_nsfw = 1;
        else
            $post_nsfw = 0;

        $st3 = $mysql->prepare('INSERT INTO posts (POSTID, PUSERNAME, POSTTEXT, IMGURL, PTIME, PDATE, PTAGS, NSFW) VALUES (:id, :user, :text, :img, :time, :date, :tags, :nsfw)');
        $st3->bindParam(':id', $id);
        $st3->bindParam(':user', $user);
        $st3->bindParam(':text', $text);
        $st3->bindParam(':img', $img);
        $st3->bindParam(':time', $time);
        $st3->bindParam(':date', $date);
        $st3->bindParam(':tags', $tags);
        $st3->bindParam(':nsfw', $post_nsfw);
        $st3->execute();
    }
?>