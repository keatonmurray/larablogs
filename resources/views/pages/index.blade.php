@extends('layouts.app')
@section('content')
    <header class="masthead" style="background-image:url('{{asset('assets/img/home-bg.jpg')}}')">
        <x-header-container>
            <h1>Larablogs</h1>
            <span class="subheading">A blogsite about space</span>
        </x-header-container>
    </header>
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                <h3 class="text-center text-uppercase border-bottom mb-2 pb-2">Explore Blogs</h3>
                @if(count($blogs) > 0)
                    @foreach($blogs as $blog)
                        <div class="post-preview">
                            <a href="/post/{{$blog->id}}">
                                <h2 class="post-title">{{$blog->title}}</h2>
                                <h3 class="post-subtitle">{{Str::limit($blog->title, 30)}}</h3>
                            </a>
                            <p class="post-meta">
                                Posted by
                                {{$blog->user->name}}
                                on {{$blog->created_at}}
                            </p>
                        </div>
                    @endforeach
                    @else
                    <p class="text-muted text-center">There are currently no stories to fetch</p>
                @endif
            </div>
        </div>
    </div>
@endsection