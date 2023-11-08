@extends('admin.layout.appadmin')
@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form class="form-horizontal" method="POST" action="{{url('admin/pelanggan/store')}}" enctype="multipart/form-data">
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
    <label for="radio" class="control-label col-xs-4">jenis kelamin</label> 
    <div class="col-xs-8">
        @foreach($gender as $ge)
      <label class="radio-inline">
        <input type="radio" name="jk" value="{{$ge}}">
              {{$ge}}
      </label>
      @endforeach
    </div>
  </div>
  <div class="form-group">
    <label for="text2" class="control-label col-xs-4">tempat lahir</label> 
    <div class="col-xs-8">
      <input id="text2" name="tmp_lahir" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="text3" class="control-label col-xs-4">tanggal lahir</label> 
    <div class="col-xs-8">
      <input id="text3" name="tgl_lahir" type="date" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="text4" class="control-label col-xs-4">email</label> 
    <div class="col-xs-8">
      <input id="text4" name="email" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="select" class="control-label col-xs-4">kartu</label> 
    <div class="col-xs-8">
      <select id="select" name="kartu_id" class="select form-control">
        @foreach($kartu as $a)
        <option value="{{$a->id}}">{{$a->nama_kartu}}</option>
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