<?php 
    if(isset($_GET['post'])) {
        $variable = $_SERVER['REQUEST_URI'];
    $variable = substr($variable, 0, strpos($variable, "&"));
    } else
    {
        $variable = $_SESSION['back-url'];
    }
?>

<link rel="stylesheet" href="fullscreen.css">
<a id="x" href="<?php echo $variable?>">
    <i class="bi bi-x-lg" id="x-btn"></i>
</a>
<a>    
<div id="fullscreen">
    <div id="full-img">
        <img src="<?php echo $_GET['full-img-src']?>" alt="ERROR">
    </div>
</div>
</a>

