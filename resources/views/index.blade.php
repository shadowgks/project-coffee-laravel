@extends('layouts.visitor.master')

@section('title')
Home
@endsection

@section('links')

@endsection

@section('content')
<section>
    <div class="bg-cover bg-center h-screen backdrop-blur" style="background-image: url('./assets/img/slider-bg-coffe-1.jpg')">
        <div class="flex justify-center items-center h-screen text-center">
            <div class="max-w-screen-md">
                <h2 class="mb-4 text-7xl tracking-tight font-extrabold text-gray-900 dark:text-white">COFFEE SHOPEE</h2>
                <p class="mb-8 font-light text-gray-300 sm:text-xl">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex placeat perferendis quibusdam quis, autem fugit aspernatur enim provident dolorem a fugiat debitis alias similique totam, eligendi accusamus nisi corporis amet?.</p>
                <div class="flex justify-center flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
                    <a href="{{route('menu')}}" class="inline-flex items-center justify-center px-4 py-2.5 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg dark:text-slite-900 btn-bg">
                        <ion-icon name="grid-outline" class="mr-2"></ion-icon>
                        Show Menu
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('footer')

@endsection

@section('scripts')

@endsection
