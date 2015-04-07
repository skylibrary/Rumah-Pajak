@extends('master')


@section('content')
	@if (count($daftarminta))
		<h4>Daftar Permintaan NPWP {{ $npwp }}</h4>
		<h5><a href="{{ url('minta/add',$npwp) }}">Tambah Baru</a></h5>
		<table border="1" style="width:100%;">
			<tr>
				<td>NPWP Peminta</td>
				<td>Kategori Permintaan</td>
				<td>Detil Permintaan</td>
				<td>Status Permintaan</td>
			</tr>
		@foreach($daftarminta as $minta)
			<tr>
				<td>{{$minta->NPWP_peminta}}</td>
				<td>{{$minta->kategori_permintaan}}</td>
				<td>{{$minta->detil_permintaan}}</td>
				<td>{{$minta->status_permintaan}}</td>
			</tr>
		@endforeach
	@else
		<h4>Tidak ada Permintaan dari NPWP {{ $npwp }}</h4>
		<h5><a href="{{ url('minta/add',$npwp) }}">Tambah Baru</a></h5>
	@endif
    </table>
@stop