<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    protected $table = "artikels";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'title', 'deskripsi', 'kategori_id', 'image'];

    public function kategori(){
        return $this->belongsTo(Category::class, 'kategori_id','id');
    } 
}
