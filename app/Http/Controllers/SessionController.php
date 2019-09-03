<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    // menampilkan isi session
	public function tampilkanSession(Request $request) {
		if($request->session()->has('kode')){
			echo $request->session()->get('kode');
		}else{
			echo 'Tidak ada data dalam session.';
		}
	}

	// membuat session
	public function buatSession(Request $request) {
		$str = Str::random(10);
		$request->session()->put('kode', $str);
		echo "Data telah ditambahkan ke session.";
	}

	// menghapus session
	public function hapusSession(Request $request) {
		$request->session()->forget('kode');
		echo "Data telah dihapus dari session.";
	}
}
