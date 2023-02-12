@extends('layouts.visitor.master')

@section('title')
Login
@endsection

@section('links')
@endsection


@section('content')
<section>
    <div class="bg-right h-screen backdrop-blur" style="background-image: url('./assets/img/background-login.png')">
        <x-guest-layout>
            <x-jet-authentication-card>
                <x-slot name="logo">
                    <x-jet-authentication-card-logo />
                </x-slot>
        
                <x-jet-validation-errors class="mb-4" />
        
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
        
                <form method="POST" action="{{ route('login') }}">
                    @csrf
        
                    <div>
                        <x-jet-label for="email" value="{{ __('Email') }}" class="text-white" />
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    </div>
        
                    <div class="mt-4">
                        <x-jet-label for="password" value="{{ __('Password') }}" class="text-white" />
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    </div>
        
                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-white">{{ __('Remember me') }}</span>
                        </label>
                    </div>
        
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-white hover:text-gray-400" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
        
                        <x-jet-button class="ml-4">
                            {{ __('Log in') }}
                        </x-jet-button>
                    </div>
                </form>
            </x-jet-authentication-card>
        </x-guest-layout>
    </div>
</section>
@endsection

@section('footer')
@endsection

@section('scripts')
@endsection
