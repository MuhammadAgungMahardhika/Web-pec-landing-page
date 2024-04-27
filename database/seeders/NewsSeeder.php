<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->insert([
            'id_hospital' => 1,
            'id_category' => 1,
            'title' => "Pemenang Lelang Gedung Padang Eye Center",
            'type' => 'post',
            'slug' => "pemenang-lelang-gedung-padang-eye-center",
            'brosur_url' => "1.jpg",
            'author' => "Muhammad Agung Mahardhika",
            'publication_date' => "2024-04-27",
            'summary' => "Pemenang lelang untuk pembangunan gedung Padang Eye Center di jalan Khatib Sulaiman",
        ]);

        DB::table('news')->insert([
            'id_hospital' => 1,
            'id_category' => 1,
            'title' => "Pemenang Lelang Gedung Padang Eye Center 2",
            'type' => 'post',
            'slug' => "pemenang-lelang-gedung-padang-eye-center-2",
            'brosur_url' => "2.jpg",
            'author' => "Muhammad Agung Mahardhika",
            'publication_date' => "2024-04-27",
            'summary' => "Pemenang lelang untuk pembangunan gedung Padang Eye Center di jalan Khatib Sulaiman",
        ]);

        DB::table('news')->insert([
            'id_hospital' => 1,
            'id_category' => 1,
            'title' => "Pemenang Lelang Gedung Padang Eye Center 3",
            'type' => 'post',
            'slug' => "pemenang-lelang-gedung-padang-eye-center-3",
            'brosur_url' => "3.jpg",
            'author' => "Muhammad Agung Mahardhika",
            'publication_date' => "2024-04-27",
            'summary' => "Pemenang lelang untuk pembangunan gedung Padang Eye Center di jalan Khatib Sulaiman",
        ]);

        DB::table('news')->insert([
            'id_hospital' => 1,
            'id_category' => 1,
            'title' => "Pemenang Lelang Gedung Padang Eye Center 4",
            'type' => 'post',
            'slug' => "pemenang-lelang-gedung-padang-eye-center-4",
            'brosur_url' => "4.jpg",
            'author' => "Muhammad Agung Mahardhika",
            'publication_date' => "2024-04-27",
            'summary' => "Pemenang lelang untuk pembangunan gedung Padang Eye Center di jalan Khatib Sulaiman",
        ]);

        DB::table('news')->insert([
            'id_hospital' => 1,
            'id_category' => 1,
            'title' => "Pemenang Lelang Gedung Padang Eye Center 5",
            'type' => 'post',
            'slug' => "pemenang-lelang-gedung-padang-eye-center-5",
            'brosur_url' => "5.jpg",
            'author' => "Muhammad Agung Mahardhika",
            'publication_date' => "2024-04-27",
            'summary' => "Pemenang lelang untuk pembangunan gedung Padang Eye Center di jalan Khatib Sulaiman",
        ]);

        DB::table('news')->insert([
            'id_hospital' => 1,
            'id_category' => 1,
            'title' => "Pemenang Lelang Gedung Padang Eye Center 6",
            'type' => 'post',
            'slug' => "pemenang-lelang-gedung-padang-eye-center-6",
            'brosur_url' => "6.jpg",
            'author' => "Muhammad Agung Mahardhika",
            'publication_date' => "2024-04-27",
            'summary' => "Pemenang lelang untuk pembangunan gedung Padang Eye Center di jalan Khatib Sulaiman",
        ]);
    }
}
