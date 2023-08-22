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

    <section id="about">

        <div class="aspect-ratio flex flex-col md:flex-row p-2 mt-5">
    <div class="md:w-1/2">
        <img src="/images/aboutus.svg" alt="">
    </div>
    <div class=" mt-20 md:w-1/2 md:px-0 md:justify-center"> <!-- Added px-4 for padding -->
    <h2 class=" text-2xl font-semibold text-center  mb-4">About Us</h2>
        <p class=" md:mt-5 md:m-5 text-justify   ">
            Shakya Architects is a design, architecture and consulting firm that specializes in creating innovative
            and sustainable building designs that promote Nepali/Newari architecture. They offer a wide range of
            architectural and engineering services including conceptual design, master planning, interior design,
            rate analysis, property valuation, consulting/supervising and handling government paperwork. The
            firm is known for their unique and contemporary designs that blend modern aesthetics with
            functionality, environmental consciousness, and cultural sensitivity.
        </p>
    </div>
</div>

</section>

<section id="services">


    <div class="aspect-ratio flex mt-5 p-2 flex-col md:flex-row gap-10">
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
            </div>

            </section>

            <section id ="office">

            
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
</div>
</section>
<section id="booking">


<div class="aspect-ratio flex flex-col p-3 md:flex-row mt-5 ">

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
            <h3 class=" text-2xl font-semibold  mt-5">Before booking an appointment, please check my availability.</h3>
        </div>
        
</div>
<div class="md:w-1/2 md:mt-0">
        <form class=" md:m-0  space-y-3" method="POST" action="/bookingform">
            @csrf
            <h2 class="text-2xl font-semibold text-center mt-5">Fill The Form</h2>
            <div>
                <label class="block font-semibold" for="name">Name:</label>
                <input type="text" name="name" class="w-full px-3 py-2 border rounded-md">
                @error('name')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="block font-semibold" for="email">Email:</label>
                <input type="text" name="email" class="w-full px-3 py-2 border rounded-md">
                @error('email')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <!-- Add similar code for other form fields -->
            <div>
                <label class="block font-semibold" for="email">Phone Number:</label>
                <input type="text" name="phone" class="w-full px-3 py-2 border rounded-md">
                @error('phone')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="block font-semibold" for="email">Subject:</label>
                <input type="text" name="subject" class="w-full px-3 py-2 border rounded-md">
                @error('subject')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="block font-semibold" for="email">Date:</label>
                <input type="date" name="date" class="w-full sm-auto px-3 py-2 border rounded-md">
                @error('date')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="block font-semibold" for="email">Time:</label>
                <input type="time" name="time" class="w-full px-3 py-2 border rounded-md">
                @error('time')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="block font-semibold" for="message">Message:</label>
                <textarea name="message" rows="4" class="w-full px-3 py-2 border rounded-md"></textarea>
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


<div class="aspect-ratio flex flex-col items-center justify-center p-3 md:flex-row mt-5">
    <form class="w-full md:w-1/2 m-5 md:m-0 space-y-3" method="POST" action="/landing/store">
        <h2 class="text-2xl font-semibold text-center mt-5">Contact Us</h2>
        @csrf
        <div>
            <label class="block font-semibold" for="name">Name:</label>
            <input type="text" name="name" class="w-full px-3 py-2 border rounded-md">
            @error('name')
            <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label class="block font-semibold" for="email">Email:</label>
            <input type="text" name="email" class="w-full px-3 py-2 border rounded-md">
            @error('email')
            <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label class="block font-semibold" for="phone">Phone Number:</label>
            <input type="text" name="phone" class="w-full px-3 py-2 border rounded-md">
            @error('phone')
            <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <!-- Add similar code for other form fields -->

        <div>
            <label class="block font-semibold" for="message">Message:</label>
            <textarea name="message" rows="4" class="w-full px-3 py-2 border rounded-md"></textarea>
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
</section>
<section id="socials">


<div class="aspect-ratio flex flex-col  p-3 md:flex-row mt-5 ">
    <div class="w-full">
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