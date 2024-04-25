<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    public function Main()
    {
        $data = [
            "name" => "Padang Eye Center",
        ];
        return view('template.main', $data);
    }
}
