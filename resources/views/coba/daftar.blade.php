@php

$no = 1;
$s1 = ['nama' => 'fawwaz', 'niali'=>75];
$s2 = ['nama' => 'avi', 'niali'=>70];
$s3 = ['nama' => 'anam', 'niali'=>80];
$s4 = ['nama' => 'was', 'niali'=>90];
$s5 = ['nama' => 'hud', 'niali'=>60];

$siswa = [$s1,$s2,$s3,$s4,$s5];
$judul = ['no', 'nama','nilai','keterangan'];
@endphp

<table border="1" align="center" cellpading="10">
    <thead>
        <tr>
            @foreach($judul as $jdl)
                <th>{{$jdl}}</th>
                @endforeach
        </tr>
    </thead>
    <tbody>
    <tr>
        @foreach($siswa as $s)
        @php
        $ket = ($s['niali'] >= 60) ? 'lulus' : 'gagal';
        @endphp
    <td>{{$no++}}</td>
    <td>{{$s['nama']}}</td>
    <td>{{$s['niali']}}</td>
    <td>{{$ket}}</td>
        </tr>
        @endforeach
    </tbody>
</table>