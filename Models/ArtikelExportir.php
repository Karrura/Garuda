<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtikelExportir extends Model
{
    use HasFactory;
    protected $table = 'a_exportir';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
