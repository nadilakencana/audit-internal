<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataCabang extends Model
{
    use HasFactory;

    protected $table = 'data_cabang';
    protected $guarded = [];

    public function penugasan(){
        return $this->hasMany(DataPenugasan::class, 'id_cabang', 'id');
    }
}
