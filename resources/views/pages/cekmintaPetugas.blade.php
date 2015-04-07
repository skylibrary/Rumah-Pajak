@extends('master')

@section('header')
    <h1>Rumah-Pajak</h1>
    <h3>Home    Pengajuan   Contact</h3>
@stop

@section('content')
    <table border="1" style="width:100%;">
        <tr>
            <td>NPWP Peminta</td>
            <td>Kategori Permintaan</td>
            <td>Detil Permintaan</td>
            <td>Status Permintaan</td>
            <td>Opsi</td>
        </tr>
    @foreach($daftarminta as $minta)
        <tr>
            <td>{{$minta->NPWP_peminta}}</td>
            <td>{{$minta->kategori_permintaan}}</td>
            <td>{{$minta->detil_permintaan}}</td>
            <td>{{$minta->status_permintaan}}</td>
            <td>
				@if ($minta->status_permintaan=='Pending')
                <a href="{{ url('minta/setuju',$minta->id) }}">Setuju</a>
				<a href="{{ url('minta/tolak',$minta->id) }}">Tolak</a>
                    @else
                -
                    @endif
			</td>
        </tr>
    @endforeach
    </table>
@stop