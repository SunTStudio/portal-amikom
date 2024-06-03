<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Default_link;

class Default_Link_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Default_Link::create([
            'Nama_Link' => 'D3-Manajemen Informatika',
            'Source_Link' => 'https://mi.amikom.ac.id/',
            'Deskripsi' => 'Website informasi mengenai Prodi Manajemen Informatika'
        ]);
    }
}
