@extends('admin.layout.appadmin')
@section('content')

<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Harga Beli</th>
                        <th>harga jual</th>
                        <th>stok</th>
                        <th>minimal stok</th>
                        <th>jenis produk</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Harga Beli</th>
                        <th>harga jual</th>
                        <th>stok</th>
                        <th>minimal stok</th>
                        <th>jenis produk</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($produk as $pp)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{$pp->nama_produk}}</td>
                        <td>{{$pp->harga_beli}}</td>
                        <td>{{$pp->harga_jual}}</td>
                        <td>{{$pp->stock}}</td>
                        <td>{{$pp->min_stok}}</td>
                        <td>{{$pp->jenis}}</td>
                      
                    </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection