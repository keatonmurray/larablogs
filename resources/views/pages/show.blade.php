@extends('main.layout')
@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('{{asset('assets/img/post-bg.jpg')}}')">
        <x-header-container>
            <div class="post-heading">
                <h1>{{$blogs->title}}</h1>
                <h2 class="subheading">{{$blogs->subtext}}</h2>
                <span class="meta">
                    Posted by
                    <a href="#!">{{$blogs->author}}</a>
                    on {{$blogs->created_at}}
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
                    <a href="#!"><img class="img-fluid" src="{{asset('storage/' . $blogs->image)}}" /></a>
                        <p>    
                            Placeholder text by
                            <a href="http://spaceipsum.com/">Space Ipsum</a>
                            &middot; Images by
                            <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a>
                        </p>                   
                </div>
            </div>
        </div>
    </article>
@endsection