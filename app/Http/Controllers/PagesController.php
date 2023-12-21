<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about() {
        return view('pages.contents.about');
    }

    public function contact() {
        return view('pages.contents.contact');
    }
}
