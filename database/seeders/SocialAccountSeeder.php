<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('social_accounts')->insert([
            "id_hospital" => 1,
            "name" => "email",
            "url" => "rskmpadangeyecenter@yahoo.com"
        ]);

        DB::table('social_accounts')->insert([
            "id_hospital" => 1,
            "name" => "call",
            "url" => "081373517899"
        ]);
        DB::table('social_accounts')->insert([
            "id_hospital" => 1,
            "name" => "instagram",
            "url" => "pec_padangeyecenter"
        ]);
        DB::table('social_accounts')->insert([
            "id_hospital" => 1,
            "name" => "facebook",
            "url" => "padangeyecenter"
        ]);
        DB::table('social_accounts')->insert([
            "id_hospital" => 1,
            "name" => "youtube",
            "url" => "padangeyecenter"
        ]);
    }
}
