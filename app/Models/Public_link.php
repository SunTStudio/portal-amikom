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
        $this->belongsTo(User::class);
    }

    public function custom(){
        $this->belongsTo(Custom::class);
    }
}
