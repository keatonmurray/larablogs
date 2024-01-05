@extends('layouts.app')
@section('content')
    <header class="masthead" style="background-image:url('{{asset('assets/img/astronaut.jpg')}}'); margin-top: -100px">
        <x-header-container>
            <h1>Login</h1>
            <span class="subheading">Login to your account in the form below</span>
        </x-header-container>
        <!-- Main Content-->
        <div class="page-heading position-relative">
            <main class="mb-4">
                <div class="container px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5 justify-content-center">
                        <div class="col-md-10 col-lg-8 col-xl-7">
                            <div class="my-5">
                                <x-auth-session-status class="mb-4" :status="session('status')" />
                                <form method="POST" action="{{ route('login') }}" class="mx-4 my-4">
                                    @csrf
                                    <!-- Email Address -->
                                    <div>
                                        <div class="form-floating">
                                            <input class="form-control px-3" name="email" id="email" type="text" placeholder="Enter your email..." data-sb-validations="required" :value="old('email')" required autofocus autocomplete="username" />
                                            <label for="email" :value="__('Email')" class="px-3">Email Address</label>
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                    </div>
                                    <!-- Password -->
                                    <div class="mt-4">
                                        <div class="form-floating">
                                            <input class="form-control px-3" name="password" id="password" type="password" placeholder="Enter your password..." data-sb-validations="required" :value="old('password')"required autocomplete="current-password" />
                                            <label for="password" :value="__('Password')" class="px-3">Password</label>
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                    </div>
                                    <!-- Remember Me -->
                                    <div class="block mt-4">
                                        <label for="remember_me" class="inline-flex items-center">
                                            <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                                            <span class="ms-2 text-sm text-white">{{ __('Remember me') }}</span>
                                        </label>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-white hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
                                    <div class="d-flex gap-2 justify-content-center mt-4">
                                        <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">
                                            {{ __('Log in') }}
                                        </button>
                                        <a href="/register" class="btn btn-primary text-uppercase" id="submitButton" type="button">
                                            {{ __('Signup') }}
                                        </a>
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