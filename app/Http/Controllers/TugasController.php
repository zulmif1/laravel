<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tugas;

class TugasController extends Controller
{
    public function index()
    {
    	// select * from tugas
    	$data=Tugas::all();
    	return view('tugas.daftar_tugas')->with('data', $data);
    }

    public function create()
    {
    	return view('tugas.buat_tugas');
    }

    public function store(Request $request)
    {
    	//insert into
    	Tugas::create($request->all());

    	return redirect('tugas');
    }

    public function show($id)
    {
    	// select * from tugas where id=
    	$data=Tugas::find($id);
    	return view('tugas.detail_tugas')->with('data', $data);
    }

    public function edit($id)
    {
    	// select * from tugas where id=
    	$data=Tugas::find($id);
    	return view('tugas.edit_tugas')->with('data', $data);
    }

    public function update(Request $request, $id)
    {
    	//update tugas set
    	Tugas::find($id)->update($request->all());
    	return redirect('tugas');
    }


    public function destroy($id)
    {
    	//delete
    	Tugas::find($id)->delete($id);
    	return redirect('tugas');
    }
}