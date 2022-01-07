<?php

namespace App\Http\Controllers;

use App\Models\Quotes;
use App\View\Components\welcome;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $nav = collect([
//                ['title' => 'Resume/CV', 'url' => 'https://cv.adenanteng.com' ],
//                ['title' => 'Resume/CV', 'url' => 'https://cv.adenanteng.com' ],
            ]);
            $btn = [
                [ 'btn_title' => 'a.dashboard', 'btn_url' => "home"],
            ];
        }else{
            $nav = collect([
                ['title' => 'Resume/CV', 'url' => 'https://cv.adenanteng.com' ],
//                ['title' => 'Resume/CV', 'url' => 'https://cv.adenanteng.com' ],
            ]);

            $btn = collect([
                ['title' => 'a.register', 'url' => "register"],
            ]);
        }

        $ajj = Quotes::latest()->paginate(10);

        return view('welcome', compact('nav', 'btn', 'ajj'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'quote' => 'required',
            'name' => 'required',
        ]);
        Quotes::create($request->all());

        return redirect()->route('index')->with('succes','Data Berhasil di Input');
    }
}
