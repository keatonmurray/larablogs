@extends('layouts.app')
@section('content')
    <header class="masthead" style="background-image:url('{{asset('assets/img/astronaut.jpg')}}'); margin-top: -100px">
        <x-header-container>
            <h1>Enter New Password</h1>
        </x-header-container>
        <div class="page-heading position-relative">
            <main class="mb-4">
                <div class="container px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5 justify-content-center">
                        <div class="col-md-10 col-lg-8 col-xl-7">
                            <div class="my-5">
                                <form method="POST" action="{{ route('password.store') }}" class="mx-4 my-4">
                                    @csrf
                                    <!-- Password Reset Token -->
                                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                    <!-- Email Address -->
                                    <div>
                                        <div class="form-floating">
                                            <input class="form-control px-3" name="email" id="email" type="text" placeholder="Enter your email..." data-sb-validations="required" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username" />
                                            <label for="email" :value="__('Email')" class="px-3">Email Address</label>
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                    </div>
                                    <!-- Password -->
                                    <div class="mt-4">
                                        <div class="form-floating">
                                            <input class="form-control px-3" name="password" id="password" type="password" placeholder="Enter your password..." data-sb-validations="required" :value="old('password')" required autocomplete="current-password" />
                                            <label for="password" :value="__('Password')" class="px-3">New Password</label>
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                    </div>
                                    <!-- Confirm Password -->
                                    <div class="mt-4">
                                        <div class="form-floating">
                                            <input class="form-control px-3" name="password_confirmation" id="password_confirmation" type="password" placeholder="Enter your password..." data-sb-validations="required" :value="old('password')"required autocomplete="new-password" />
                                            <label for="password_confirmation" :value="__('Password')" class="px-3">Confirm Password</label>
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-end mt-4">
                                        <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">
                                            {{ __('Reset Password') }}
                                        </button>
                                        <a href="/" class="btn btn-primary text-uppercase" id="submitButton" type="button">
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