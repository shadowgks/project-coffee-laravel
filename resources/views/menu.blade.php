@extends('layouts.visitor.master')

@section('title')
    Menu
@endsection

@section('links')
@endsection

@section('content')
    <section>
        <div class="flex justify-center bg-cover bg-center bg-no-repeat h-96" style="background-image: url('./assets/img/menu-bg.jpg')">
            <div class="flex items-center text-center">
                <div class="max-w-screen-md">
                    <h2 class="mb-4 text-7xl tracking-tight font-extrabold text-gray-900 dark:text-white">MENU</h2>
                    <p class="mb-8 font-light text-gray-300 sm:text-xl">Pure natural food.</p>
                </div>
            </div>
        </div>
        <div class="">
            {{-- B bar links --}}
            <div class="border-b coffee-bg">
                <ul class="flex justify-center flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="mr-2" role="presentation">
                        <a class="inline-block p-4 border-b-2 rounded-t-lg" id="all-tab" data-tabs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="false">All</a>
                    </li>
                    @foreach ($recent_plates['categories'] as $item)
                        <li class="mr-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600" id="{{ $item->name }}-tab" data-tabs-target="#{{ $item->name }}" type="button" role="tab">{{ $item->name }}</button>
                        </li>
                    @endforeach
                </ul>
            </div>
            {{-- E bar links --}}

            {{-- B cards --}}
            <div id="myTabContent">
                <div class="hidden px-4 py-10 seconder-bg" id="all" role="tabpanel" aria-labelledby="all-tab">
                    {{-- B row --}}
                    <div class="grid justify-center gap-3 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-5">
                        @foreach ($recent_plates['plates'] as $card)
                            <div class="max-w-xl border border-gray-800 rounded-lg shadow coffee-bg">
                                <a href="#" class="relative">
                                    <div class="h-60 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ $card->picture }}');"></div>
                                    <span class="absolute top-0 bg-red-800 text-white text-xs font-medium ml-2 mt-2 p-2 rounded">{{ $card->name_categorie }}</span>
                                </a>
                                <div class="p-5">
                                    <a href="#">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            {{ $card->name }}</h5>
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $card->content }}
                                    </p>

                                    <div class="flex items-center justify-between">
                                        <span class="text-2xl font-bold text-gray-900 dark:text-white">{{ $card->price }}DH</span>
                                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-slite-900 hover:bg-red-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 btn-bg">
                                            Buy Now
                                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    {{-- E row --}}
                </div>
                @foreach ($recent_plates['categories'] as $item)
                    <div class="hidden p-4 py-10 seconder-bg" id="{{ $item->name }}" role="tabpanel" aria-labelledby="{{ $item->name }}-tab">
                        <div class="grid justify-center gap-3 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-5">
                            @foreach ($recent_plates['plates'] as $card)
                                @if($card->categorieID == $item->id)
                                <div class="max-w-xl border border-gray-800 rounded-lg shadow coffee-bg">
                                    <a href="#" class="relative">
                                        <div class="h-60 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ $card->picture }}');"></div>
                                        <span class="absolute top-0 bg-red-800 text-white text-xs font-medium ml-2 mt-2 p-2 rounded">{{ $card->name_categorie }}</span>
                                    </a>
                                    <div class="p-5">
                                        <a href="#">
                                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                {{ $card->name }}</h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $card->content }}
                                        </p>
                                        <div class="flex items-center justify-between">
                                            <span class="text-2xl font-bold text-gray-900 dark:text-white">{{ $card->price }}DH</span>
                                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-slite-900 hover:bg-red-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 btn-bg">
                                                Buy Now
                                                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- E cards --}}
        </div>
    </section>
@endsection

@section('footer')
@endsection

@section('scripts')
@endsection
