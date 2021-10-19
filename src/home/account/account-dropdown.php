<a
    class="name-2 dropdown-toggle"
    data-mdb-toggle="dropdown"
    aria-expanded="false"
    >
    <?php echo $name ?>
</a>
<ul class="dropdown-menu dd shadow">
    <div class="c-dropdown">
        <div class="dd-img">
            <img src="<?php echo $user_img ?> " alt="Error" round>
        </div>
        <div class="dd-name">
            <?php echo $name ?>
        </div>
        <div class="dd-username">
            <?php echo "@" . $username ?>
        </div>
        <hr class="dropdown-divider three"></hr>
        
    </div>
    <div class="three dd-info">
        <?php echo $bio ?>
    </div>
</ul> 