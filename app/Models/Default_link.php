<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Default_link extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nama_Link',
        'Source_Link',
        'Deskripsi'
    ];
}
