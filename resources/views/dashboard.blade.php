@extends('layouts.dashboard.master')

@section('title')
    Dashboard
@endsection

@section('links')
@endsection

@section('bar')
    Dashboard
@endsection

@section('content')
    <!-- row 1 -->
    <div class="flex flex-wrap -mx-3">
        <!-- card1 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans font-semibold leading-normal text-sm">Admins</p>
                                <h5 class="mb-0 font-bold">
                                    {{ $recent_plates['statistic_admins'] }}
                                </h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                                <div class="flex justify-center items-center h-full">
                                    <svg fill="#ffffff" height="25px" width="25px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 474.565 474.565" xml:space="preserve" stroke="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g>
                                                <path d="M255.204,102.3c-0.606-11.321-12.176-9.395-23.465-9.395C240.078,95.126,247.967,98.216,255.204,102.3z"></path>
                                                <path d="M134.524,73.928c-43.825,0-63.997,55.471-28.963,83.37c11.943-31.89,35.718-54.788,66.886-63.826 C163.921,81.685,150.146,73.928,134.524,73.928z"></path>
                                                <path
                                                    d="M43.987,148.617c1.786,5.731,4.1,11.229,6.849,16.438L36.44,179.459c-3.866,3.866-3.866,10.141,0,14.015l25.375,25.383 c1.848,1.848,4.38,2.888,7.019,2.888c2.61,0,5.125-1.04,7.005-2.888l14.38-14.404c2.158,1.142,4.55,1.842,6.785,2.827 c0-0.164-0.016-0.334-0.016-0.498c0-11.771,1.352-22.875,3.759-33.302c-17.362-11.174-28.947-30.57-28.947-52.715 c0-34.592,28.139-62.739,62.723-62.739c23.418,0,43.637,13.037,54.43,32.084c11.523-1.429,22.347-1.429,35.376,1.033 c-1.676-5.07-3.648-10.032-6.118-14.683l14.396-14.411c1.878-1.856,2.918-4.38,2.918-7.004c0-2.625-1.04-5.148-2.918-7.004 l-25.361-25.367c-1.94-1.941-4.472-2.904-7.003-2.904c-2.532,0-5.063,0.963-6.989,2.904l-14.442,14.411 c-5.217-2.764-10.699-5.078-16.444-6.825V9.9c0-5.466-4.411-9.9-9.893-9.9h-35.888c-5.451,0-9.909,4.434-9.909,9.9v20.359 c-5.73,1.747-11.213,4.061-16.446,6.825L75.839,22.689c-1.942-1.941-4.473-2.904-7.005-2.904c-2.531,0-5.077,0.963-7.003,2.896 L36.44,48.048c-1.848,1.864-2.888,4.379-2.888,7.012c0,2.632,1.04,5.148,2.888,7.004l14.396,14.403 c-2.75,5.218-5.063,10.708-6.817,16.438H23.675c-5.482,0-9.909,4.441-9.909,9.915v35.889c0,5.458,4.427,9.908,9.909,9.908H43.987z">
                                                </path>
                                                <path d="M354.871,340.654c15.872-8.705,26.773-25.367,26.773-44.703c0-28.217-22.967-51.168-51.184-51.168 c-9.923,0-19.118,2.966-26.975,7.873c-4.705,18.728-12.113,36.642-21.803,52.202C309.152,310.022,334.357,322.531,354.871,340.654z ">
                                                </path>
                                                <path
                                                    d="M460.782,276.588c0-5.909-4.799-10.693-10.685-10.693H428.14c-1.896-6.189-4.411-12.121-7.393-17.75l15.544-15.544 c2.02-2.004,3.137-4.721,3.137-7.555c0-2.835-1.118-5.553-3.137-7.563l-27.363-27.371c-2.08-2.09-4.829-3.138-7.561-3.138 c-2.734,0-5.467,1.048-7.547,3.138l-15.576,15.552c-5.623-2.982-11.539-5.481-17.751-7.369v-21.958 c0-5.901-4.768-10.685-10.669-10.685H311.11c-2.594,0-4.877,1.04-6.739,2.578c3.26,11.895,5.046,24.793,5.046,38.552 c0,8.735-0.682,17.604-1.956,26.423c7.205-2.656,14.876-4.324,22.999-4.324c36.99,0,67.086,30.089,67.086,67.07 c0,23.637-12.345,44.353-30.872,56.303c13.48,14.784,24.195,32.324,31.168,51.976c1.148,0.396,2.344,0.684,3.54,0.684 c2.733,0,5.467-1.04,7.563-3.13l27.379-27.371c2.004-2.004,3.106-4.721,3.106-7.555s-1.102-5.551-3.106-7.563l-15.576-15.552 c2.982-5.621,5.497-11.555,7.393-17.75h21.957c2.826,0,5.575-1.118,7.563-3.138c2.004-1.996,3.138-4.72,3.138-7.555 L460.782,276.588z">
                                                </path>
                                                <path
                                                    d="M376.038,413.906c-16.602-48.848-60.471-82.445-111.113-87.018c-16.958,17.958-37.954,29.351-61.731,29.351 c-23.759,0-44.771-11.392-61.713-29.351c-50.672,4.573-94.543,38.17-111.145,87.026l-9.177,27.013 c-2.625,7.773-1.368,16.338,3.416,23.007c4.783,6.671,12.486,10.631,20.685,10.631h315.853c8.215,0,15.918-3.96,20.702-10.631 c4.767-6.669,6.041-15.234,3.4-23.007L376.038,413.906z">
                                                </path>
                                                <path d="M120.842,206.782c0,60.589,36.883,125.603,82.352,125.603c45.487,0,82.368-65.014,82.368-125.603 C285.563,81.188,120.842,80.939,120.842,206.782z"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- card2 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans font-semibold leading-normal text-sm">Users</p>
                                <h5 class="mb-0 font-bold">
                                    {{ $recent_plates['statistic_users'] }}
                                </h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                                <div class="flex justify-center items-center h-full">
                                    <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M7 8C7 5.23858 9.23858 3 12 3C14.7614 3 17 5.23858 17 8C17 10.7614 14.7614 13 12 13C9.23858 13 7 10.7614 7 8ZM12 5C10.3431 5 9 6.34315 9 8C9 9.65685 10.3431 11 12 11C13.6569 11 15 9.65685 15 8C15 6.34315 13.6569 5 12 5Z"
                                                fill="#ffffff"></path>
                                            <path
                                                d="M6.28645 5.9581C6.81559 5.7999 7.1163 5.2427 6.9581 4.71355C6.7999 4.18441 6.2427 3.8837 5.71355 4.0419C4.06991 4.53331 3 6.1924 3 8C3 9.8076 4.06991 11.4667 5.71355 11.9581C6.2427 12.1163 6.7999 11.8156 6.9581 11.2864C7.1163 10.7573 6.81559 10.2001 6.28645 10.0419C5.62978 9.84558 5 9.07911 5 8C5 6.92089 5.62978 6.15442 6.28645 5.9581Z"
                                                fill="#ffffff"></path>
                                            <path
                                                d="M18.2864 4.0419C17.7573 3.8837 17.2001 4.18441 17.0419 4.71355C16.8837 5.2427 17.1844 5.7999 17.7136 5.9581C18.3702 6.15442 19 6.92089 19 8C19 9.07911 18.3702 9.84558 17.7136 10.0419C17.1844 10.2001 16.8837 10.7573 17.0419 11.2864C17.2001 11.8156 17.7573 12.1163 18.2864 11.9581C19.9301 11.4667 21 9.8076 21 8C21 6.1924 19.9301 4.53331 18.2864 4.0419Z"
                                                fill="#ffffff"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M12 14C10.0062 14 8.09544 14.2542 6.64442 14.8986C5.16516 15.5554 4 16.7142 4 18.5C4 18.9667 4.08524 19.4978 4.40272 20.0043C4.72017 20.5106 5.20786 20.8939 5.83781 21.1789C7.04688 21.7259 8.98391 22 12 22C15.0161 22 16.9531 21.7259 18.1622 21.1789C18.7921 20.8939 19.2798 20.5106 19.5973 20.0043C19.9148 19.4978 20 18.9667 20 18.5C20 16.7142 18.8348 15.5554 17.3556 14.8986C15.9046 14.2542 13.9938 14 12 14ZM6 18.5C6 17.7858 6.40184 17.1946 7.45609 16.7264C8.53857 16.2458 10.1278 16 12 16C13.8722 16 15.4614 16.2458 16.5439 16.7264C17.5982 17.1946 18 17.7858 18 18.5C18 18.7236 17.9602 18.8502 17.9027 18.942C17.8452 19.0338 17.7079 19.1893 17.3378 19.3567C16.5469 19.7145 14.9839 20 12 20C9.01609 20 7.45312 19.7145 6.66219 19.3567C6.29214 19.1893 6.15483 19.0338 6.09728 18.942C6.03976 18.8502 6 18.7236 6 18.5Z"
                                                fill="#ffffff"></path>
                                            <path
                                                d="M19.1042 13.5555C19.3497 13.0608 19.9498 12.8587 20.4445 13.1042C21.9384 13.8456 23 15.1261 23 17C23 17.5523 22.5523 18 22 18C21.4477 18 21 17.5523 21 17C21 16.0458 20.525 15.3769 19.5555 14.8958C19.0608 14.6503 18.8587 14.0502 19.1042 13.5555Z"
                                                fill="#ffffff"></path>
                                            <path
                                                d="M4.44452 14.8958C4.93924 14.6503 5.14127 14.0502 4.89577 13.5555C4.65027 13.0608 4.0502 12.8587 3.55548 13.1042C2.06158 13.8456 1 15.1261 1 17C1 17.5523 1.44772 18 2 18C2.55228 18 3 17.5523 3 17C3 16.0458 3.47503 15.3769 4.44452 14.8958Z"
                                                fill="#ffffff"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- card3 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans font-semibold leading-normal text-sm">Plates</p>
                                <h5 class="mb-0 font-bold">
                                    {{ $recent_plates['statistic_plates'] }}
                                </h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                                <div class="flex justify-center items-center h-full">
                                    <svg fill="#ffffff" height="25px" width="25px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.999 511.999" xml:space="preserve" stroke="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g>
                                                <g>
                                                    <path
                                                        d="M497.314,426.496l-88.199-88.204c-15.367-15.376-38.255-18.454-56.853-9.631l-22.086-22.086 c21.422-32.394,17.887-76.551-10.614-105.058l-61.053-61.053c-15.596-15.596-39.238,7.99-23.608,23.608l42.334,42.334 l-23.614,23.613l-42.332-42.332c-15.596-15.596-39.238,7.99-23.608,23.608l42.331,42.331l-23.615,23.613l-42.33-42.33 c-15.596-15.596-39.238,7.99-23.608,23.608l61.053,61.053c28.492,28.502,72.651,32.054,105.059,10.616l22.084,22.085 c-8.825,18.6-5.742,41.483,9.63,56.852l88.199,88.21c19.53,19.519,51.31,19.526,70.83-0.006 C516.89,477.75,516.9,446.071,497.314,426.496z">
                                                    </path>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path
                                                        d="M255.994,66.788c-50.466,0-97.966,19.7-133.736,55.477C86.481,158.035,66.781,205.533,66.781,256 c0,104.334,84.879,189.213,189.213,189.213c20.949,0,41.468-3.551,60.959-10.202l-2.282-2.282 c-15.967-15.962-24.353-37.428-24.266-59.205c-9.673,2.543-19.695,3.848-29.869,3.848c-31.249,0-60.596-12.146-82.639-34.195 l-61.048-61.053c-30.441-30.389-10.624-83.059,32.625-85.422c1.389-25.431,21.745-45.83,47.222-47.222 c2.362-43.242,55.01-63.054,85.422-32.625l61.053,61.053c29.923,29.923,40.607,73.161,30.314,112.476 c0.164,0.001,0.326,0.001,0.49,0.001c22.222,0,43.092,8.63,58.754,24.298l2.276,2.276c6.652-19.492,10.202-40.01,10.202-60.959 C445.207,151.667,360.328,66.788,255.994,66.788z">
                                                    </path>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path
                                                        d="M255.994,0.006c-68.276,0-132.529,26.657-180.931,75.059C26.657,123.459,0,187.719,0,256 c0,141.154,114.84,255.994,255.994,255.994c39.533,0,77.701-9.009,112.12-25.816l-25.336-25.339 c-27.294,11.603-56.669,17.765-86.784,17.765c-122.741,0-222.603-99.862-222.603-222.603c0-59.389,23.173-115.274,65.26-157.349 c42.07-42.08,97.954-65.254,157.344-65.254c122.741,0,222.603,99.862,222.603,222.603c0,30.11-6.164,59.487-17.768,86.786 l25.079,25.08c16.884-34.707,26.08-72.999,26.08-111.866C511.988,114.846,397.148,0.006,255.994,0.006z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- card4 -->
        <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans font-semibold leading-normal text-sm">Categories</p>
                                <h5 class="mb-0 font-bold">
                                    {{ $recent_plates['statistic_categories'] }}
                                </h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                                <div class="flex justify-center items-center h-full">
                                    <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path d="M7.24 2H5.34C3.15 2 2 3.15 2 5.33V7.23C2 9.41 3.15 10.56 5.33 10.56H7.23C9.41 10.56 10.56 9.41 10.56 7.23V5.33C10.57 3.15 9.42 2 7.24 2Z" fill="#ffffff"></path>
                                            <path d="M18.6695 2H16.7695C14.5895 2 13.4395 3.15 13.4395 5.33V7.23C13.4395 9.41 14.5895 10.56 16.7695 10.56H18.6695C20.8495 10.56 21.9995 9.41 21.9995 7.23V5.33C21.9995 3.15 20.8495 2 18.6695 2Z" fill="#ffffff"></path>
                                            <path
                                                d="M18.6695 13.4297H16.7695C14.5895 13.4297 13.4395 14.5797 13.4395 16.7597V18.6597C13.4395 20.8397 14.5895 21.9897 16.7695 21.9897H18.6695C20.8495 21.9897 21.9995 20.8397 21.9995 18.6597V16.7597C21.9995 14.5797 20.8495 13.4297 18.6695 13.4297Z"
                                                fill="#ffffff"></path>
                                            <path d="M7.24 13.4297H5.34C3.15 13.4297 2 14.5797 2 16.7597V18.6597C2 20.8497 3.15 21.9997 5.33 21.9997H7.23C9.41 21.9997 10.56 20.8497 10.56 18.6697V16.7697C10.57 14.5797 9.42 13.4297 7.24 13.4297Z" fill="#ffffff"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- table 1 -->
    <div class="flex flex-wrap -mx-3 pt-4">
        <div class="flex-none w-full max-w-full px-3">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-6 flex justify-between pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <h6>Plates</h6>
                    <a href="{{ route('dashboard.create') }}"
                        class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25"> <i class="fas fa-plus" aria-hidden="true"> </i>&nbsp;&nbsp;Add New Plate</a>
                </div>
                {{-- B Alert --}}
                @if ($message = Session::get('success'))
                    <div id="alert-border-2" class="flex items-center p-2 m-4 rounded-lg bg-gradient-to-tl from-gray-900 to-slate-800" role="alert">
                        <svg width="25px" height="25px" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000000" transform="rotate(0)matrix(1, 0, 0, 1, 0, 0)">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.4800000000000001"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M9 10L12.2581 12.4436C12.6766 12.7574 13.2662 12.6957 13.6107 12.3021L20 5" stroke="#ffffff" stroke-width="2.4" stroke-linecap="round"></path>
                                <path
                                    d="M21 12C21 13.8805 20.411 15.7137 19.3156 17.2423C18.2203 18.7709 16.6736 19.9179 14.893 20.5224C13.1123 21.1268 11.187 21.1583 9.38744 20.6125C7.58792 20.0666 6.00459 18.9707 4.85982 17.4789C3.71505 15.987 3.06635 14.174 3.00482 12.2945C2.94329 10.415 3.47203 8.56344 4.51677 6.99987C5.56152 5.4363 7.06979 4.23925 8.82975 3.57685C10.5897 2.91444 12.513 2.81996 14.3294 3.30667"
                                    stroke="#ffffff" stroke-width="2.4" stroke-linecap="round"></path>
                            </g>
                        </svg>
                        <div class="ml-2 text-sm text-white font-bold">
                            {{ $message }}.
                        </div>
                        <button type="button" class="items-center ml-auto -mx-1.5 -my-1.5 rounded-lg p-1.5 inline-flex h-8 w-8" data-dismiss-target="#alert-border-2" aria-label="Close">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd">
                                </path>
                            </svg>
                        </button>
                    </div>
                @endif
                {{-- E Alert --}}
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                            <thead class="align-bottom">
                                <tr>
                                    <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">#</th>
                                    <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Name</th>
                                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Description</th>
                                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">price</th>
                                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $id = 1;
                                @endphp
                                @foreach ($recent_plates['plates'] as $item)
                                    <tr>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2 py-1">
                                                <span class="font-semibold leading-tight text-xs text-slate-400">{{ $id++ }}</span>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2 py-1">
                                                <div>
                                                    <img src="{{ asset($item->picture) }}" class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl" alt="user2" />
                                                </div>
                                                <div class="flex flex-col justify-center">
                                                    <h6 class="mb-0 leading-normal text-sm">{{ $item->name }}</h6>
                                                    <span class="font-semibold leading-tight text-xs text-slate-400">{{ $item->name_categorie }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
                                            <span class="font-semibold leading-tight text-xs text-slate-400">{{ $item->content }}</span>
                                        </td>
                                        <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span class="font-semibold leading-tight text-xs text-slate-400">{{ number_format($item->price, 2) }}DH</span>
                                        </td>
                                        <td class="p-2 flex justify-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent text-center">
                                            <a href="{{ route('dashboard.edit', $item->id) }}"
                                                class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700"
                                                ><i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit</a>
                                            <form action="{{ route('dashboard.destroy', $item->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-red-600 to-rose-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text"
                                                    ><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-rose-400 bg-x-25 bg-clip-text" aria-hidden="true"></i>Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- table 2 -->
    <div class="flex flex-wrap -mx-3 pt-4">
        <div class="flex-none w-full max-w-full px-3">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-6 flex justify-between pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <h6>Users</h6>
                </div>
                {{-- B Alert --}}
                @if ($message = Session::get('success'))
                    <div id="alert-border-2" class="flex items-center p-2 m-4 rounded-lg bg-gradient-to-tl from-gray-900 to-slate-800" role="alert">
                        <svg width="25px" height="25px" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000000" transform="rotate(0)matrix(1, 0, 0, 1, 0, 0)">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.4800000000000001"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M9 10L12.2581 12.4436C12.6766 12.7574 13.2662 12.6957 13.6107 12.3021L20 5" stroke="#ffffff" stroke-width="2.4" stroke-linecap="round"></path>
                                <path
                                    d="M21 12C21 13.8805 20.411 15.7137 19.3156 17.2423C18.2203 18.7709 16.6736 19.9179 14.893 20.5224C13.1123 21.1268 11.187 21.1583 9.38744 20.6125C7.58792 20.0666 6.00459 18.9707 4.85982 17.4789C3.71505 15.987 3.06635 14.174 3.00482 12.2945C2.94329 10.415 3.47203 8.56344 4.51677 6.99987C5.56152 5.4363 7.06979 4.23925 8.82975 3.57685C10.5897 2.91444 12.513 2.81996 14.3294 3.30667"
                                    stroke="#ffffff" stroke-width="2.4" stroke-linecap="round"></path>
                            </g>
                        </svg>
                        <div class="ml-2 text-sm text-white font-bold">
                            {{ $message }}.
                        </div>
                        <button type="button" class="items-center ml-auto -mx-1.5 -my-1.5 rounded-lg p-1.5 inline-flex h-8 w-8" data-dismiss-target="#alert-border-2" aria-label="Close">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd">
                                </path>
                            </svg>
                        </button>
                    </div>
                @endif
                {{-- E Alert --}}
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                            <thead class="align-bottom">
                                <tr>
                                    <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">#</th>
                                    <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Name</th>
                                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Email</th>
                                    <th class="px-6 py-3 font-bold uppercase text-center align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $id = 1;
                                @endphp
                                @foreach ($recent_plates['users'] as $user)
                                    <tr>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2 py-1">
                                                <span class="font-semibold leading-tight text-xs text-slate-400">{{ $id++ }}</span>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2 py-1">
                                                <div class="flex flex-col justify-center">
                                                    <h6 class="mb-0 leading-normal text-sm">{{ $user->name }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
                                            <span class="font-semibold leading-tight text-xs text-slate-400">{{ $user->email }}</span>
                                        </td>
                                        <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
                                            <form action="{{ route('dashboard.role.update', $user->id) }}" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    @if($user->role == 1)
                                                        <button type="submit" name="admin" value="1" class="px-6 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-gradient-to-tl from-red-600 hover:scale-102 hover:shadow-soft-xs active:opacity-85">ADMIN</button>
                                                    @else
                                                        <button type="submit" name="user" value="0" class="px-6 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-gradient-to-tl from-blue-600 to-cyan-400 hover:scale-102 hover:shadow-soft-xs active:opacity-85">USER</button>
                                                    @endif
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
@endsection
