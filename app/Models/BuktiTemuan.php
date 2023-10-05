<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuktiTemuan extends Model
{
    use HasFactory;
    protected $table = 'bukti_temuan';
    protected $guarded = [];

    public function temuan(){
        return $this->belongsTo(TemuanAudit::class, 'id_temuan_audit', 'id');
    }
}
