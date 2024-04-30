<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('visions')->insert([
            'id_hospital' => 1,
            'description' => 'Menjadikan Rumah Sakit yang terpercaya dan terkemuka di bidang pelayanan kesehatan mata masyarakat dengan implementasi nilai–nilai kepuasan pasien costumer satisfaction'
        ]);
    }
}
