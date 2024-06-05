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
            'Nama_Link' => 'Mahasiswa Amikom Yogyakarta',
            'Source_Link' => 'https://auth.amikom.ac.id/mhs',
            'Deskripsi' => 'Website informasi untuk mahasiswa seperti materi, krs, ujian, jadwal perkuliahan'
        ]);

        Default_Link::create([
            'Nama_Link' => 'Waskita Amikom Yogyakarta',
            'Source_Link' => 'https://waskita.amikom.ac.id/',
            'Deskripsi' => 'Website perkuliahan untuk tugas dan materi'
        ]);

        Default_Link::create([
            'Nama_Link' => 'Universitas Amikom Yogyakarta',
            'Source_Link' => 'https://home.amikom.ac.id/',
            'Deskripsi' => 'Website informasi mengenai Universitas AMIKOM Yogyakarta'
        ]);

        Default_Link::create([
            'Nama_Link' => 'D3-Manajemen Informatika',
            'Source_Link' => 'https://mi.amikom.ac.id/',
            'Deskripsi' => 'Website informasi mengenai Prodi Manajemen Informatika'
        ]);

        Default_Link::create([
            'Nama_Link' => 'Ungu.In',
            'Source_Link' => 'https://app.ungu.in/',
            'Deskripsi' => 'Produk website short url dari AMIKOM'
        ]);

        Default_Link::create([
            'Nama_Link' => 'DAAK Amikom',
            'Source_Link' => 'https://daak.amikom.ac.id/',
            'Deskripsi' => 'Website informasi mengenai perkuliahan di Universitas AMIKOM Yogyakarta'
        ]);

        Default_Link::create([
            'Nama_Link' => 'Keuangan Amikom',
            'Source_Link' => 'https://keuangan.amikom.ac.id/',
            'Deskripsi' => 'Website informasi mengenai pembayaran di Universitas AMIKOM Yogyakarta'
        ]);
    }
}
