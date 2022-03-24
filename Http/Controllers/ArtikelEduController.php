<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelEdu as AEd;
use Illuminate\Support\Facades\Validator;

class ArtikelEduController extends Controller
{
    public function index()
    {
    	$data = \DB::table('a_edu as a')
    	->join('k_edu as k', 'k.id', '=', 'a.id_k_edu')
        ->select('k.kategori', 'k.id as id_k_edu', 'a.judul', 'a.id', 'a.deskripsi', 'a.video')
    	->where('a.kode_hapus', 0)->where('k.kode_hapus', 0)
    	->get();

    	return view('back.videoedu.index', compact('data'));
    }

    public function create()
    {	
    	$kategori = \DB::table('k_edu')->where('kode_hapus', 0)->get();
    	return view('back.videoedu.create', compact('kategori'));
    }

    public function store(Request $request)
    {	
    	$validator = Validator::make($request->all(), [
            'video' => 'mimetypes:video/mp4,video/avi,video/ogg|file|max:25600',
        ], [
            'video.mimetypes'	=> 'Video harus berformat mp4, ogg atau avi!',
            'video.max'			=> 'Maximal ukuran video melebihi 25mb!',
        ]);

        if ($validator->fails()) {
            return redirect('videoedu-artikel')->with('error', $validator->errors());
        }else{
        	// dd($request);
        	$namafile = null;
	    	if($request->file('video')){
	    		$video = $request->video;
	            $namafile = time().rand(100, 99).".".$video->getClientOriginalName();
	            $request->video->move(public_path('backend/videoedu'), $namafile);
	    	}
	    	// dd($namafile);
	    	$input = AEd::create([
	    		'id_k_edu'	=> $request->id_k_edu,
	    		'judul'		=> $request->judul,    		
	    		'video'		=> $namafile,
	    		'deskripsi'	=> $request->deskripsi,
	    	])->save();
	    	if($input){
	    		return redirect('videoedu-artikel')->with('success', 'Berhasil menambahkan data artikel '.$request->judul);
	    	}else{
	    		return redirect('videoedu-artikel')->with('error', 'Gagal menambahkan data!');
	    	}
        }	
    }

    public function delete($id)
    {
    	$data = \DB::table('a_edu')->where('id', $id)->first();
    	$delete = AEd::where('id', $id)->update(['kode_hapus' => 1]);
    	if($delete){
    		return redirect('videoedu-artikel')->with('success', 'Berhasil menghapus data artikel '.$data->judul);
    	}else{
    		return redirect('videoedu-artikel')->with('error', 'Gagal menghapus data!');
    	}	
    }
}
