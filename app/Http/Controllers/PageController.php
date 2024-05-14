<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Models\Mission;
use App\Models\news;
use App\Models\News_paragraf;
use App\Models\team;
use App\Models\Vision;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class PageController extends Controller
{

    private $data;

    public function __construct(Hospital $hospital)
    {
        $this->data = [
            "title" => "Padang Eye Center",
            "hospitalData" =>  $hospital::first(),
            "navbarData" => [
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
            ],
        ];
    }

    public function Home($lang = "id")
    {
        $landingPageMenu = [
            [
                "icon" => "ri-stack-line",
                "title" => "Pendaftaran Online",
                "description" => "Pendaftaran online untuk memudahkan anda mendapatkan nomor antrian lebih cepat"
            ],
            [
                "icon" => "bx bx-calendar-heart",
                "title" => "Jadwal Dokter",
                "description" => "Lihat jadwal dokter untuk menyesuaikan waktu kedatangan anda"
            ],
            [
                "icon" => "bx bxl-whatsapp",
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
        $teamData = Team::get();
        $teamSection = [
            "title" => "Tim Pec",
            "description" => "Padang Eye Center memiliki tim dokter subspesialis mata yang terdiri dari 20 ahli. Dari penanganan katarak hingga glaukoma, setiap dokter di tim kami memiliki keahlian khusus dalam bidangnya. Kami bertekad memberikan perawatan mata terbaik untuk menjaga kesehatan dan kejernihan visi Anda.",
            "data" => $teamData
        ];

        $postData = News::where('type', 'post')->orderBy('id', 'desc')->limit(5)->get();

        $this->data["landingPageMenu"] = $landingPageMenu;
        $this->data["videoSection"] = $videoSection;
        $this->data["teamSection"] = $teamSection;
        $this->data["postData"] = $postData;

        return view('pages.home', $this->data);
    }

    public function Posts(Request $request)
    {
        $pageNumber = $request->query('page', 1);
        $post =  News::where('id_category', 1)->orderBy('id', 'DESC')->paginate(6, ['*'], 'page', $pageNumber);

        $this->data["postData"] = $post;
        return view('pages.posts', $this->data);
    }
    public function Post($slug = null)
    {

        $post =  News::where('id_category', 1)->where('slug', $slug)->first();

        $this->data["postData"] = $post;

        return view('pages.post', $this->data);
    }
}
