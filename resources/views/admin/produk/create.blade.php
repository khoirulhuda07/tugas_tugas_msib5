@extends('admin.layout.appadmin')
@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form class="form-horizontal" method="POST" action="{{url('admin/produk/store')}}" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="text" class="control-label col-xs-4">kode</label> 
    <div class="col-xs-8">
      <input id="text" name="kode" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="text1" class="control-label col-xs-4">nama</label> 
    <div class="col-xs-8">
      <input id="text1" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="text2" class="control-label col-xs-4">harga beli</label> 
    <div class="col-xs-8">
      <input id="text2" name="harga_beli" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="text3" class="control-label col-xs-4">harga jual</label> 
    <div class="col-xs-8">
      <input id="text3" name="harga_jual" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="text4" class="control-label col-xs-4">stok</label> 
    <div class="col-xs-8">
      <input id="text4" name="stok" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="text4" class="control-label col-xs-4">min stock</label> 
    <div class="col-xs-8">
      <input id="text4" name="min_stok" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="select" class="control-label col-xs-4">jenis produk</label> 
    <div class="col-xs-8">
      <select id="select" name="jenis_produk_id" class="select form-control">
        @foreach($jenis_produk as $jj)
        <option value="{{$jj->id}}">{{$jj->nama}}</option>
        @endforeach
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="col-xs-offset-4 col-xs-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
@endsection