@extends('layout')
@section('judul')
Daftar Tugas
@endsection
@section('konten')
<table class="table table-hovered">
	<thead>
		<tr>
			<th>Judul</th>
			<th>Detail</th>
			<th>Edit</th>
			<th>Hapus</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data as $a): ?>
			<tr>
				<td>{{$a->judul}}</td>
				<td><a href="{{url('tugas/'.$a->id)}}" class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span></a></td>
				<td><a href="{{url('tugas/'.$a->id.'/edit')}}" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></a></td>
				<td>
					<form method="post" action="{{url('tugas/'.$a->id)}}">
						{{csrf_field()}}
						<input type="hidden" name="_method" value="DELETE">
						<button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
					</form>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>
@endsection