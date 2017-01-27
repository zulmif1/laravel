@extends('layout')
@section('judul')
DetailTugas
@endsection
@section('konten')
<table class="table table-hovered">
	<thead>
		<tr>
			<th>Judul</th>
			<th>Detail</th>
			<th>Tanggal Buat</th>
			<th>Tanggal Update</th>
		</tr>
	</thead>
	<tbody>
		<tr>
		<td>{{$data->judul}}</td>
		<td>{{$data->deskripsi}}</td>
		<td>{{$data->created_at}}</td>
		<td>{{$data->updated_at}}</td>
		</tr>
	</tbody>
</table>
@endsection