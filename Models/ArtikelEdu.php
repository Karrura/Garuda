<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtikelEdu extends Model
{
    use HasFactory;
    protected $table = 'a_edu';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
