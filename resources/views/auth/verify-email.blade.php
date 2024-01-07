@extends('layouts.app')
@section('content')
    <header class="masthead" style="background-image:url('{{asset('assets/img/space.jpg')}}')">
        <x-header-container>
            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif
            <h1 class="text-body-emphasis">{{ __('Awesome!') }}</h1>
            <p class="subheading text-white">
                {{ __("We've sent a confirmation link to your email address! Didn't get it? We'll send you another one.") }}
            </p>
            <div class="d-inline-flex gap-2 mb-5">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">
                        {{ __('Resend Email') }}
                    </button>
                </form>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="btn btn-secondary text-uppercase" id="submitButton" type="submit">
                        {{ __('Logout') }}
                    </button>
                </form>
            </div>
        </x-header-container>
    </header>
@endsection