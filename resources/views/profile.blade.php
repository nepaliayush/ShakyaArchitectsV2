@extends('master')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40  lg:w-64 h-screen transition-transform -translate-x-full md:translate-x-0 "
        aria-label="Sidebar" >
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
            <div class="flex justify-end sm:hidden">
                <button id="closeSidebarBtn" class="p-2 text-gray-500 hover:text-gray-700 focus:outline-none">
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M14.35 14.35a.5.5 0 010-.7L10.71 10l3.64-3.64a.5.5 0 11.7.7L11.41 10l3.64 3.64a.5.5 0 01-.7.7L10 10.71l-3.64 3.64a.5.5 0 01-.7-.7L9.29 10 5.65 6.36a.5.5 0 01.7-.7L10 9.29l3.64-3.64a.5.5 0 01.7.7L10.71 10l3.64 3.64z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
            <nav class=" mx-5 flex items-center ">

                <div class="flex flex-col items-center ">
                    <div class="h-20 w-20 text-center">
                        <img src="/images/logo.png" alt="" srcset="">
                    </div>
                    <div class="mt-2 space-y-1">
                        <h1 class="text-center text-xl font-semibold space-y-2">SHAKYA ARCHITECTS</h1>
                        <h2 class="text-center text-sm font-semibold text-yellow-600">WE DESIGN YOUR DREAMS</h2>
                        <p class=" text-center text-xs text-yellow-600">
                            +977-9808758450 <br>
                            mail4shakyaaarchi@gmail.com <br>
                            Basantapur, Kathmandu
                        </p>
                    </div>

                    <div class="m-5">
                        <hr class="w-20 md:w-40   border-1 border-gray-600 " />
                    </div>
                </div>


            </nav>
            <ul class="space-y-2 font-medium">
                <li class="group">
                    <a href="#aboutus"
                        class=" flex items-center p-2  hover:text-yellow-600 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <span id="aboutUsSpan" class="ml-3">About Us</span>
                    </a>
                </li>


                <li>
                    <a href="#projects"
                        class="flex items-center p-2 hover:text-yellow-600 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                        <span class="flex-1 ml-3 whitespace-nowrap">Projects</span>

                    </a>
                </li>
                <li>
                    <a href="#services"
                        class="flex items-center p-2 hover:text-yellow-600 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                        <span class="flex-1 ml-3 whitespace-nowrap">Services</span>
                    </a>
                </li>
                <li>
                    <a href="#office"
                        class="flex items-center p-2 hover:text-yellow-600 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                        <span class="flex-1 ml-3 whitespace-nowrap">Office</span>
                    </a>
                </li>
                <li>
                    <a href="#booking"
                        class="flex items-center p-2 hover:text-yellow-600 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                        <span class="flex-1 ml-3 whitespace-nowrap">Appointments</span>
                    </a>
                </li>
                <li>
                    <a href="#contactus"
                        class="flex items-center p-2  hover:text-yellow-600 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                        <span class="flex-1 ml-3 whitespace-nowrap">Contact Us</span>
                    </a>
                </li>
                <li>
                    <a href="#socials"
                        class="flex items-center p-2 hover:text-yellow-600 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                        <span class="flex-1 ml-3 whitespace-nowrap">Socials</span>
                    </a>
                </li>
                <li>
                    <a href="admin"
                        class="flex items-center p-2 hover:text-yellow-600 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                        <span class="flex-1 ml-3 whitespace-nowrap">Admin Login</span>
                    </a>
                </li>

            </ul>
            <hr>
        </div>
        </div>
    </aside>

    <div class="flex-1 md:ml-64">
    <div class="flex flex-col lg:flex-row md:flex-col p-10 md:mt-10">
        <div class="lg:w-1/2 md:p-0 lg:p-10 md:mt-0">
            @foreach ($data as $record => $value)

            @if ($value->picture)
            <img src="{{ URL::to($value->picture) }}" alt="Image"  class="w-full h-full object-cover ">
            @endif
        </div>
        <div class="lg:w-1/2 md:p-5 lg:p-20 space-y-4">
            <div class="text-3xl font-bold">
                Hi, I'm {{ $value->name }} <br>
            </div>
            <div class="text-2xl font-bold">
                {{$value->job_title}} <br>
            </div>
            <div class="text-xl text-justify space-y-4">
                {{$value->about_me}} <br>
                <i class="fa-solid fa-phone" style="color: #000000;"></i> {{$value->phone}} <br>
                <i class="fa-solid fa-envelope" style="color: #000000;"></i> {{$value->email}}<br>
                <i class="fa-solid fa-house" style="color: #000000;"></i> {{$value->location}} <br>
            </div>
            <div class="space-x-5 mt-10 text-3xl">
                @if ($value->facebook)
                <a href="{{ $value->facebook }}" target="_blank"><i class="fa-brands fa-facebook"
                        style="color: #1c4ad4;"></i></a>
                @endif
                @if ($value->instagram)
                <a href="{{ $value->instagram }}" target="_blank"><i class="fa-brands fa-instagram"
                        style="color: #e1306c;"></i></a>
                @endif
                @if ($value->linkedin)
                <a href="{{ $value->linkedin }}" target="_blank"><i class="fa-brands fa-linkedin"
                        style="color: #1c4ad4;"></i></a>
                @endif
            </div>
        </div>
        @endforeach
    </div>
</div>

    <!-- The rest of your HTML content here -->


</body>

</html>
@endsection