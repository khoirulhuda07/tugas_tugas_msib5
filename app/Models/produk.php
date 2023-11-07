<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;

    protected $table = 'produk';
    protected $fillable = ['kode','nama_produk','harga_beli','harga_jual','stock','min_stok','jenis_produk_id'];
    
    //relasi one to many ke table yang berhubung dengan produk
    public function jenis_produk(){
        return $this->belongSto(jenis_produk::class);
    }
    //relasi one to one
    // public function gaji(){
    //     return $this->hasOne(gaji::class);
    // }
}
