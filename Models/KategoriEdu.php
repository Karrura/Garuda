<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriEdu extends Model
{
    use HasFactory;
    protected $table = 'k_edu';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
