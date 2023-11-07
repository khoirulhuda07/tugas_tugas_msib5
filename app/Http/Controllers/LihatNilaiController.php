<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LihatNilaiController extends Controller
{
    //
    public function dataMahasiswa(){
        $mhs1 = 'fawwaz'; $asal1 = 'jakarta';
        $mhs2 ='layla'; $asal2='depok';
        return view('coba.data', compact('mhs1','mhs2','asal1','asal2'));
    }
}
