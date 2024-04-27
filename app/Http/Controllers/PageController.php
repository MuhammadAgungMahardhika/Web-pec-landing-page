<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Models\news;


class PageController extends Controller
{

    public function Main()
    {
        $hospitalData =  Hospital::with(['visions', 'missions'])->first();
        $postData = News::where('type', 'post')->orderBy('id', 'desc')->limit(5)->get();

        $data = [
            "title" => "Padang Eye Center",
            "hospitalData" => $hospitalData,
            "postData" => $postData
        ];
        return view('pages.landing_page', $data);
    }
}
