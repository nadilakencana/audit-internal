<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuktiTemuan extends Model
{
    use HasFactory;
    protected $table = 'bukti_temuan';
    protected $guarded = [];

    public function lhps(){
        return $this->belongsTo(LHP::class, 'id_lhps', 'id');
    }
}
