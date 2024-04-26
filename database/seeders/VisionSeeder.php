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
            'description' => 'Menjadikan Semua Mata Masyarakat Sehat'
        ]);
    }
}
