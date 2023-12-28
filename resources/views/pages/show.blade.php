@extends('layouts.app')
@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('{{asset('storage/' . $blogs->image)}}')">
        <x-header-container>
            <div class="post-heading">
                <h1>{{$blogs->title}}</h1>
                <h2 class="subheading">{{Str::limit($blogs->title, 30)}}</h2>
                <span class="meta">
                    Posted by
                    <a href="#!">{{$blogs->author}}</a>
                    on {{$blogs->created_at}}
                    by 
                    {{$blogs->user->name}}
                </span>
            </div>
        </x-header-container>
    </header>
    <!-- Post Content-->
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    {!!$blogs->body!!}               
                </div>
            </div>
        </div>
    </article>
@endsection