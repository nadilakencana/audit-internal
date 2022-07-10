<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acara extends Model
{
    use HasFactory;
    protected $table = "acaras";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'title', 'deskripsi', 'kategori_id', 'image'];

    public function kategori(){
        return $this->belongsTo(Category::class, 'kategori_id','id');
    } 
}
