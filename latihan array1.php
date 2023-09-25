<?php
//contoh array 1 dimensi
$ar_buah = ['pepaya','mangga','pisang','jambu'];

//cetak data dengan luping foreach
foreach($ar_buah as $id =>$buah){
    echo '<br>key array buah : ' .$id;
}

foreach($ar_buah as $data){
    echo '<br> data buah :' .$data;
}

foreach($ar_buah as $id => $buah){
    echo '<br> buah dengan id:' .$id. 'adalah buah : ' .$buah;
}
?>