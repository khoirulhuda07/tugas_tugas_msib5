<?php
$str = 'belajar php di kampus merdeka';

echo $str;

$str = strtoupper($str);
echo '<br>' .$str;
$str = strtolower($str);
echo '<br>' .$str;



$buah = ['pepaya','mangga','apel','jambu','pisang'];
//untuk mengurutkan sesuai abjad

sort($buah);
foreach($buah as $b){
    echo '<br>' .$b;
}

echo '<hr>';

arsort($buah);
foreach($buah as $a){
    echo '<br>' .$a;
}
?>