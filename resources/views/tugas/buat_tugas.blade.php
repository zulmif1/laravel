@extends('layout')
@section('judul')
Input Tugas
@endsection
@section('konten')
<form action="{{url('tugas')}}" method="post">
	{{csrf_field()}}
	<label>Judul</label>
	<input type="text" name="judul" class="form-control">
	<label>Deskripsi</label>
	<input type="text" name="deskripsi" class="form-control">
	<button class="btn btn-success">Simpan</button>
</form>
@endsection