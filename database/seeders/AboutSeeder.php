<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'judul' => 'Tentang Kami',
            'subjudul' => 'PT. Sumber Barokah',
            'motto' => 'Langkah Pasti Menuju Baitullah',
            'submotto' => 'Umrah Sekaligus Bersedekah',
            'link_video' => 'https://www.youtube.com/embed/IHsq24vVemo?si=NwbpLHqGCEpPDae0',
            'teks_sejajar_video' => '<p>Berawal dari kepedulian terhadap anak yatim dan kaum dhuafa yang kurang mendapatkan pendidikan yang layak dan memadai, beberapa dosen dari Politeknik Negeri Banjarmasin dan Universitas Islam Negeri (IAIN) tergerak hatinya untuk mendirikan usaha yang profitnya di darmabaktikan untuk membiayai pendidikan anak yatim dan kaum dhuafa. Gagasan dan cita-cita yang mulia tersebut diikrarkan di depan Ka bah (Baitullah) saat mereka menunaikan ibadah Haji.</p>',
            'teks_di_bawah_video' =>'<p> Akhirnya pada tahun 2008, gagasan dan cita-cita mulia tersebut oleh Bapak Muhammad Asfar
            selaku penggagas utama diwujudkan dalam bentuk konkrit berupa pendirian PT. Sumber Barokah
            yang bergerak dalam bidang pelayanan Umrah dan Haji Khusus dengan brand
            "Sumber barokah Umrah & Haji".
            Keuntungan perusahaan ini sepenuhnya diinfaqkan untuk Pondok Pesantren Al-furqan
            di Banjarmasin, sehingga dapat memberikan pendidikan
            gratis kepada para anak yatim dan kaum dhuafa, mulai dari sekolah Dasar, SMP dan SMA.
            <br><br>
            Dalam perjalanannya Sumber barokah Umrah & Haji yang bermotokan "Umrah Sekaligus Bersedekah"
            mendapatkan kepercayaan dari masyarakat sehingga mulai tahun 2010 memberangkatkan
            jamaah umrah dan haji khusus.
            Kepercayaan ini akan senantiasa dijaga dengan pelayanan terbaik bagi jama ah umrah/haji
            khusus karena mereka adalah tamu-tamu Allah SWT, sekaligus menjaga komitmen perusahaan
            untuk mengentas kemiskinan berupa sumbangsih dalam pendidikan anak yatim dan kaum
            dhuafa. <br>
        </p>

        <h3>Visi</h3>
        <strong>
            <p>" Menjadi Penyedia Layanan Umrah & Haji yang Amanah dan Profesional "</p>
        </strong>

        <h3>Misi</h3>
        <ol style="list-style-type:decimal">
            <li>
                <p>Perjalanan ibadah Umrah-Haji dengan kualitas layanan prima untuk mencapai
                    kemabruran.</p>
            </li>
            <li>
                <p>Mengembangkan Pengelolaan perusahaan yang baik untuk mewujudkan kesejahteraan
                    bagi anak yatim dan kaum dhuafa khususnya dalam bidang pendidikan.</p>
            </li>
            <li>
                <p>Mengembangkan kreatifitas guna mendukung dan memberikan kontribusi yang
                    sebesar-besarnya untuk masyarakat, bangsa dan agama.</p>
            </li>
        </ol>

        <h3>Mengapa harus Sumber Barokah Umrah dan Haji?</h3>
        <ol style="list-style-type: decimal;">
            <li>
                <p>InsyaAllah Umrah & Haji anda semakin berkah karena secara tidak langsung berinfaq
                    kepada yatim piatu dan fakir miskin di Ponpes Idhotun Nasyi in, Sugihwaras,
                    Kalitengah, Lamongan.</p>
            </li>
            <li>
                <p>Berijin resmi Kementerian Agama RI.</p>
            </li>
            <li>
                <p>Pembimbing yang amanah dan profesional.</p>
            </li>
            <li>
                <p>Pembekalan tata cara ibadah yang komplit baik teori maupun praktek untuk
                    memastikan jamaah umrah melaksanakan ibadah dengan sempurna.</p>
            </li>
            <li>
                <p>Kepastian harga, tidak ada tambahan biaya lagi selain yang sudah tercantum di
                    daftar harga brosur/pamflet.</p>
            </li>
            <li>
                <p>Melayani dengan sepenuh hati, dengan motto : “ Melayani Tamu Allah adalah
                    Pengabdian Kepada Allah”.</p>
            </li>
        </ol>',
        'teks_di_beranda'=> 'Keuntungan perusahaan ini sepenuhnya diinfaqkan untuk Pondok Pesantren Al-furqan i di Banjarmasin, sehingga dapat memberikan pendidikan gratis kepada para anak yatim dan kaum dhuafa.',

        ],
    );

    }
}
