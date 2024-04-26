<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function Main()
    {
        $hospitalData =  Hospital::with(['visions', 'missions'])->first();

        $data = [
            "title" => "Padang Eye Center",
            "hospitalData" => $hospitalData,
        ];
        return view('template.main', $data);
    }
}
