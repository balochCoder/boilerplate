{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
@extends('admin.layouts.auth.main')
@section('content')
    <!-- Left Text-->
    <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
        <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid"
                src="{{ asset('admin/app-assets/images/pages/login-v2.svg') }}" alt="Login V2" /></div>
    </div>
    <!-- /Left Text-->
    <!-- Login-->
    <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
        <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
            <h2 class="card-title fw-bold mb-1">Welcome to Vuexy! 👋</h2>
            <p class="card-text mb-2">Please sign-in to your account and start the adventure</p>
            <form class="auth-login-form mt-2" action="index.html" method="POST">
                <div class="mb-1">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control" id="email" type="text" name="email"
                        placeholder="john@example.com" aria-describedby="email" autofocus="" tabindex="1" />
                </div>
                <div class="mb-1">
                    <div class="d-flex justify-content-between">
                        <label class="form-label" for=" ">Password</label><a
                            href="auth-forgot-password-cover.html"><small>Forgot Password?</small></a>
                    </div>
                    <div class="input-group input-group-merge form-password-toggle">
                        <input class="form-control form-control-merge" id="login-password" type="password"
                            name="login-password" placeholder="············" aria-describedby="login-password"
                            tabindex="2" /><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                    </div>
                </div>
                <div class="mb-1">
                    <div class="form-check">
                        <input class="form-check-input" id="remember-me" type="checkbox" tabindex="3" />
                        <label class="form-check-label" for="remember-me"> Remember Me</label>
                    </div>
                </div>
                <button class="btn btn-primary w-100" tabindex="4">Sign in</button>
            </form>
            <p class="text-center mt-2"><span>New on our platform?</span><a
                    href="auth-register-cover.html"><span>&nbsp;Create an account</span></a></p>
            <div class="divider my-2">
                <div class="divider-text">or</div>
            </div>
            <div class="auth-footer-btn d-flex justify-content-center"><a class="btn btn-facebook" href="#"><i
                        data-feather="facebook"></i></a><a class="btn btn-twitter white" href="#"><i
                        data-feather="twitter"></i></a><a class="btn btn-google" href="#"><i data-feather="mail"></i></a><a
                    class="btn btn-github" href="#"><i data-feather="github"></i></a></div>
        </div>
    </div>
    <!-- /Login-->
    </div>
@endsection
