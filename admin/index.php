<?php

include_once 'top.php';
include_once 'menu.php';
?>
<div>
<div class="container-fluid px-4">
    <?php
    //membuat logic sederhana untuk mengalihkan file yang ber exstension .php
    $url = $_GET['url'];

    if($url == 'dashboard'){
    include_once 'dashboard.php';
    }else if(!empty($url)){
        include_once '' .$url. '.php';
    }else{
        'dashboard.php';
    }
    ?>
</div>
</div>
<?php
include_once 'bottom.php';
?>