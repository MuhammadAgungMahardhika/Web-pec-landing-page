<?php

namespace Database\Seeders;

use App\Models\Hospital;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $name = "Padang Eye Center";
        $address = "Jl. Pemuda no. 53, Padang, Koto Padang, Indonesia, West Sumatra";
        $about = "Padang Eye Center adalah rumah sakit khusus mata terbesar di Sumatera Barat dengan melayani lebih dari 300 pasien setiap harinya";
        $moto = "Melayani Sepenuh Hati";
        $logoUrl = "logo_default.png";
        $videoProfileUrl = "video_default.mp4";
        $rootStatus = "main";
        $ownershipClassification = "swasta";
        $totalEmploye = 150;
        $yearOfEstablishment = "2008";
        $createdBy = "agung_mahardhika";

        DB::table('hospitals')->insert([
            "name" => $name,
            "address" => $address,
            "about" => $about,
            "moto" => $moto,
            "logo_url" => $logoUrl,
            "video_profile_url" => $videoProfileUrl,
            "root_status" => $rootStatus,
            "ownership_classification" => $ownershipClassification,
            "total_employe" => $totalEmploye,
            "year_of_establishment" => $yearOfEstablishment,
            "created_by" => $createdBy

        ]);
    }
}
