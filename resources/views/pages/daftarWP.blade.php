@extends('master')

@section('content')
    <table border="1" style="width:100%;">
        <tr>
            <td>Nama</td>
            <td>Alamat</td>
            <td>Tempat,Tanggal lahir</td>
            <td>Status Perkawinan</td>
            <td>Pekerjaan</td>
            <td>Opsi</td>
        </tr>
    @foreach($daftarWP as $daftar)
        <tr>
            <td>{{$daftar->nama}}</td>
            <td>{{$daftar->alamat}}</td>
            <td>{{$daftar->tempat_lahir}},{{$daftar->tanggal_lahir}}</td>
            <td>{{$daftar->status_perkawinan}}</td>
            <td>{{$daftar->pekerjaan}}</td>
            <td><a href="{{url('/daftar/setuju/'.$daftar->id)}}">Setuju</a> <a href="/proyek2%20PPL/Rumah-Pajak/server.php/tolak/{{$daftar->id}}">Tolak</a></td>
        </tr>
    @endforeach
    </table>
@stop
