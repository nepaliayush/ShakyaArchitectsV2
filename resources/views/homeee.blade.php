@extends('master')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shakya Architects</title>

</head>

<body>
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const openSidebarBtn = document.getElementById('openSidebarBtn');
        const closeSidebarBtn = document.getElementById('closeSidebarBtn');
        const sidebar = document.getElementById('logo-sidebar');
        const sidebarBackdrop = document.getElementById('sidebarBackdrop');
        const sidebarLinks = document.querySelectorAll(
            '#logo-sidebar a'); // Select all links inside the sidebar

        function openSidebar() {
            sidebar.classList.add('translate-x-0');
            sidebarBackdrop.classList.remove('hidden');
        }

        function closeSidebar() {
            sidebar.classList.remove('translate-x-0');
            sidebarBackdrop.classList.add('hidden');
        }

        openSidebarBtn.addEventListener('click', openSidebar);

        closeSidebarBtn.addEventListener('click', closeSidebar);

        sidebarBackdrop.addEventListener('click', closeSidebar);

        // Add click event listeners to each sidebar link
        sidebarLinks.forEach(link => {
            link.addEventListener('click', closeSidebar);

        });
    });

    window.addEventListener("scroll", () => {
        const sections = ["aboutus", "projects", "services", "office", "booking", "team", "contactus", "socials",
            "admin"
        ];

        sections.forEach(sectionId => {
            const section = document.getElementById(sectionId);
            const link = document.querySelector(`[href="#${sectionId}"]`);

            if (section && link) {
                const rect = section.getBoundingClientRect();
                if (rect.top <= window.innerHeight / 2 && rect.bottom >= window.innerHeight / 2) {
                    link.classList.add("text-yellow-600");
                } else {
                    link.classList.remove("text-yellow-600");
                }
            }
        });
    });
    </script>

    @include('sweetalert::alert')

    <!-- <div class=" md:container md:mx-auto p-3t">
        <nav class=" flex items-center justify-between">
            <div class="h-8 w-11">
                <img src="/images/logo.jpg" alt="" srcset="">
            </div>
            <ul class="flex space-x-6">
                <li>Shakya Architects</li>

            </ul>
            <div>
                <span>&#9776;</span>
            </div>
        </nav>

    </div> -->
    <!-- main -->
    <div id="sidebarBackdrop" class="fixed inset-0 bg-black opacity-50 z-30 hidden"></div>
    <div class="flex items-center justify-between m-5  md:absolute top-0 left-0">
        <img class=" w-10 h-10" src="/images/logo.png" alt="" srcset="">
        <h1 class="text-2xl ">Shakya Architects</h1>
        <button id="openSidebarBtn"
            class="ml-3 p-2 text-gray-500 rounded-lg sm:hidden focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd"
                    d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                </path>
            </svg>
        </button>
    </div>

    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-70 lg:w-64 h-screen transition-transform -translate-x-full md:translate-x-0 "
        aria-label="Sidebar">
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
                    <a href="#team"
                        class="flex items-center p-2 hover:text-yellow-600 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                        <span class="flex-1 ml-3 whitespace-nowrap">Our Team</span>
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

    <div class="flex-1  md:ml-64 ">
        <section id="swiper">
            <div class="aspect-ratio flex flex-col ">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide "><img src="/images/1.jpg" alt="" srcset=""></div>
                        <div class="swiper-slide"><img src="/images/3.jpg" alt="" srcset=""></div>
                        <div class="swiper-slide"><img src="/images/4.jpg" alt="" srcset=""></div>
                        <div class="swiper-slide"><img src="/images/5.jpg" alt="" srcset=""></div>
                        <div class="swiper-slide"><img src="/images/6.jpg" alt="" srcset=""></div>
                        <div class="swiper-slide"><img src="/images/7.jpg" alt="" srcset=""></div>
                        <div class="swiper-slide">Slide 7</div>
                        <div class="swiper-slide">Slide 8</div>
                        <div class="swiper-slide">Slide 9</div>

                    </div>


                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>



                </div>
            </div>
        </section>

        <section id="aboutus">
            <div class="flex flex-col lg:flex-row p-2 mt-5">
                <div class="lg:w-1/2 ">

                    @foreach($youtubeData as $video)

                    <div class="iframe-container">
                        <iframe class="responsive-iframe" src="https://www.youtube.com/embed/{{ $video['videoId'] }}"
                            frameborder="0" allowfullscreen></iframe>
                    </div>
                    <!-- <p>{{ $video['title'] }}</p> -->
                    @endforeach
                </div>


                <div class="lg:w-1/2 md:px-0 md:justify-center">
                    <h2 class="text-2xl font-semibold text-center mb-4">About Us</h2>
                    <p class="md:mt-0 md:m-5 text-justify">
                        Shakya Architects is a design, architecture and consulting firm that specializes in creating
                        innovative
                        and sustainable building designs that promote Nepali/Newari architecture. They offer a wide
                        range of
                        architectural and engineering services including conceptual design, master planning, interior
                        design,
                        rate analysis, property valuation, consulting/supervising and handling government paperwork. The
                        firm is known for their unique and contemporary designs that blend modern aesthetics with
                        functionality, environmental consciousness, and cultural sensitivity.
                    </p>
                </div>
            </div>
        </section>

        <section id="projects">
            <div class="text-center">
                <h2 class="text-2xl font-semibold mb-4">Projects</h2>
            </div>
            <div class="m-5">
                <p>Architecture</p>
            </div>
            <div class="aspect-ratio grid grid-cols-1 p-0 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
                @foreach ($architecture as $item)
                @if (isset($item->thumbnail))
                @foreach (explode(',', $item->thumbnail) as $path)
                <div class="w-full px-4">
                    <div class="group relative overflow-hidden ">
                        <a href="projectgallery/architecture/{{ $item->id }}">
                            <img class="w-full h-auto md:w-35vw >" src="{{ asset($path) }}" alt="">
                        </a>
                        <p class="mt-2 mb-0 text-center">{{ $item->project_name }}</p>
                    </div>
                </div>
                @endforeach
                @endif
                @endforeach
            </div>

            <p class="m-5 text-end"><a href="architecture"> See more</a></p>



            <div class="m-5">
                <p>Interior Designing</p>
            </div>
            <div class="aspect-ratio grid grid-cols-1  p-0   md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5 ">

                @foreach ($interiordesigning as $item)
                @if (isset($item->thumbnail))
                @foreach (explode(',', $item->thumbnail) as $path)
                <div class="w-full px-4">
                    <div class="group relative overflow-hidden ">
                        <a href="projectgallery/interiordesigning/{{$item->id}}">
                            <img class="w-full h-auto md:w-35vw " src="{{ asset($path) }}" alt="">
                        </a>
                        <p class="mt-2 mb-0 text-center">{{ $item->project_name }}</p>
                    </div>
                </div>
                @endforeach
                @endif
                @endforeach


            </div>

            <p class=" m-5 text-end"><a href="interiordesigning"> See more</a></p>


            <!-- 
            <div class="m-5">
                <p>Interior</p>
            </div>
            <div class="aspect-ratio grid grid-cols-1  p-0   md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5 ">

                <div>
                    <p><a href="architecture"> See more</a></p>
                </div>
            </div> -->

        </section>
        <section id="services">

            <div class="flex flex-col lg:flex-row p-2 mt-5">
                <div class="lg:w-1/2 md:m-5">
                    <img src="images/service.jpg" alt="" srcset="" class="w-full h-full object-cover ">
                </div>
                <div class="lg:w-1/2">
                    <h2 class="text-2xl font-semibold text-center mb-4">Services</h2>
                    <p>
                    <ul class="md:space-y-5 text-justify">
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Architectural Designing residential as well as commercial buildings including 3D.
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Structural Analysis and Structural Drawing of residential as well as commercial buildings.
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Municipal Drawing of residential as well as commercial building.
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            nagarpalika maa naksa pass garidine sewa.
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Interior designing of residential as well as commercial buildings.
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Selling interior products like furniture, paintings, handicraft.
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Construction site Supervision.
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Consulting and advisory service.
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Jagga napidine sewa.
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Property valuationa and estimation services.
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Land and house broking services.
                        </li>
                    </ul>
                    </p>
                </div>

            </div>

        </section>

        <section id="office">


            <div class="aspect-ratio flex flex-col p-3 lg:flex-row mt-10 md:mt-5 ">


                <div class=" text-center  lg:w-1/2  md:p-20">

                    <h2 class="text-2xl font-semibold mb:mt-5">Visit Us</h2><br>
                    <p class="mt-0 ">
                        Freak Street, Kathmandu <br>
                        Opening hours 10:00 - 5:00
                    </p>
                </div>
                <div class="lg:w-1/2">

                    <iframe class="w-full  sm:h-56 md:h-64 lg:h-72 xl:h-80"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.507873271778!2d85.3051469115756!3d27.70160132564458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19fd7f0d44b9%3A0xfcfd1e8198d7a6b!2sShakya%20Architects%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1683023962840!5m2!1sen!2snp"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


                </div>
            </div>

    </div>
    </section>
    <section id="booking">


        <div class="aspect-ratio  md:ml-64 flex flex-col p-3 lg:flex-row mt-5 ">

            <div class="lg:w-1/2 justify-center">
                <div class="m-15 md:m-20  ">
                    <h2 class="text-2xl font-semibold text-center mb-10">My Timings</h2>
                    <p class="m-11  first-letter:space-y-3">
                        <i class="fas fa-calendar text-black"></i> Sunday: 10:00 AM - 5:00 PM <br>
                        <i class="fas fa-calendar text-black"></i> Monday: 10:00 AM - 5:00 PM <br>
                        <i class="fas fa-calendar text-black"></i> Tuesday: 10:00 AM - 5:00 PM <br>
                        <i class="fas fa-calendar text-black"></i> Wednesday: 10:00 AM - 5:00 PM <br>
                        <i class="fas fa-calendar text-black"></i> Thursday: 10:00 AM - 5:00 PM <br>
                        <i class="fas fa-calendar text-black"></i> Friday: 10:00 AM - 5:00 PM <br>
                        <i class="fas fa-calendar-times text-black"></i> Saturday: Not Available
                    </p>
                    <h3 class=" text-2xl font-semibold  mt-5">Before booking an appointment, please check my
                        availability.</h3>
                </div>

            </div>
            <div class="lg:w-1/2 md:mt-0 ">
                <form class=" md:m-0  space-y-3" method="POST" action="/bookingform">
                    @csrf
                    <h2 class="text-2xl font-semibold text-center mt-5">Fill The Form</h2>
                    <div>
                        <label class="block font-semibold" for="name">Name:</label>
                        <input type="text" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                        @error('name')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="block font-semibold" for="email">Email:</label>
                        <input type="text" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                        @error('email')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Add similar code for other form fields -->
                    <div>
                        <label class="block font-semibold" for="email">Phone Number:</label>
                        <input type="text" name="phone" class="w-full px-3 py-2 border border-gray-300  rounded-md">
                        @error('phone')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="block font-semibold" for="email">Subject:</label>
                        <input type="text" name="subject" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                        @error('subject')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="block font-semibold" for="email">Date:</label>
                        <input type="date" name="date"
                            class="w-full sm-auto px-3 py-2 border border-gray-300  rounded-md">
                        @error('date')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="block font-semibold" for="email">Time:</label>
                        <input type="time" name="time" class="w-full px-3 py-2 border  border-gray-300 rounded-md">
                        @error('time')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="block font-semibold" for="message">Message:</label>
                        <textarea name="message" rows="4"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md"></textarea>
                        @error('message')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <input type="hidden" name="status" value="Pending">
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                        Send
                    </button>
                </form>
            </div>


        </div>
    </section>


    <section id="team" class="bg-white dark:bg-gray-900">
        <div class="md:ml-64 px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                <h2 class="text-3xl font-bold text-center mt-5">Meet our team</h2>

                <!-- 
    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
      <span class="relative inline-block">
        <span class="relative">Meet our team</span>
      </span>
      
    </h2> -->
                <p class="text-base text-gray-700 md:text-lg">
                    We’re a dynamic group of individuals who are passionate about what we do and dedicated to delivering
                    the best results for our clients.
                </p>
            </div>
            <div class="grid gap-10 row-gap-10 mx-auto sm:row-gap-10 lg:max-w-screen-lg sm:grid-cols-2 lg:grid-cols-3">
          
            @foreach ($team as $record => $value)
            <a href="profile/{{ $value->id }}">
                <div class="flex">
                
                    @if ($value->picture)
                    <img src="{{ URL::to($value->picture) }}" alt="Image"
                        class="object-cover w-20 h-20 mr-4 rounded-full shadow">
                    @endif

                    <div class="flex flex-col justify-center">
                        <p class="text-lg font-bold"> {{ $value->name }}</p>
                        <p class="text-sm text-gray-800">{{$value->job_title}}</p>
                    </div>
                </div>     
                @endforeach
                </a>
            </div>
            <p class=" m-5 text-end"><a href="interiordesigning"> See more</a></p>
    </section>

    <section id="contactus">
        <div class="aspect-ratio md:ml-64 md:mx-105 flex flex-col items-center justify-center p-3 md:flex-row mt-5">
            <form class="w-full md:w-1/2 m-5 md:m-0 space-y-3" method="POST" action="/landing/store">
                <h2 class="text-2xl font-semibold text-center mt-5">Contact Us</h2>
                @csrf
                <div>
                    <label class="block font-semibold" for="name">Name:</label>
                    <input type="text" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                    @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label class="block font-semibold" for="email">Email:</label>
                    <input type="text" name="email" class="w-full px-3 py-2 border border-gray-300  rounded-md">
                    @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label class="block font-semibold" for="phone">Phone Number:</label>
                    <input type="text" name="phone" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                    @error('phone')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Add similar code for other form fields -->

                <div>
                    <label class="block font-semibold" for="message">Message:</label>
                    <textarea name="message" rows="4"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md"></textarea>
                    @error('message')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <input type="hidden" name="status" value="Pending">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                    Send
                </button>
            </form>
        </div>
        </div>
    </section>

    <section id="socials">
        <div class="aspect-ratio md:ml-64  flex flex-col  p-3 md:flex-row mt-5 ">
            <div class="w-full f-full">
                <h2 class="text-2xl font-semibold text-center mt-5"> Our Socials</h2>
                <img class="h-auto w-auto" src="images/social.jpg" alt="">
                <ul class="flex justify-center text-xl mt-3 space-x-6">
                    <li>
                        <a href="https://www.facebook.com/shakyaarchi" class="text-black hover:text-blue-500">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/shakyaarchi/" class="text-black hover:text-pink-500">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.tiktok.com/@shakyaarchitects" class="text-black hover:text-gray-500">
                            <i class="fab fa-tiktok"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/@shakyaarchi" class="text-black hover:text-red-500">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</body>
</html>
@endsection