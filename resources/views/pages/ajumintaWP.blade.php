@extends('master')

@section('content')
	<h4>Pengajuan Permintaan Baru untuk NPWP {{$npwp}}</h4>
	{!! Form::open() !!}
	<div class="form-group">
		{!! Form::hidden('NPWP_peminta', $npwp) !!}
	</div>
	<div class="form-group">
		{!! Form::label('kategori_permintaan','Kategori Permintaan:') !!}
		{!! Form::select('kategori_permintaan', ['Pencabutan WP' => 'Pencabutan WP','Keberatan Pajak' => 'Keberatan Pajak'], null, array('class' => 'form-control')) !!}
	</div>
	<div class="form-group">
		{!! Form::label('detil_permintaan','Detil Permintaan :') !!}
		{!! Form::textarea('detil_permintaan',null,['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Ajukan Permintaan',['class' => 'btn btn-primary fomr-control']) !!}
	</div>
	{!! Form::close() !!}
@stop