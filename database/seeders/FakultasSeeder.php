<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fakultas;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fakultases = array(
                array("nama" => "Pertanian" ),
                array("nama" => "Kedokteran"),
                array("nama" => "Matematika dan Ilmu Pengetahuan Alam"),
                array("nama" => "Hukum"),
                array("nama" => "Ekonomi"),
                array("nama" => "Peternakan"),
                array("nama" => "Teknik"),
                array("nama" => "Ilmu Budaya"),
                array("nama" => "Ilmu Sosial dan Ilmu Politik"),
                array("nama" => "Farmasi"),
                array("nama" => "Teknologi Pertanian"),
                array("nama" => "Kesehatan Masyarakat"),
                array("nama" => "Keperawatan"),
                array("nama" => "Kedokteran Gigi"),
                array("nama" => "Teknologi Informasi"),
                array("nama" => "Pasca Sarjana")
            ) ;   
            
        Fakultas::insert($fakultases);

    }
}
