@extends('admin.layout.appadmin')
@section('content')

<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{url('admin/pelanggan/create')}}" class="btn btn-primary">tambah <i class="fas fa-plus"></i></a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>jenis kelamin</th>
                        <th>tempat lahir</th>
                        <th>tanggal lahir</th>
                        <th>email</th>
                        <th>kartu id</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>jenis kelamin</th>
                        <th>tempat lahir</th>
                        <th>tanggal lahir</th>
                        <th>email</th>
                        <th>kartu id</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($pelanggan as $pn)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{$pn->nama}}</td>
                        <td>{{$pn->jk}}</td>
                        <td>{{$pn->tmp_lahir}}</td>
                        <td>{{$pn->tgl_lahir}}</td>
                        <td>{{$pn->email}}</td>
                        <td>{{$pn->kartu->nama_kartu}}</td>
                      
                    </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection