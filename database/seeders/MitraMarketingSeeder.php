<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Stringable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Nette\Utils\Random;

class MitraMarketingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mitra_marketings')->insert([
            'nama' => 'Barokah',
            'username' => 'safari',
            'hp' => '123456789090', 
            'wa' => '123456789090',
            'alamat' => 'qwertyuiop',
            'kota' => 'qwertyuiop',
            'provinsi' => '1234567890',
            'jabatan' => 'qwert',
            'status' => '1', 
        ]);

        DB::table('mitra_marketings')->insert([
            'nama' => 'Muhammad Akbar',
            'username' => Str::random('5'),
            'hp' => '081252397285', 
            'wa' => '6281252397285',
            'alamat' => 'Jl Rawasari VI RT 53 RW 05 Teluk dalam',
            'kota' => 'Surabaya',
            'provinsi' => 'Jawa Timur',
            'jabatan' => '',
            'status' => '1', 
        ]);

        DB::table('mitra_marketings')->insert([
            'nama' => 'Muhamad Arifin',
            'username' => Str::random('5'),
            'hp' => '081234044195', 
            'wa' => '6281234044195',
            'alamat' => 'Jl Saidani Tamban',
            'kota' => 'Banjarmasin',
            'provinsi' => 'Kalimantan Selatan',
            'jabatan' => '',
            'status' => '1', 
        ]);

        DB::table('mitra_marketings')->insert([
            'nama' => 'Rusmilawati',
            'username' => Str::random('5'),
            'hp' => '081259424480', 
            'wa' => '6281259424480',
            'alamat' => 'Jl a.yani km 5,5',
            'kota' => 'Banjarmasin',
            'provinsi' => 'Kalimantan Selatan',
            'jabatan' => '',
            'status' => '1', 
        ]);

        DB::table('mitra_marketings')->insert([
            'nama' => 'Arry Kusuma Putra',
            'username' => Str::random('5'),
            'hp' => '081295741965', 
            'wa' => '6281295741965',
            'alamat' => 'Jl landasan ulin, Banjarbaru',
            'kota' => 'Banjarbaru',
            'provinsi' => 'Kalimantan Selatan',
            'jabatan' => '',
            'status' => '1', 
        ]);

        DB::table('mitra_marketings')->insert([
            'nama' => 'ABDUL HADI',
            'username' => Str::random('5'),
            'hp' => '082244556209', 
            'wa' => '6282244556209',
            'alamat' => 'JL Jafri zam-zam No 42 sutoyo s',
            'kota' => 'Banjarmasin',
            'provinsi' => 'Kalimantan Selatan',
            'jabatan' => '',
            'status' => '1', 
        ]);

        DB::table('mitra_marketings')->insert([
            'nama' => 'ABDULLAH WAHIB',
            'username' => Str::random('5'),
            'hp' => '081232324112', 
            'wa' => '6281232324112',
            'alamat' => 'Jl pramuka Permai 212',
            'kota' => 'Banjarmasin',
            'provinsi' => 'Kalimantan Selatan',
            'jabatan' => '',
            'status' => '1', 
        ]);
    }
}
