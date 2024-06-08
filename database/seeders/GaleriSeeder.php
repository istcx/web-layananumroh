<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galeri')->insert([
            'judul' => 'Manasik',
            'link' => 'assets/images/gallery/Manasik-Tour.jpg',
            'is_tampil_di_beranda' => 'ya',
            'is_tampil_di_galeri' => 'ya',
            'kategori_galeri' => 'foto',
        ]);

        DB::table('galeri')->insert([
            'judul' => 'Pembekalan',
            'link' => 'assets/images/gallery/Pembekalan-Sebelum-Keberang.jpg',
            'kategori_galeri' => 'foto',
            'is_tampil_di_beranda' => 'ya',
            'is_tampil_di_galeri' => 'ya',
        ]);

        DB::table('galeri')->insert([
            'judul' => 'Proses Bagasi',
            'link' => 'assets/images/gallery/Proses-Bagasi.jpg',
            'kategori_galeri' => 'foto',
            'is_tampil_di_beranda' => 'ya',
            'is_tampil_di_galeri' => 'ya',
        ]);
    }
}
