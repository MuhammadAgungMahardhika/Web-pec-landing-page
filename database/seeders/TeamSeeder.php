<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $file = fopen(base_path('database/csv/team_pec.csv'), 'r');
        fgetcsv($file);
        while (($row = fgetcsv($file)) !== false) {
            $data = [
                "id_hospital" => 1,
                "name" => $row[2],
                "position" => $row[3],
                "image_url" => $row[4],
                "twitter" => $row[5],
                "facebook" => $row[6],
                "instagram" => $row[7],
                "linkedin" => $row[8],
            ];
            DB::table('teams')->insert($data);
        }

        fclose($file);
    }
}
