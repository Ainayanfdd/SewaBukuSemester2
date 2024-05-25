<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'Kategori';

    protected $primaryKey = 'Kategori_ID';

    protected $fillable = [
        'Kategori_ID',
        'agama',
        'budaya',
        'nonfiksi',
        'fiksi',
        'referensi',
    ];
}
