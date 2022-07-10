<?php

namespace App\Models;

use App\Models\Angkatan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{ 
    use HasFactory;
    protected $table = "anggotas";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'nama', 'nim', 'no_tlp', 'email', 'angkatan_id' ];

    public function angkatan(){
        return $this->belongsTo(Angkatan::class);
    }
}
