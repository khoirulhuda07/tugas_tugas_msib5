<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//pemanggilan model didalam controler
use App\Models\jenis_produk;

class jenisprodukcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //sintax menggunakan eloquent (ORM)
        $jenis_produk = jenis_produk::all();
        return view ('admin.jenis.index', compact('jenis_produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
