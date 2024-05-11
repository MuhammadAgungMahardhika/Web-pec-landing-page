<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsParagrafSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('news_paragrafs')->insert([
            'id_news' => 1,
            'number' => 1,
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi cumque, molestiae quos itaque accusamus numquam? Rerum maiores molestias, illo vitae eos voluptas nesciunt dignissimos, quos dicta a repudiandae eaque nisi?",
            'source_description' => "ini sourcenya",
            'source_link' => 'https://tes.com'
        ]);
        DB::table('news_paragrafs')->insert([
            'id_news' => 1,
            'number' => 1,
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi cumque, molestiae quos itaque accusamus numquam? Rerum maiores molestias, illo vitae eos voluptas nesciunt dignissimos, quos dicta a repudiandae eaque nisi?",
            'source_description' => "ini 2 sourcenya",
            'source_link' => 'https://tes2.com'
        ]);
    }
}
