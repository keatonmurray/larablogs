<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index() {
        $blogs = Blogs::all();
        return view('pages.index')->with('blogs', $blogs);
    }

    public function create() {
        return view('pages.create');
    }

    public function store() {
        echo "Post saved!";
    }

    public function show($id) {
        $blogs = Blogs::find($id);
        return view('pages.show')->with('blogs', $blogs);
    }
}
