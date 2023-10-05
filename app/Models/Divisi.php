<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;
     protected $table = 'divisi';

    protected $guarded = [];

    public function user(){
        return $this->hasMany(User::class, 'id_divisi', 'id');
    }

    public function penugasan(){
        return $this->hasMany(DataPenugasan::class, 'id_divisi', 'id');
    }
}
