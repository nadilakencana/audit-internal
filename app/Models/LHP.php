<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LHP extends Model
{
    use HasFactory;
    protected $table = 'l_h_p_s';
    protected $guarded = [];

    public function temuanAudit (){
        return $this->hasMany(TemuanAudit::class, 'id_lhps', 'id');
    }
    public function fileTemuan (){
        return $this->hasMany(BuktiTemuan::class, 'id_lhps', 'id');
    }

    public function Penugasan(){
        return $this->belongsTo(DataPenugasan::class, 'id_penugasan', 'id');
    }

    public function cabang(){
        return $this->belongsTo(DataCabang::class, 'id_cabang', 'id');
    }
}
