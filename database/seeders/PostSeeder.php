<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'category_post_id' => 1,
            'gambar' => 'assets/images/artikel/abc.jpg',
            'judul' => 'Paket Milad',
            'slug' => Str::slug('Paket Milad'),
            'excerpt' => 'awkwkwkwkwkkw',
            'written_by' => 'Istiqomah',
            'body' => 'akwkwdksndakansdknksadnksnksndknaskdnksndkasnd',
            'is_tampil_di_beranda' => 'tidak',
            'is_tampil_di_halaman_artikel' => 'ya'
        ],
    );

    DB::table('posts')->insert([
            'category_post_id' => 2,
            'gambar' => 'assets/images/artikel/aing.jpg',
            'judul' => 'Paket Milad2',
            'slug' => Str::slug('Paket Milad2'),
            'excerpt' => 'awkwkwkwkwkkw',
            'written_by' => 'Istiqomah',
            'body' => 'akwkwdksndakansdknksadnksnksndknaskdnksndkasnd',
            'is_tampil_di_beranda' => 'ya',
            'is_tampil_di_halaman_artikel' => 'ya'
        ],
    );

    DB::table('posts')->insert([
            'category_post_id' => 3,
            'gambar' => 'assets/images/artikel/aing.jpg',
            'judul' => 'Paket Milad3',
            'slug' => Str::slug('Paket Milad3'),
            'excerpt' => 'awkwkwkwkwkkw',
            'written_by' => 'Istiqomah',
            'body' => 'akwkwdksndakansdknksadnksnksndknaskdnksndkasnd',
            'is_tampil_di_beranda' => 'ya',
            'is_tampil_di_halaman_artikel' => 'tidak'
        ],
    );
    }
}
