<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kategori',
    ];

    public function custom_link(){
        return $this->hasMany(Custom_Link::class, 'id_kategori_link','id_kategori');
    }
}
