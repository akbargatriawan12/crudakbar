<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data['mata_kuliah'] = DB::table('mata_kuliah')->get();
	return view('mata_kuliah.mata_kuliah', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('mata_kuliah.tambah_mata_kuliah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('mata_kuliah')->insert(['nim' => $request->nim, 'nama' => $request->nama, 'semester' => $request->semester, 'kode_mata_kuliah' => $request->kode_mata_kuliah, 'mata_kuliah' => $request->mata_kuliah, 'dosen' => $request->dosen]);
	return redirect('mata_kuliah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['mata_kuliah'] = DB::table('mata_kuliah')->where('id', $id)->first();
	return view('mata_kuliah.edit_mata_kuliah', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('mata_kuliah')->where('id', $id)->update(['nim' => $request->nim, 'nama' => $request->nama, 'semester' => $request->semester, 'kode_mata_kuliah' => $request->kode_mata_kuliah, 'mata_kuliah' => $request->mata_kuliah, 'dosen' => $request->dosen]);
	return redirect('mata_kuliah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('mata_kuliah')->where('id', $id)->delete();
	return redirect('mata_kuliah');
    }
}
