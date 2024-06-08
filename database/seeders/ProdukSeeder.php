<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produks')->insert([
            [
                'gambar' => 'assets/images/produk/aing.jpg',
                'nama' => 'Paket Milad',
                'harga' => '30.000.000',
                'slug' => 'paket-milad-' . uniqid(),
                'tgl_berangkat' => '2024-07-20',
                'durasi' => '14 Hari',
                'total_seat' => '75 Pax',
                'berangkat_dari' => 'Jakarta',
                'hotel' => 'Setaraf',
                'maskapai' => 'Saudi Airlines',
                'kategori_paket' => 'Umrah',
                'is_tampil_di_beranda' => 'ya',
                'is_tampil_di_halaman_produk' => 'tidak',
            ],
            [
                'gambar' => 'assets/images/produk/aing.jpg',
                'nama' => 'Paket Milad2',
                'harga' => '50.000.000',
                'slug' => 'paket-milad-2-' . uniqid(),
                'tgl_berangkat' => '2024-08-22',
                'durasi' => '14 Hari',
                'total_seat' => '75 Pax',
                'berangkat_dari' => 'Banjarmasin',
                'hotel' => 'Setaraf',
                'maskapai' => 'Saudi Airlines',
                'kategori_paket' => 'Umrah',
                'is_tampil_di_beranda' => 'ya',
                'is_tampil_di_halaman_produk' => 'ya',
            ],
            [
                'gambar' => 'assets/images/produk/aing.jpg',
                'nama' => 'Paket Milad3',
                'harga' => '200.000.000',
                'slug' => 'paket-milad-3-' . uniqid(),
                'tgl_berangkat' => '2024-09-16',
                'durasi' => '14 Hari',
                'total_seat' => '75 Pax',
                'berangkat_dari' => 'Jakarta',
                'hotel' => 'Setaraf',
                'maskapai' => 'Saudi Airlines',
                'kategori_paket' => 'Haji',
                'is_tampil_di_beranda' => 'tidak',
                'is_tampil_di_halaman_produk' => 'ya',
            ],
        ]);
    }
}
