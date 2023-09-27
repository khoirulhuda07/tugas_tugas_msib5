<?php
//contoh funcion void atau yang tidak mengembalikan nilai 
//dan kita buat sendiri

function salam(){
    echo '<br> selamat pagi teman-teman';

}
salam();

function sapa($kawan){
    echo '<br> selamat pagi' .$kawan;


}
$nama ='deden';
sapa($nama);
sapa('andi');

function kabar($kawan = 'budi'){
    echo '<br> hei apa kabah' .$kawan;
}

kabar();

//fungsi mengecek bilangan prima

function prima($bilangan){
    $prima = true;
    for($a=1; $a < $bilangan; $a++){
        if($bilangan % $a == 0){
            $prima= false;
            break;
        }
    }
    return $prima;
}
if(prima(12)){
echo '<br>bilangan prima';    
}else{
    echo '<br>bukan bilangan prima';
}

?>