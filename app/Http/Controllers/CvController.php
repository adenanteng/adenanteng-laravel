<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CvController extends Controller
{
    public function index() {
        $nav = collect([
//            ['title' => 'Resume/CV', 'url' => 'https://cv.adenanteng.com' ],
//            ['title' => 'Resume/CV', 'url' => 'https://cv.adenanteng.com' ],
        ]);

        $btn = collect([
//            ['title' => 'a.sign in', 'url' => "login"],
        ]);


        return view('cv', compact('nav', 'btn'));
    }
}
