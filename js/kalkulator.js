
function tambah() {
    var tmbh = document.getElementById('kalkulator');
    var a1 = parseFloat(tmbh.angka1.value);
    var a2 = parseFloat(tmbh.angka2.value);
    var total = a1 + a2;
    tmbh.hasil.value = total; 

}
function kurang (){
    var tmbh = document.getElementById('kalkulator');
    var a1 = parseFloat(tmbh.angka1.value);
    var a2 = parseFloat(tmbh.angka2.value);
    var total = a1 - a2;
    tmbh.hasil.value = total; 
}

function kali (){
    var tmbh = document.getElementById('kalkulator');
    var a1 = parseFloat(tmbh.angka1.value);
    var a2 = parseFloat(tmbh.angka2.value);
    var total = a1 * a2;
    tmbh.hasil.value = total; 
}
function bagi(){
    var tmbh = document.getElementById('kalkulator');
    var a1 = parseFloat(tmbh.angka1.value);
    var a2 = parseFloat(tmbh.angka2.value);
    var total = a1 / a2;
    tmbh.hasil.value = total; 
}
function pangkat() {
    var tmbh = document.getElementById('kalkulator');
    var a1 = parseFloat(tmbh.angka1.value);
    var a2 = parseFloat(tmbh.angka2.value);
    var total = a1 ** a2;
    tmbh.hasil.value = total; 
}