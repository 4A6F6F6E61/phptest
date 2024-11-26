<div class="container card border p-2" onclick="window.location.assign('?post=<?php echo $post_id?>')">
    <div class="d-flex card-content">
        <a href="./?account=<?=$username?>">
            <img src="<?= htmlspecialchars($user_img) ?>" alt="User Image" class="rounded-circle me-3" style="width: 50px; height: 50px; object-fit: cover;">
        </a>
        <div class="">
            <a class="d-flex align-items-center" href="./?account=<?=$username?>">
                <h5 class="card-title mb-0"><?= htmlspecialchars($name) ?></h5>
                <span class="text-muted text-small"><?= "@" . htmlspecialchars($username) ?></span>
                
                <?php if ($nsfw): ?>
                    <span class="nsfw-tag text-small">nsfw</span>
                <?php endif; ?>
            </a>
            <!-- Post Content -->
            <p class="card-text"><?= nl2br(htmlspecialchars($post_text)) ?></p>

            <!-- Attached Image -->
            <?php if (!empty($img_url)): ?>
                <div class="mt-3">
                    <img src="<?= htmlspecialchars($img_url) ?>" alt="Post Image" class="img-fluid rounded">
                </div>
            <?php endif; ?>

            <!-- Time and Date -->
            <div class="text-muted mt-3">
                <small>Posted on <?= htmlspecialchars($date) ?> at <?= htmlspecialchars($time) ?></small>
            </div>
        </div>
    </div>
</div>