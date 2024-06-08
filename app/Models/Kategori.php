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

    public function customs(){
         return $this->hasMany(Custom::class, 'id_kategori_link');
    }
}
