@extends('layouts.app')
@section('content')
<header class="masthead" style="background-image:url('{{asset('assets/img/post-bg.jpg')}}')">
    <x-header-container>
        @foreach($blogs as $blog)
            <h1>Welcome</h1>  
            <span class="subheading">Great to have you around, {{$blog->user->name}}!</span>
        @endforeach  
    </x-header-container>
</header>
@endsection
