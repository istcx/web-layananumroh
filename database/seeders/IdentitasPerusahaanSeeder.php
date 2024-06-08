<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdentitasPerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('identitas_perusahaans')->insert([ 
            'nama' => 'PT. Sumber Barokah',
            'nama_gedung_kantor' => 'Trillium Office and Residence',
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31864.672522730965!2d114.54856523476565!3d-3.3294074999999816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de42335ee7382e7%3A0x23d45aaf0f562c7a!2sHome%20Ponsel!5e0!3m2!1sen!2sid!4v1717488735619!5m2!1sen!2sid',
            'alamat' => 'Jl. Marthadinata 108 - 116 Lt. 1 No. 07, Banjarmasin',
            'no_hp_1' => '081232324112',
            'no_telepon_1' => '+6231 51169000',
            'no_telepon_2' => '+6231 51168921',
            'email' => 'sumberbarokah.pt@gmail.com',
            'nama_pada_rekening' => 'PT. Sumber Barokah',
            'no_rekening_1' => 'BCA : 152 039 523 3 (IDR/RUPIAH)',
            'no_rekening_2' => 'MANDIRI :
            142 00 22 33 44 51 (IDR/RUPIAH)
            142 002 22 33 455 (USD/DOLLAR)
            ',
            'no_rekening_3' => 'BSM : 716 117 161 6',
            'facebook' => 'https://www.facebook.com/istcc',
            'instagram' => 'https://www.instagram.com/istcc',
            'youtube' => 'https://www.youtube.com/channel/UCclfG273BonQtsx_VRZACfg',
        ]);
    }
}
