@extends('layouts.app')
@section('content')
    <header class="masthead" style="background-image:url('{{asset('assets/img/astronaut.jpg')}}'); margin-top: -100px">
        <x-header-container>
            <h1>Reset Password</h1>
            <span class="subheading"> {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}</span>
        </x-header-container>
        <div class="page-heading position-relative">
            <main class="mb-4">
                <div class="container px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5 justify-content-center">
                        <div class="col-md-10 col-lg-8 col-xl-7">
                            <div class="my-5">
                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />
                                <form method="POST"  action="{{ route('password.email') }}" class="mx-4 my-4">
                                    @csrf
                                    <!-- Email Address -->
                                    <div>
                                        <div class="form-floating">
                                            <input class="form-control px-3" name="email" id="email" type="text" placeholder="Enter your email..." data-sb-validations="required" :value="old('email')" required autofocus autocomplete="username" />
                                            <label for="email" :value="__('Email')" class="px-3">Email Address</label>
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-end mt-4">
                                        <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">
                                            {{ __('Send Reset Link') }}
                                        </button>
                                        <a href="/" class="btn btn-primary text-uppercase" id="submitButton" type="buttong">
                                            {{ __('Go Back') }}
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