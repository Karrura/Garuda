<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Models\ArtikelPerizinan as AP;

class ArtikelPerizinanController extends Controller
{
    public function index()
    {
    	$data = \DB::table('a_perizinan as a')
    	->join('k_perizinan as k', 'k.id', '=', 'a.id_k_perizinan')
        ->select('k.kategori', 'k.id as id_k_perizinan', 'a.judul', 'a.id', 'a.deskripsi', 'a.gambar')
    	->where('a.kode_hapus', 0)->where('k.kode_hapus', 0)
    	->get();

    	// $kategori = \DB::table('k_perizinan')->where('kode_hapus', 0)->get();
        // dd($data);
    	return view('back.perizinan.index', compact('data'));
    }

    public function create()
    {	
    	$kategori = \DB::table('k_perizinan')->where('kode_hapus', 0)->get();
    	return view('back.perizinan.create', compact('kategori'));
    }

    public function store(Request $request)
    {
    	$namafile = null;
    	if($request->file('foto')){
    		$pict = $request->foto;
            $namafile = time().rand(100, 99).".".$pict->getClientOriginalName();
            $request->foto->move(public_path('backend/perizinan'), $namafile);
    	}
    	// dd($namafile);
    	$input = AP::create([
    		'id_k_perizinan'	=> $request->id_k_perizinan,
    		'judul'				=> $request->judul,    		
    		'gambar'			=> $namafile,
    		'deskripsi'			=> $request->deskripsi,
    	])->save();
    	if($input){
    		return redirect('perizinan-artikel')->with('success', 'Berhasil menambahkan data artikel '.$request->judul);
    	}else{
    		return redirect('perizinan-artikel')->with('error', 'Gagal menambahkan data!');
    	}	
    }

    public function delete($id)
    {
    	$data = \DB::table('a_perizinan')->where('id', $id)->first();
    	$delete = AP::where('id', $id)->update(['kode_hapus' => 1]);
    	if($delete){
    		return redirect('perizinan-artikel')->with('success', 'Berhasil menghapus data artikel '.$data->judul);
    	}else{
    		return redirect('perizinan-artikel')->with('error', 'Gagal menghapus data!');
    	}	
    }
}
