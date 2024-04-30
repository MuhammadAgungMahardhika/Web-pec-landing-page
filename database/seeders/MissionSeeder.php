<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('missions')->insert([
            'id_hospital' => 1,
            'description' => 'Menyediakan pelayanan mata sub spesialistik yang terpadu'
        ]);
        DB::table('missions')->insert([
            'id_hospital' => 1,
            'description' => 'Menyediakan tenaga medis yang profesional dan kompeten'
        ]);
        DB::table('missions')->insert([
            'id_hospital' => 1,
            'description' => 'Pelayanan yang berorientasi pada kepuasan pasien (Customer Satisfaction)'
        ]);
        DB::table('missions')->insert([
            'id_hospital' => 1,
            'description' => 'Mendorong semangat kebersamaan untuk mencapai tujuan perusahaan'
        ]);
        DB::table('missions')->insert([
            'id_hospital' => 1,
            'description' => 'Menjalin hubungan kerjasama dengan institusi terkait baik nasional maupun internasional'
        ]);
    }
}
