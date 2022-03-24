<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPerizinan extends Model
{
    use HasFactory;
    protected $table = 'k_perizinan';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
