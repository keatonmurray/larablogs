@extends('main.layout')
@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('{{asset('assets/img/post-bg.jpg')}}')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="post-heading">
                        <h1>{{$blogs->title}}</h1>
                        <h2 class="subheading">{{$blogs->subtext}}</h2>
                        <span class="meta">
                            Posted by
                            <a href="#!">{{$blogs->author}}</a>
                            on {{$blogs->created_at}}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Post Content-->
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    {!!$blogs->body!!}                   
                    <h2 class="section-heading">Reaching for the Stars</h2>
                    <p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>
                    <a href="#!"><img class="img-fluid" src="{{asset('assets/img/post-sample-image.jpg')}}" alt="..." /></a>
                    <span class="caption text-muted">To go places and do things that have never been done before – that’s what living is all about.</span>
                    <p>Space, the final frontier. These are the voyages of the Starship Enterprise. Its five-year mission: to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before.</p>
                    <p>As I stand out here in the wonders of the unknown at Hadley, I sort of realize there’s a fundamental truth to our nature, Man must explore, and this is exploration at its greatest.</p>
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