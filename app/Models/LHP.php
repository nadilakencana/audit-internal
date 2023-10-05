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
}
