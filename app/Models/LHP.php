<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LHP extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori', 'kode_lhp', 'tanggal', 'uraian', 'unit', 'file', 'status_verifikasi'
    ];
}
