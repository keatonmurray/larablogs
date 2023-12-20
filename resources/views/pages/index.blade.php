@extends('main.layout')
@section('content')
    @include('partials.header')
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                @if(count($blogs) > 0)
                    @foreach($blogs as $blog)
                        <div class="post-preview">
                            <a href="post.html">
                                <h2 class="post-title">{{$blog->title}}</h2>
                                <h3 class="post-subtitle">Problems look mighty small from 150 miles up</h3>
                            </a>
                            <p class="post-meta">
                                Posted by
                                <a href="#!">{{$blog->author}}</a>
                                on {{$blog->created_at}}
                            </p>
                        </div>
                        <!-- Divider-->
                        <hr class="my-4" />
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{asset('assets/js/script.js')}}"></script>
@endsection