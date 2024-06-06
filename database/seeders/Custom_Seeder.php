<?php

namespace Database\Seeders;

use App\Models\Custom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Custom_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
<<<<<<< HEAD:database/seeders/Custom_Link_Seeder.php
        Custom_Link::create([
            'Nama_Link' => 'Chat GPT',
            'Source_Link' => 'https://chatgpt.com/',
            'Deskripsi' => 'Merupakan Website AI untuk membantu mahasiswa.',
=======
        Custom::create([
            'id_pengguna' => 1,
            'Nama_Link' => 'Dashboard MHS',
            'Source_Link' => 'https://auth.amikom.ac.id/mhs',
            'Deskripsi' => 'Merupakan Website Mahasiswa Amikom yang digunakan untuk keperluan akademis Mahasiswa.',
            'id_kategori_link' => '3',
>>>>>>> 6600dc5479b876a8600f61c773b087e4bfc19a69:database/seeders/Custom_Seeder.php
        ]);
        Custom::create([
            'id_pengguna' => 1,
            'Nama_Link' => 'Github',
            'Source_Link' => 'https://github.com/',
            'Deskripsi' => 'Merupakan Website Kolaborasi tim untuk mengerjakan project programing bersama.',
            'id_kategori_link' => '3',
        ]);
        Custom::create([
            'id_pengguna' => 1,
            'Nama_Link' => 'Template Figma UI Form',
            'Source_Link' => 'https://www.figma.com/',
            'Deskripsi' => 'Berikut Template UI Form yang menarik.',
            'id_kategori_link' => '3',
        ]);
    }
}
