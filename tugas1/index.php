<?php
include_once 'top.php';
include_once 'menu.php';

?>
<?php

$url = $_GET['url'];
if($url == 'dashboard'){
    include_once 'dashboard.php';
}elseif($url== 'Data'){
    include_once 'data.php';
}elseif($url == 'contact'){
    include_once 'contact.php';
}elseif($url == 'About'){
    include_once 'About.php';
}elseif($url == 'Sig-In'){
    include_once 'signIn.php';
}else{
    include_once 'dashboard.php';
}

?>


<?php
include_once 'button.php';
?>
