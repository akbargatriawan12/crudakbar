<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    /* Kelas ini yang diwarisi dari kelas 'Controller' dibuat secara otomatis dari 'php artisan make:controller NamaKelas' di Command Prompt */
	public function buat(){
	// Metode 'buat' di kelas 'AdminController'
		return view('admin.buat');
	}
	public function tampilkanData(){
		$data['admin'] = DB::table('admin')->get();
		return view('admin.admin', $data);
	}
	public function editData($id){
		$data['admin'] = DB::table('admin')->where('id', $id)->first();
		return view('admin.edit', $data);
	}
	public function simpan(Request $request){
		DB::table('admin')->insert(['nim' => $request->nim, 'nama' => $request->nama, 'jurusan' => $request->jurusan, 'angkatan' => $request->angkatan]);
		return redirect('admin');
	}
	public function perbarui(Request $request, $id){
		DB::table('admin')->where('id', $id)->update(['nim' => $request->nim, 'nama' => $request->nama, 'jurusan' => $request->jurusan, 'angkatan' => $request->angkatan]);
		return redirect('admin');
	}
	public function hapusData($id){
		DB::table('admin')->where('id', $id)->delete();
		return redirect('admin');
	}
}
