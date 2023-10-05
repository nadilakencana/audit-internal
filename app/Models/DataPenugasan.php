<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPenugasan extends Model
{
    use HasFactory;
    protected $table = 'data_penugasan';
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class,  'id_user_ketua', 'id');
    }

    public function divisi(){
        return $this->belongsTo(Divisi::class, 'id_divisi', 'id');
    }

    public function cabang(){
        return $this->belongsTo(DataCabang::class, 'id_cabang', 'id');
    }

    public function penugasan(){
        return $this->hasMany(AnggotaPenugasan::class, 'id_penugasan', 'id');
    }
}
