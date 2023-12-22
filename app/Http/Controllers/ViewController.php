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

    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'subtext' => 'required',
            'author' => 'required',
            'body' => 'required'
        ]);

        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        Blogs::create($formFields);
        return redirect('/')->with('message', 'Listing created successfully!');
    }

    public function show($id) {
        $blogs = Blogs::find($id);
        return view('pages.show')->with('blogs', $blogs);
    }

    public function edit() {
        return view('pages.edit');
    }
}
