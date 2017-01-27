@extends('layout')
@section('judul')
Edit Tugas
@endsection
@section('konten')
<form action="{{url('tugas/'.$data->id)}}" method="post">
	<input type="hidden" name="_method" value="PUT">
	{{csrf_field()}}
	<label>Judul</label>
	<input value="{{$data->judul}}" type="text" name="judul" class="form-control">
	<label>Deskripsi</label>
	<input value="{{$data->deskripsi}}" type="text" name="deskripsi" class="form-control">
	<button class="btn btn-info">Simpan Perubahan</button>
</form>
@endsection