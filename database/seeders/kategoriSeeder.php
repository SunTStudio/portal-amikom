<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori;

class kategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori::create([
            'nama_kategori' => 'Jurnal',
        ]);
        Kategori::create([
            'nama_kategori' => 'Akademik',
        ]);
        Kategori::create([
            'nama_kategori' => 'Umum',
        ]);
        Kategori::create([
            'nama_kategori' => 'Custom',
        ]);
        Kategori::create([
            'nama_kategori' => 'Pribadi',
        ]);
    }
}
