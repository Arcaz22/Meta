<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jurusans')->insert([
            [
                'kota_asal' => "Bandung",
                'kota_tujuan' => "Karawang"
            ],
            [
                'kota_asal' => "Karawang",
                'kota_tujuan' => "Bandung"
            ],
            [
                'kota_asal' => "Bandung",
                'kota_tujuan' => "Bekasi"
            ],
            [
                'kota_asal' => "Bekasi",
                'kota_tujuan' => "Bandung"
            ],
            [
                'kota_asal' => "Karawang",
                'kota_tujuan' => "Bekasi"
            ],
            [
                'kota_asal' => "Bekasi",
                'kota_tujuan' => "Karawang3"
            ],
        ]);
    }
}
