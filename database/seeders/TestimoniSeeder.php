<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimoniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonis')->insert([
            'nama' => 'Istiqomah',
            'jabatan' => '',
            'gambar' => 'assets/images/testimoni/aing.jpg',
            'testimoni' => 'Alhamdulillah travel Sumber Barokah Umroh aman & amanah, pelayanan dan fasilitas yang diberikan sangat memuaskan. Para pembimbingnya sangat sabar & ramah. Barokallahu fiikum
            Semoga dipertemukan lg dilain kesempatan. Smoga Sumber Barokah umroh kedepannya smakin jaya & sukses',
            'is_tampil' => 'ya',
        ]);

        
        DB::table('testimonis')->insert([
            'nama' => 'Erik Kusuma Wardhani',
            'jabatan' => '',
            'gambar' => 'assets/images/testimoni/abc.jpg',
            'testimoni' => 'Selama mengikuti sumber barokah pelayanannya amat bagus dan para pendamping serta muntawif nya sangat ramah',
            'is_tampil' => 'ya',
        ]);

        
        DB::table('testimonis')->insert([
            'nama' => 'Hesty Ningsih',
            'jabatan' => '',
            'gambar' => 'assets/images/testimoni/ningsih.jpg',
            'testimoni' => 'Pertama kali ikut jamaah umroh sumber barokah travel & tour banyak ilmu, pengalaman yang didapat selama ditanah suci,,, sya sangat puas pelayanan safari trhadap para jamaah,,,
            Semoga PT.Sumber Barokah semakin maju, jaya & sukses',
            'is_tampil' => 'ya',
        ]);
    }
}
