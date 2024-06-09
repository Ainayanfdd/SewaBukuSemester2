<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    use HasFactory;
    protected $table = 'pinjam';

    protected $primaryKey = 'Pinjam_ID';

    protected $fillable = [
        'user_ID',
        'ISBN',
        'judulBuku',
        'status',
        'tanggalPinjam',
        'tanggalAkhir',
        'biayaPinjam',
        'snapToken',
    ];
}
