<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriExportir extends Model
{
    use HasFactory;
    protected $table = 'k_exportir';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
