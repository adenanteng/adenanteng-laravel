<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CvController extends Controller
{
    public function index() {
        return view('cv');
    }
}
