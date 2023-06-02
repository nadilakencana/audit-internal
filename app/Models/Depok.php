<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depok extends Model
{
    use HasFactory;

    protected $fillable = [
        'ket', 'jenis_property', 'alamat', 'luas_tanah', 'luas_bangunan', 'sertifikat', 'harga', 'link_foto', 'link_maps', 'catatan'
    ];
}
