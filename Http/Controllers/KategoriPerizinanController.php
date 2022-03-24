<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriPerizinan as KPer;

class KategoriPerizinanController extends Controller
{
    public function index()
    {
    	$data = KPer::where('kode_hapus', 0)
    			->get();
    	return view('back.perizinan.indexKategori', compact('data'));
    }

    public function store(Request $request)
    {
    	// dd($request);
    	$input = KPer::create([
    		'kategori'			=> $request->kategori,
    		'keterangan'		=> $request->keterangan,
    	])->save();
    	if($input){
    		return redirect('perizinan-kategori')->with('success', 'Berhasil menambahkan data kategori '.$request->kategori);
    	}else{
    		return redirect('perizinan-kategori')->with('error', 'Gagal menambahkan data!');
    	}
    }

    public function delete($id)
    {
    	// dd($id);
    	$data = KPer::where('id', $id)->first();
    	$delete = KPer::where('id', $id)->update(['kode_hapus' => 1]);
    	if($delete){
    		return redirect('perizinan-kategori')->with('success', 'Berhasil menghapus data kategori '.$data->kategori);
    	}else{
    		return redirect('perizinan-kategori')->with('error', 'Gagal menghapus data kategori '.$data->kategori);
    	}
    }
}
