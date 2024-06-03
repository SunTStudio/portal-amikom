<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Public_link extends Model
{
    use HasFactory;

    protected $fillable = [
        "id_pengguna_link",
        "id_custom_link"
    ];

    public function user(){
        $this->belongsTo(User::class, 'id_pengguna_link');
    }

    public function custom_link(){
        $this->belongsTo(Custom_Link::class, 'id_custom_link');
    }
}
