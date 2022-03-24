<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marketplace;

class MarketplaceController extends Controller
{
    public function index()
    {
    	$data = Marketplace::where('kode_hapus', 0)->get();
    	// dd($data);
    	return view('back.marketplace.index', compact('data'));
    }

    public function store(Request $request)
    {
    	$namafile = null;
    	if($request->file('foto')){
    		$pict = $request->foto;
            $namafile = time().rand(100, 99).".".$pict->getClientOriginalName();
            $request->foto->move(public_path('backend/marketplace'), $namafile);
    	}
    	$input = Marketplace::create([
    		'marketplace'	=> $request->marketplace,
    		'alamat'		=> $request->alamat,
    		'email'			=> $request->email,
    		'telp'			=> $request->telp,
    		'keterangan'	=> $request->keterangan,
    		'foto'			=> $namafile,
    	])->save();
    	if($input){
    		return redirect('marketplace')->with('success', 'Berhasil menambahkan data marketplace '.$request->marketplace);
    	}else{
    		return redirect('marketplace')->with('error', 'Gagal menambahkan data!');
    	}
    }

    public function update(Request $request)
    {
    	dd($request);
    }

    public function delete($id)
    {
    	$data = Marketplace::where('id', $id)->first();
    	$delete = Marketplace::where('id', $id)->update(['kode_hapus' => 1]);
    	if($delete){
    		return redirect('marketplace')->with('success', 'Berhasil menghapus data marketplace '.$data->marketplace);
    	}else{
    		return redirect('marketplace')->with('error', 'Gagal menghapus data marketplace '.$data->marketplace);
    	}
    }
}
