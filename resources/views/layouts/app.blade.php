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

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>

@livewireScripts

@endsection

@section('footer')
@endsection
