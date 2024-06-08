<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custom extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nama_Link',
        'id_pengguna',
        'Source_Link',
        'Deskripsi',
        'id_kategori_link',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori_link');
    }

    public function public_link()
    {
        return $this->hasMany(Public_link::class);
    }
}
