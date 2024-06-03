<?php

namespace Database\Seeders;

use App\Models\Custom_Link;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Custom_Link_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Custom_Link::create([
            'Nama_Link' => 'Dashboard MHS',
            'Source_Link' => 'https://auth.amikom.ac.id/mhs',
            'Deskripsi' => 'Merupakan Website Mahasiswa Amikom yang digunakan untuk keperluan akademis Mahasiswa.',
        ]);
    }
}
