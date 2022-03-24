<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriEdu as KEdu;

class KategoriEduController extends Controller
{
    public function index()
    {
    	$data = KEdu::where('kode_hapus', 0)
    			->get();
    	return view('back.videoedu.indexKategori', compact('data'));
    }

    public function store(Request $request)
    {
    	// dd($request);
    	$input = KEdu::create([
    		'kategori'			=> $request->kategori,
    		'keterangan'		=> $request->keterangan,
    	])->save();
    	if($input){
    		return redirect('videoedu-kategori')->with('success', 'Berhasil menambahkan data kategori '.$request->kategori);
    	}else{
    		return redirect('videoedu-kategori')->with('error', 'Gagal menambahkan data!');
    	}
    }

    public function delete($id)
    {
    	// dd($id);
    	$data = KEdu::where('id', $id)->first();
    	$delete = KEdu::where('id', $id)->update(['kode_hapus' => 1]);
    	if($delete){
    		return redirect('videoedu-kategori')->with('success', 'Berhasil menghapus data kategori '.$data->kategori);
    	}else{
    		return redirect('videoedu-kategori')->with('error', 'Gagal menghapus data kategori '.$data->kategori);
    	}
    }
}
