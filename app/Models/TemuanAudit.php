<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemuanAudit extends Model
{
    use HasFactory;
    protected $table = 'temuan_audit';
    protected $guarded = [];

    public function lhps (){
        return $this->belongsTo(LHP::class, 'id_lhps', 'id');
    }

    public function buktiTemuan (){
        return $this->hasMany(BuktiTemuan::class, 'id_temuan_audit', 'id');
    }
}
