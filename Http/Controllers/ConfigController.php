<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Config;
use Redirect;

class ConfigController extends Controller
{
    public function index()
    {
    	$data = Config::first();
    	// dd($data);
    	return view('back.config.config', compact('data'));
    }

    public function update(Request $request)
    {
    	// dd($request);
    	$icon = null;
    	if($request->file('app_icon')){
    		$pict = $request->app_icon;
            $icon = time().rand(100, 99).".".$pict->getClientOriginalName();
            $request->app_icon->move(public_path('image'), $icon);
    	}
    	$favicon = null;
    	if($request->file('app_favicon')){
    		$pict = $request->app_favicon;
            $favicon = time().rand(100, 99).".".$pict->getClientOriginalName();
            $request->app_favicon->move(public_path('image'), $favicon);
    	}

    	$update = Config::where('id', 1)->update([
    		'app_name'		=> $request->app_name,
    		'app_author'	=> $request->app_author,
    		'app_desc'		=> $request->app_desc,
    		'app_year'		=> $request->app_year,
    		'app_icon'		=> $icon,
    		'app_favicon'	=> $favicon,
    		'app_vers'		=> $request->app_vers,
    	]);
    	// dd($update);
    	if($update){
    		return redirect('config')->with('success', 'Berhasil mengubah data config!');
    	}else{
    		return redirect('config')->with('error', 'Gagal mengubah data');
    	}
    }
}
