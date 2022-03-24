<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelExportir as AE;

class ArtikelExportirController extends Controller
{
    public function index()
    {
    	$data = \DB::table('a_exportir as a')
    	->join('k_exportir as k', 'k.id', '=', 'a.id_k_exportir')
        ->select('k.kategori', 'k.id as id_k_exportir', 'a.judul', 'a.id', 'a.deskripsi', 'a.gambar')
    	->where('a.kode_hapus', 0)->where('k.kode_hapus', 0)
    	->get();

    	return view('back.exportir.index', compact('data'));
    }

    public function create()
    {	
    	$kategori = \DB::table('k_exportir')->where('kode_hapus', 0)->get();
    	return view('back.exportir.create', compact('kategori'));
    }

    public function store(Request $request)
    {
    	$namafile = null;
    	if($request->file('foto')){
    		$pict = $request->foto;
            $namafile = time().rand(100, 99).".".$pict->getClientOriginalName();
            $request->foto->move(public_path('backend/exportir'), $namafile);
    	}
    	// dd($namafile);
    	$input = AE::create([
    		'id_k_exportir'	=> $request->id_k_exportir,
    		'judul'				=> $request->judul,    		
    		'gambar'			=> $namafile,
    		'deskripsi'			=> $request->deskripsi,
    	])->save();
    	if($input){
    		return redirect('exportir-artikel')->with('success', 'Berhasil menambahkan data artikel '.$request->judul);
    	}else{
    		return redirect('exportir-artikel')->with('error', 'Gagal menambahkan data!');
    	}	
    }

    public function delete($id)
    {
    	$data = \DB::table('a_exportir')->where('id', $id)->first();
    	$delete = AE::where('id', $id)->update(['kode_hapus' => 1]);
    	if($delete){
    		return redirect('exportir-artikel')->with('success', 'Berhasil menghapus data artikel '.$data->judul);
    	}else{
    		return redirect('exportir-artikel')->with('error', 'Gagal menghapus data!');
    	}	
    }
    
}
