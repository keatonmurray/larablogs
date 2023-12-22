@extends('main.layout')
@section('content')
    <header class="masthead" style="background-image:url('{{asset('assets/img/post-bg.jpg')}}'); margin-top: -100px">
        <x-header-container>
            <h1>Signup</h1>
            <span class="subheading">Create an account to share your first post!</span>
        </x-header-container>
        <!-- Main Content-->
        <div class="page-heading position-relative">
            <main class="mb-4">
                <div class="container px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5 justify-content-center">
                        <div class="col-md-10 col-lg-8 col-xl-7">
                            <div class="my-5">
                                <form method="POST" action="{{ route('register') }}" class="mx-4 my-4">
                                    @csrf
                                     <!-- Name -->
                                     <div>
                                        <div class="form-floating">
                                            <input class="form-control px-3" name="name" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" :value="old('name')" required autofocus autocomplete="username" />
                                            <label for="name" :value="__('name')" class="px-3">Name</label>
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>
                                    </div>
                                    <!-- Email Address -->
                                    <div class="mt-4">
                                        <div class="form-floating">
                                            <input class="form-control px-3" name="email" id="email" type="text" placeholder="Enter your email addess..." data-sb-validations="required" :value="old('email')" required autofocus autocomplete="username" />
                                            <label for="email" :value="__('Email')" class="px-3">Email Address</label>
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                    </div>
                                    <!-- Password -->
                                    <div class="mt-4">
                                        <div class="form-floating">
                                            <input class="form-control px-3" id="password" type="password" name="password"  placeholder="Enter your password..." data-sb-validations="required" required autocomplete="new-password"/>
                                            <label for="password" :value="__('Password')" class="px-3">Password</label>
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                    </div>
                                    <!-- Confirm Password --> 
                                    <div class="mt-4">
                                        <div class="form-floating">
                                            <input class="form-control px-3" id="password_confirmation" type="password" name="password_confirmation"  placeholder="Confirm your password..." data-sb-validations="required" required autocomplete="new-password"/>
                                            <label  for="password_confirmation" :value="__('Confirm Password')" class="px-3">Confirm Password</label>
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-end mt-4">
                                        <a class="underline text-sm text-white" href="{{ route('login') }}">
                                            {{ __('Already registered?') }}
                                        </a>
                                    </div>
                                    <div class="mt-4">
                                        <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </header>
@endsection