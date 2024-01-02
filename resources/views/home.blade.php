@extends('layouts.app')
@section('content')
<header class="masthead" style="background-image:url('{{asset('assets/img/post-bg.jpg')}}')">
    <x-header-container>
        <h1>Welcome</h1>  
        <span class="subheading">Great to have you around! Feel free to edit, remove, or create new blogs using the navigation below.</span>
    </x-header-container>
</header>
<div class="container py-4">
    <div class="text-center">
        <a href="/create-post" class="btn btn-primary">Create New Post</a>
        <a href="/" class="btn btn-primary">Show All</a>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                    <div class="jumbotron text-center">
                        <h3>Your Blog Posts</h3>
                        <table class="table table-striped">
                            <tr>
                                <th>Post Title</th>
                                <th>Action</th>
                            </tr>
                            @if(count($blogs)  > 0)
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td><a href="/post/{{$blog->id}}" class="fw-bold text-decoration-none text-black">{{$blog->title}}</a></td>
                                        <td>
                                            <form action="" method="POST">
                                                @csrf
                                                <a href="/edit-post/{{$blog->id}}" class="btn btn-secondary btn-sm">Edit</a>
                                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                @else
                                <p>You have currently not posted anything</p>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
