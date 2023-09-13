let  frm = document.getElementById('online');
let barang = ['TV', 'AC', 'kulkas'];
let pilih = `<option value=""> pilihan produk ---</option>`;
for(let p in barang){
    pilih += `<option value="${barang[p]}">${barang[p]}</option>`;
}
frm.produk.innerHTML = pilih;
function transaksi (){
    let nama = frm.nama.value;
    let produk = frm.produk.value;
    let jumlah = frm.jumlah.value;

    let harga = 0;
    switch(produk){
        case 'TV' : harga = 2000000; break;
        case 'AC' : harga = 3000000; break;
        case 'Kulkas' : harga = 4000000; break;
        default : harga = 0; break;
    }

    var hargaKotor = harga * jumlah;
    var diskon =0;
    if(produk == 'Kulkas' && jumlah >= 3) diskon = 0.3 * hargaKotor;
    else if(produk == 'AC' && jumlah >= 3) diskon = 0.2 * hargaKotor;
    else diskon = hargaKotor * 0.1 ;
    var ppn = ( 0.1 * hargaKotor) - diskon;
    var pp1 = hargaKotor - diskon;
    var ppn = 0.1 * pp1;
    var totHarga = (hargaKotor - diskon) + ppn;

    swal.fire('nama pelanggan = ' +nama);

}