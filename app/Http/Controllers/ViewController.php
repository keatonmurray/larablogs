<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index() {
        $blogs = Blogs::all();
        return view('pages.index', $blogs);
    }
}
