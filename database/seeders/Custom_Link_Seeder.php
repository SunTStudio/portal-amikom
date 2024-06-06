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
            'Nama_Link' => 'Chat GPT',
            'Source_Link' => 'https://chatgpt.com/',
            'Deskripsi' => 'Merupakan Website AI untuk membantu mahasiswa.',
        ]);
        Custom_Link::create([
            'Nama_Link' => 'Github',
            'Source_Link' => 'https://github.com/',
            'Deskripsi' => 'Merupakan Website Kolaborasi tim untuk mengerjakan project programing bersama.',
        ]);
        Custom_Link::create([
            'Nama_Link' => 'Template Figma UI Form',
            'Source_Link' => 'https://www.figma.com/',
            'Deskripsi' => 'Berikut Template UI Form yang menarik.',
        ]);
    }
}
