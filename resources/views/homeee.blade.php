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
    const sidebarLinks = document.querySelectorAll('#logo-sidebar a'); // Select all links inside the sidebar

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
        const sections = ["aboutus", "projects", "services", "office", "booking", "contactus", "socials",
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
        <img class=" w-10 h-10"src="/images/logo.png" alt="" srcset="">
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
        class="fixed top-0 left-0 z-40 w-70 md:w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
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
            <div class="flex flex-col md:flex-row p-2 mt-5">
                <div class="md:w-1/2 ">

                    @foreach($youtubeData as $video)

                    <div class="iframe-container">
                        <iframe class="responsive-iframe" src="https://www.youtube.com/embed/{{ $video['videoId'] }}"
                            frameborder="0" allowfullscreen></iframe>
                    </div>
                    <!-- <p>{{ $video['title'] }}</p> -->
                    @endforeach
                </div>


                <div class="md:w-1/2 md:px-0 md:justify-center">
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
            <!-- <div class="aspect-ratio flex mt-0 p-2 flex-col md:flex-row gap-10">
            <div class="text-center">
                <h2 class="text-2xl font-semibold mb-4">Services</h2>
                <div class="flex flex-wrap">
                    <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                        <a href="architecture">
                            <img class="w-full h-full object-cover" src="/images/architecture.jpg" alt="Service 1"
                                class="w-full h-auto">
                            <p class="text-center">Architecture</p>
                        </a>
                    </div>
                    <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                        <a href="interiordesigning">
                            <img class="w-full h-full object-cover" src="images/interiordesign.jpg" alt="Service 2"
                                class="w-full h-auto">
                            <p class="text-center">Interior Designing</p>
                        </a>
                    </div>
                    <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                        <a href="interiorproducts">
                            <img class="w-full h-full object-cover" src="images/interiorproducts.jpg" alt="Service 3"
                                class="w-full h-auto">
                            <p class="text-center">Interior Products</p>
                        </a>
                    </div>
                    <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                        <a href="sanitary">
                            <img class="w-full h-full object-cover" src="images/sanitary.jpg" alt="Service 4"
                                class="w-full h-auto">
                            <p class="text-center">Sanitary</p>
                        </a>
                    </div>
                </div> -->
            <div class="flex flex-col md:flex-row p-2 mt-5">
                <div class="md:w-1/2">
                    <div class="md:m-5">
                        <img src="images/service.jpg" alt="" srcset="">
                    </div>
                </div>
                <div class="md:w-1/2">
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


            <div class="aspect-ratio flex flex-col p-3 md:flex-row mt-10 md:mt-5 ">


                <div class=" text-center  md:w-1/2  md:p-20">

                    <h2 class="text-2xl font-semibold mb:mt-5">Visit Us</h2><br>
                    <p class="mt-0 ">
                        Freak Street, Kathmandu <br>
                        Opening hours 10:00 - 5:00
                    </p>
                </div>
                <div class="md:w-1/2">

                    <iframe class="w-full  sm:h-56 md:h-64 lg:h-72 xl:h-80"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.507873271778!2d85.3051469115756!3d27.70160132564458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19fd7f0d44b9%3A0xfcfd1e8198d7a6b!2sShakya%20Architects%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1683023962840!5m2!1sen!2snp"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


                </div>
            </div>
  
            </div>
    </section>
    <section id="booking">


        <div class="aspect-ratio  md:ml-64 flex flex-col p-3 md:flex-row mt-5 ">

            <div class="md:w-1/2 justify-center">
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
            <div class="md:w-1/2 md:mt-0 ">
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

<!--     
    <section id="team"class="bg-white dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto md:ml-64 max-w-screen-xl text-center lg:py-16 lg:px-6">
      <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
      <h2 class="text-2xl font-semibold text-center mt-5">Our Team</h2>
          <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Explore the whole collection of open-source web components and elements built with the utility classes from Tailwind</p>
      </div> 
      <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
          <div class="text-center text-gray-500 dark:text-gray-400">
              <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Avatar">
              <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                  <a href="#">Bonnie Green</a>
              </h3>
              <p>CEO/Co-founder</p>
              <ul class="flex justify-center mt-4 space-x-4">
                  <li>
                      <a href="#" class="text-[#39569c] hover:text-gray-900 dark:hover:text-white">
                          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="text-[#00acee] hover:text-gray-900 dark:hover:text-white">
                          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="text-gray-900 hover:text-gray-900 dark:hover:text-white dark:text-gray-300">
                          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="text-[#ea4c89] hover:text-gray-900 dark:hover:text-white">
                          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" /></svg>
                      </a> 
                  </li> 
              </ul>
          </div>
          <div class="text-center text-gray-500 dark:text-gray-400">
              <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/helene-engels.png" alt="Helene Avatar">
              <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                  <a href="#">Helene Engels</a>
              </h3>
              <p>CTO/Co-founder</p>
              <ul class="flex justify-center mt-4 space-x-4">
                  <li>
                      <a href="#" class="text-[#39569c] hover:text-gray-900 dark:hover:text-white">
                          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="text-[#00acee] hover:text-gray-900 dark:hover:text-white">
                          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="text-gray-900 hover:text-gray-900 dark:hover:text-white dark:text-gray-300">
                          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="text-[#ea4c89] hover:text-gray-900 dark:hover:text-white">
                          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" /></svg>
                      </a> 
                  </li> 
              </ul>
          </div>
          <div class="text-center text-gray-500 dark:text-gray-400">
              <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="Jese Avatar">
              <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                  <a href="#">Jese Leos</a>
              </h3>
              <p>SEO & Marketing</p>
              <ul class="flex justify-center mt-4 space-x-4">
                  <li>
                      <a href="#" class="text-[#39569c] hover:text-gray-900 dark:hover:text-white">
                          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="text-[#00acee] hover:text-gray-900 dark:hover:text-white">
                          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="text-gray-900 hover:text-gray-900 dark:hover:text-white dark:text-gray-300">
                          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="text-[#ea4c89] hover:text-gray-900 dark:hover:text-white">
                          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" /></svg>
                      </a> 
                  </li> 
              </ul>
          </div>
          <div class="text-center text-gray-500 dark:text-gray-400">
              <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png" alt="Joseph Avatar">
              <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                  <a href="#">Joseph Mcfall</a>
              </h3>
              <p>Sales</p>
              <ul class="flex justify-center mt-4 space-x-4">
                  <li>
                      <a href="#" class="text-[#39569c] hover:text-gray-900 dark:hover:text-white">
                          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="text-[#00acee] hover:text-gray-900 dark:hover:text-white">
                          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="text-gray-900 hover:text-gray-900 dark:hover:text-white dark:text-gray-300">
                          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="text-[#ea4c89] hover:text-gray-900 dark:hover:text-white">
                          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" /></svg>
                      </a> 
                  </li> 
              </ul>
          </div>
          <div class="text-center text-gray-500 dark:text-gray-400">
              <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/sofia-mcguire.png" alt="Sofia Avatar">
              <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                  <a href="#">Lana Byrd</a>
              </h3>
              <p>Web Designer</p>
              <ul class="flex justify-center mt-4 space-x-4">
                  <li>
                      <a href="#" class="text-[#39569c] hover:text-gray-900 dark:hover:text-white">
                          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="text-[#00acee] hover:text-gray-900 dark:hover:text-white">
                          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="text-gray-900 hover:text-gray-900 dark:hover:text-white dark:text-gray-300">
                          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="text-[#ea4c89] hover:text-gray-900 dark:hover:text-white">
                          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" /></svg>
                      </a> 
                  </li> 
              </ul>
          </div>
          <div class="text-center text-gray-500 dark:text-gray-400">
              <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/thomas-lean.png" alt="Leslie Avatar">
              <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                  <a href="#">Leslie Livingston</a>
              </h3>
              <p>Graphic Designer</p>
              <ul class="flex justify-center mt-4 space-x-4">
                  <li>
                      <a href="#" class="text-[#39569c] hover:text-gray-900 dark:hover:text-white">
                          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="text-[#00acee] hover:text-gray-900 dark:hover:text-white">
                          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="text-gray-900 hover:text-gray-900 dark:hover:text-white dark:text-gray-300">
                          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="text-[#ea4c89] hover:text-gray-900 dark:hover:text-white">
                          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" /></svg>
                      </a> 
                  </li> 
              </ul>
          </div>
          <div class="text-center text-gray-500 dark:text-gray-400">
              <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="Michael Avatar">
              <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                  <a href="#">Michael Gough</a>
              </h3>
              <p>React Developer</p>
              <ul class="flex justify-center mt-4 space-x-4">
                  <li>
                      <a href="#" class="text-[#39569c] hover:text-gray-900 dark:hover:text-white">
                          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="text-[#00acee] hover:text-gray-900 dark:hover:text-white">
                          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="text-gray-900 hover:text-gray-900 dark:hover:text-white dark:text-gray-300">
                          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="text-[#ea4c89] hover:text-gray-900 dark:hover:text-white">
                          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" /></svg>
                      </a> 
                  </li> 
              </ul>
          </div>
          <div class="text-center text-gray-500 dark:text-gray-400">
              <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/neil-sims.png" alt="Neil Avatar">
              <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                  <a href="#">Neil Sims</a>
              </h3>
              <p>Vue.js Developer</p>
              <ul class="flex justify-center mt-4 space-x-4">
                  <li>
                      <a href="#" class="text-[#39569c] hover:text-gray-900 dark:hover:text-white">
                          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="text-[#00acee] hover:text-gray-900 dark:hover:text-white">
                          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="text-gray-900 hover:text-gray-900 dark:hover:text-white dark:text-gray-300">
                          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="text-[#ea4c89] hover:text-gray-900 dark:hover:text-white">
                          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" /></svg>
                      </a> 
                  </li> 
              </ul>
          </div>
      </div>  
  </div>
</section>                    -->
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

</div>

</html>
@endsection