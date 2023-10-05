<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaPenugasan extends Model
{
    use HasFactory;
    protected $table = 'anggota_penugasan';
    protected $guarded = [];

    public function penugasan(){
        return $this->belongsTo(DataPenugasan::class, 'id_penugasan', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'id_anggota_user', 'id');
    }
}
