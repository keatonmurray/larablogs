<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;

class ViewController extends Controller
{

    public function __construct() {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    
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
            'body' => 'required',
        ]);

        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        Blogs::create([
            'title' => request('title'),
            'subtext' => request('subtext'),
            'body' => request('body'),
            'image' => request('image'),
            'user_id' => auth()->id()
        ]);
        return redirect('/')->with('message', 'Listing created successfully!');
    }

    public function show($id) {
        $blogs = Blogs::find($id);
        return view('pages.show')->with('blogs', $blogs);
    }

    public function edit($id) {
        return view('pages.edit');
    }
}
