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
}
