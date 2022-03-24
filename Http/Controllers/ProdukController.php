<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
    	$data = Produk::join('marketplace as m', 'produk.id_marketplace', '=', 'm.id')
    			->select('produk.id', 'produk.id_marketplace', 'produk.produk', 'produk.harga', 'produk.keterangan', 'produk.foto', 'm.id as marketplace_id', 'm.marketplace', 'm.telp')
    			->where('produk.kode_hapus', 0)->where('m.kode_hapus', 0)
    			->get();
    	// dd($data);
    	return view('back.produk.index', compact('data'));
    }

    public function store(Request $request)
    {
    	// dd($request);
    	$namafile = null;
    	if($request->file('foto')){
    		$pict = $request->foto;
            $namafile = time().rand(100, 99).".".$pict->getClientOriginalName();
            $request->foto->move(public_path('backend/produk'), $namafile);
    	}
    	$input = Produk::create([
    		'id_marketplace'	=> $request->id_marketplace,
    		'produk'			=> $request->produk,
    		'harga'				=> $request->harga,
    		'keterangan'		=> $request->keterangan,
    		'foto'				=> $namafile,
    	])->save();
    	if($input){
    		return redirect('produk')->with('success', 'Berhasil menambahkan data produk '.$request->produk);
    	}else{
    		return redirect('produk')->with('error', 'Gagal menambahkan data!');
    	}
    }

    public function delete($id)
    {
    	// dd($id);
    	$data = Produk::where('id', $id)->first();
    	$delete = Produk::where('id', $id)->update(['kode_hapus' => 1]);
    	if($delete){
    		return redirect('produk')->with('success', 'Berhasil menghapus data produk '.$data->produk);
    	}else{
    		return redirect('produk')->with('error', 'Gagal menghapus data produk '.$data->produk);
    	}
    }
}
