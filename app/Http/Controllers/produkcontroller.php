<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
use App\Models\jenis_produk;
use Illuminate\Support\Facades\DB;

class produkcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //produk berelasi dengan jenis produk
        $produk = produk::join('jenis_produk','jenis_produk_id','=','jenis_produk.id')
        ->select('produk.*','jenis_produk.nama as jenis')
        ->get();
        return view('admin.produk.index',compact('produk'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //mengunakan query builder
        $jenis_produk = DB::table('jenis_produk')->get();
        return view('admin.produk.create', compact('jenis_produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        DB::table('produk')->insert([
            'kode'=>$request->kode,
            'nama_produk'=>$request->nama,
            'harga_beli'=>$request->harga_beli,
            'harga_jual'=>$request->harga_jual,
            'stock'=>$request->stok,
            'min_stok'=>$request->min_stok,
            'jenis_produk_id'=>$request->jenis_produk_id,
        ]);
        return redirect('admin/produk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
