@extends('layouts.dashboard.master')

@section('title')
    Profile
@endsection

@section('links')
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

@section('bar')
    Profile
@endsection

@section('content')
    <div class="w-full px-6 mx-auto">
        <div class="relative flex items-center p-0 mt-6 overflow-hidden bg-center bg-cover min-h-75 rounded-2xl"
            style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%">
            <span
                class="absolute inset-y-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-purple-700 to-pink-500 opacity-60"></span>
        </div>
        <div
            class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 -mt-16 overflow-hidden break-words border-0 shadow-blur rounded-2xl bg-white/80 bg-clip-border backdrop-blur-2xl backdrop-saturate-200">
            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-auto max-w-full px-3">
                    <div
                        class="text-base ease-soft-in-out h-18.5 w-18.5 relative inline-flex items-center justify-center rounded-xl text-white transition-all duration-200">
                        <img src="{{Auth::user()->profile_photo_url}}" alt="profile_image"
                            class="w-full shadow-soft-sm rounded-xl" />
                    </div>
                </div>
                <div class="flex-none w-auto max-w-full px-3 my-auto">
                    <div class="h-full">
                        <h5 class="mb-1">{{ Auth::user()->name }}</h5>
                        <p class="mb-0 font-semibold leading-normal text-sm">{{ Auth::user()->email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>

    @livewireScripts
@endsection

@section('footer')
@endsection
