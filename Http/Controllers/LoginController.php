<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Session;

class LoginController extends Controller
{
    public function index()
    {
    	return view('back.login.login');
    }

    public function login(Request $request)
    {
    	$data = Admin::cekdata($request->username, $request->password);
    	if($data){
    		Session::put('id', $data->id);
            Session::put('username', $data->username);
            Session::put('foto', $data->foto);
            Session::put('keterangan', $data->keterangan);
            return redirect('config');
    	}else {
            return back()->with("error","Gagal login, Username atau Password salah!");
        }
    }

    public function logout(Request $request)
    {
    	$request->session()->forget('id');
        $request->session()->forget('username');
        $request->session()->forget('foto');
        $request->session()->forget('keterangan');
        $request->session()->flush();
        return redirect('login')->with("success","Berhasil Logout!");;
    }
}
