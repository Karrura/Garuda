<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admin';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function cekdata($username, $password)
    {
    	$data = \DB::table('admin')->where('username', $username)->first();
    	if($data){
    		$access = \Hash::check($password, $data->password);
    		if($access == TRUE){
    			return $data;
    		}else{
    			return false;
    		}
    	}else{
    		return false;
    	}
    }
}
