<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custom_Link extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nama_Link',
        'id_pengguna',
        'Source_Link',
        'Deskripsi',
    ];


    public function user(){
        $this->belongsTo(User::class, 'id_pengguna');
    }

    public function public_link(){
        $this->hasMany(Public_link::class, 'id_custom_link');
    }
}
