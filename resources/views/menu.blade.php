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
        <div class="border-b coffee-bg">
            <ul class="flex justify-center flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="all-tab" data-tabs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="false">All</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600" id="drinks-tab" data-tabs-target="#drinks" type="button" role="tab" aria-controls="drinks" aria-selected="false">Drinks</button>
                </li>
            </ul>
        </div>
        <div id="myTabContent">
            <div class="hidden p-4 seconder-bg" id="all" role="tabpanel" aria-labelledby="all-tab">
                <div class="grid grid-cols-1 md:grid-cols-4 md:gap-4">
                    <div class="max-w-sm border border-gray-800 rounded-lg shadow coffee-bg">
                        <a href="#">
                            <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-slite-900 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 btn-bg">
                                Read more
                                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden p-4 seconder-bg" id="drinks" role="tabpanel" aria-labelledby="drinks-tab">
                <div class="grid grid-cols-1 md:grid-cols-4 md:gap-4">
                    <div class="max-w-sm border border-gray-800 rounded-lg shadow coffee-bg">
                        <a href="#">
                            <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-slite-900 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 btn-bg">
                                Read more
                                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
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
