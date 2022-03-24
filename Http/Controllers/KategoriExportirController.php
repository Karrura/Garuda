<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriExportir as KExp;

class KategoriExportirController extends Controller
{
    public function index()
    {
    	$data = KExp::where('kode_hapus', 0)
    			->get();
    	return view('back.exportir.indexKategori', compact('data'));
    }

    public function store(Request $request)
    {
    	// dd($request);
    	$input = KExp::create([
    		'kategori'			=> $request->kategori,
    		'keterangan'		=> $request->keterangan,
    	])->save();
    	if($input){
    		return redirect('exportir-kategori')->with('success', 'Berhasil menambahkan data kategori '.$request->kategori);
    	}else{
    		return redirect('exportir-kategori')->with('error', 'Gagal menambahkan data!');
    	}
    }

    public function delete($id)
    {
    	// dd($id);
    	$data = KExp::where('id', $id)->first();
    	$delete = KExp::where('id', $id)->update(['kode_hapus' => 1]);
    	if($delete){
    		return redirect('exportir-kategori')->with('success', 'Berhasil menghapus data kategori '.$data->kategori);
    	}else{
    		return redirect('exportir-kategori')->with('error', 'Gagal menghapus data kategori '.$data->kategori);
    	}
    }
}
