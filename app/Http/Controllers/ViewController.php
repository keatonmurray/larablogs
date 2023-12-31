<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;

class ViewController extends Controller
{

    public function __construct() {
        $this->middleware(['auth', 'verified'], ['except' => ['index', 'show']]);
    }
    
    public function index() {
        $blogs = Blogs::orderBy('created_at', 'desc')->get();
        return view('pages.index')->with('blogs', $blogs);
    }

    public function create() {
        return view('pages.create');
    }

    public function store(Request $request) {

        $formFields = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Blogs::Create($formFields);
        return redirect('/')->with('message', 'Listing created successfully!');
    }

    public function show($id) {
        $blogs = Blogs::find($id);
        return view('pages.show')->with('blogs', $blogs);
    }

    public function edit($id) {
        $blogs = Blogs::find($id);
        return view('pages.edit')->with('blogs', $blogs);
    }

    public function update(Request $request, Blogs $id) {
        $formFields = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        $id->update($formFields);
        return redirect('/');
    }

    public function destroy(string $id) {

        $blog = Blogs::find($id);
        $blog->delete();

        return redirect('/');
    }
}
