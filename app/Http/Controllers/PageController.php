<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Models\news;


class PageController extends Controller
{

    public function Main($lang = "id")
    {

        $navbarData = [
            0 => "Beranda",
            1 => "Tentang PEC",
            2  => "Layanan Kami",
            3 => "Postingan",
            4 => "Testimoni",
            5 => "Cabang Pec",
            6 => "Tim Pec",
            7 => "Kontak",
            8 => "Masuk",
            9 => "flag_indonesia.png"
        ];

        $landingPageMenu = [
            [
                "icon" => "ri-stack-line",
                "title" => "Pendaftaran Online",
                "description" => "Pendaftaran online untuk memudahkan anda mendapatkan nomor antrian lebih cepat"
            ],
            [
                "icon" => "ri-palette-line",
                "title" => "Jadwal Dokter",
                "description" => "Lihat jadwal dokter untuk menyesuaikan waktu kedatangan anda"
            ],
            [
                "icon" => "ri-command-line",
                "title" => "Whats up",

                "description" => "Jika ada yang ingin anda tanyakan silahkan hubungi kami melalui Whats Up sekarang juga"
            ],
            [
                "icon" => "ri-fingerprint-line",
                "title" => "Komplain Layanan",
                "description" => "Jika Anda memiliki keluhan tentang layanan kami, kami siap mendengarkan dan membantu Anda"
            ]
        ];
        $videoSection = [
            "title" => "Video Profil Padang Eye Center",
            "description" =>  "Selamat datang di Padang Eye Center, tempat kami fokus pada kesehatan dan penglihatan mata
                Anda. Temukan perbedaannya di Padang Eye Center, di mana keahlian bertemu dengan kepedulian."

        ];
        $teamData = [];
        for ($i = 0; $i < 19; $i++) {
            $letter = chr(ord('A') + $i);
            $teamData[] = $letter . ".jpg";
        }
        $teamSection = [
            "title" => "Tim Pec",
            "description" => " Magnam dolores commodi suscipit. Necessitatibus eius consequatur
            ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam
            quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
            Quia fugiat sit in iste officiis commodi quidem hic quas.",
            "data" => $teamData
        ];
        $hospitalData =  Hospital::with(['visions', 'missions'])->first();
        $postData = News::where('type', 'post')->orderBy('id', 'desc')->limit(5)->get();

        $data = [
            "title" => "Padang Eye Center",
            "navbarData" => $navbarData,
            "landingPageMenu" => $landingPageMenu,
            "hospitalData" => $hospitalData,
            "videoSection" => $videoSection,
            "teamSection" => $teamSection,
            "postData" => $postData
        ];
        return view('pages.landing_page', $data);
    }
}
