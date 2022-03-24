<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtikelPerizinan extends Model
{
    use HasFactory;
    protected $table = 'a_perizinan';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
