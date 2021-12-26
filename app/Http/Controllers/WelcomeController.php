<?php

namespace App\Http\Controllers;

use App\Models\Quotes;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class WelcomeController extends Controller
{
    public function index()
    {
        $ajj = Quotes::latest()->paginate(10);
        return view ('welcome',compact('ajj'));
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

        return redirect()->route('ajj.index')->with('succes','Data Berhasil di Input');
    }
}
