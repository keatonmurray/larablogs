<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
        <title>{{config('app.name')}}</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" />
        <!-- CKEDITOR CDN -->
        <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
    </head>
    <body>
        <header class="masthead" style="background-image:url('{{asset('assets/img/post-bg.jpg')}}')">
            <x-header-container>
                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </div>
                @endif
                <h1 class="text-body-emphasis">{{ __('Awesome!') }}</h1>
                <p class="subheading text-white">
                    {{ __("We've sent you a confirmation link to your email address! Didn't get it? We'll send you another one.") }}
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
    </body>
    @include('partials.footer')
</html>
