@extends('master')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<body>
@include('sweetalert::alert') 

    <section id="swiper">

        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="/images/1.jpg" alt="" srcset=""></div>
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
    </section>




    <section id="about">

        <div class="about">

            <div class="about_img">
                <img src="/images/aboutus.jpg" alt="">
            </div>
            <div class="about_us">
                <p>


                <h1>About us</h1><br>

                Shakya Architects is a design, architecture and consulting firm that specializes in creating innovative
                and sustainable building designs that promotes nepali/newari architecture. They offer a wide range of
                architectural and engineering services including conceptual design, master planning, interior design,
                rate analysis, property valuation, consulting/supervising and getting government paper-works done. The
                firm is known for their unique and contemporary designs that blend modern as well as old aesthetics with
                functionality, environmental consciousness, and cultural sensitivity <br> <br>

                </p>

            </div>
        </div>

    </section>
    <section id="services">
        <h1>Services</h1>
        <div class="services">
            <div class="architecture">
                <a href="architecture"><img src="images/architecture.jpg" alt="" srcset="">
                    <h1>Architecture</h1>
                </a>

            </div>
            <div class="interior_designing">
                <a href="interiordesigning"><img src="images/interiordesign.jpg" alt="" srcset="">
                    <h1>Interior Designing</h1>
                </a>
            </div>
            <div class="interior_product">
                <a href="interiorproducts"><img src="images/interiorproducts.jpg" alt="" srcset="">
                    <h1>Interior Products</h1>
                </a>
            </div>
            <div class="sanitary">
                <a href="sanitary"><img src="images/sanitary.jpg" alt="" srcset="">
                    <h1>Sanitary</h1>
                </a>
            </div>
        </div>
    </section>
    
    <section id="office">
        <div class="office">

            <div class="office_info">
                <h2>Visit Us</h2>
                <p>

                    Freak Street, Kathmandu <br>
                    Opening hours 10:00 - 5:00
                </p>
            </div>
            <div class="maps">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.507873271778!2d85.3051469115756!3d27.70160132564458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19fd7f0d44b9%3A0xfcfd1e8198d7a6b!2sShakya%20Architects%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1683023962840!5m2!1sen!2snp"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>


    <section id="booking">
    <h1>Appoinments</h1>
        <div class="booking">
        

            <div class=" booking-info">

                <p>
                    <i class="fa-solid fa-calendar" style="color: #000000;"></i> Sunday: 10:00 AM - 5:00 PM <br> <br>
                    <i class="fa-solid fa-calendar" style="color: #000000;"></i> Monday: 10:00 AM - 5:00 PM <br><br>
                    <i class="fa-solid fa-calendar" style="color: #000000;"></i> Tuesday: 10:00 AM - 5:00 PM <br><br>
                    <i class="fa-solid fa-calendar" style="color: #000000;"></i> Wednesday: 10:00 AM - 5:00 PM <br><br>
                    <i class="fa-solid fa-calendar" style="color: #000000;"></i> Thursday: 10:00 AM - 5:00 PM <br><br>
                    <i class="fa-solid fa-calendar" style="color: #000000;"></i> Friday: 10:00 AM - 5:00 PM <br><br>
                    <i class="fa-solid fa-calendar-xmark" style="color: #000000;"></i> Saturday: Not Available 
                    
                </p>
                <h3>Before booking an appointment please check my availablity</h3>
                
            </div>
            <div class="booking-form">
                <h1></h1>
                <form method="POST" action="/bookingform">
                    @csrf
                 
                    <div class="booking-content">
                        <h1> Fill The Form</h1>
                        <div class="booking-form">
                            <div class="booking-form-item">

                                Name:<br> <input type="text" name="name">
                                <span class="text-danger">
                                    @error('name')
                                    {{$message}}
                                    @enderror
                                </span>
                                Email: <br> <input type="text" name="email"> <br>
                                <span class="text-danger">
                                    @error('email')
                                    {{$message}}
                                    @enderror
                                </span>
                                Phone Number: <br> <input type="text" name="phone"><br>
                                <span class="text-danger">
                                    @error('phone')
                                    {{$message}}
                                    @enderror
                                </span>
                                Subject:<br> <input type="text" name="subject"> <br>
                                <span class="text-danger">
                                    @error('subject')
                                    {{$message}}
                                    @enderror
                                </span>
                                Date: <br> <input type="date" name="date" id=""><br>
                                <span class="text-danger">
                                    @error('date')
                                    {{$message}}
                                    @enderror
                                </span>
                                Time: <br> <input type="time" name="time" id=""> <br>
                                <span class="text-danger">
                                    @error('time')
                                    {{$message}}
                                    @enderror
                                </span>


                                Message: </span><br><textarea name="message" row="50"
                                    placeholder="Enter Message"></textarea> <br>
                                    <span class="text-danger">
                                    @error('message')
                                    {{$message}}
                                    @enderror
                                </span>
                                <input type="hidden" name="status" value="Pending">
                                <input type="submit" value="Send">

                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>


    </section>
    <section id="contactus">
    <h1>Contact us</h1><br>
            <div class="contact-content">
           
                <div class="form">
                    <div class="form-item">
                    <form method="POST" action="/landing/store">
            @csrf
                        Name:<br> <input type="text" name="name"> <br>
                        <span class="text-danger">
                                    @error('name')
                                    {{$message}}
                                    @enderror
                                </span>
                        Email: <br> <input type="text" name="email"> <br>
                        <span class="text-danger">
                                    @error('email')
                                    {{$message}}
                                    @enderror
                                </span>
                        Phone Number: <br> <input type="text" name="phone"> <br>
                        <span class="text-danger">
                                    @error('phone')
                                    {{$message}}
                                    @enderror
                                </span>


                        Message: </span><br><textarea name="message" row="50" placeholder="Enter Message"></textarea>
                        <br>
                        <span class="text-danger">
                                    @error('message')
                                    {{$message}}
                                    @enderror
                                </span>
                        <input type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>

       
        
        
    </section>

    <section id='socials'>

    <div class="footer-content">
            <h1>Our Social Network</h1>
           
            <img src="/images/footer.jpg" alt="" srcset="">
            <ul class="socials">

                <li> <a href="https://www.facebook.com/shakyaarchi"><i class="fa fa-brands fa-facebook-f"
                            style="color: #000000;"></i></a></li>
                <li><a href="https://www.instagram.com/shakyaarchi/"><i class="fa fa-brands fa-instagram"
                            style="color: #000000;"></i></a></li>
                <li><a href="https://www.tiktok.com/@shakyaarchitects"><i class="fa-brands fa-tiktok"
                            style="color: #000000;"></i></a></li>
                <li><a href="https://www.youtube.com/@shakyaarchi"><i class="fa-brands fa-youtube"
                            style="color: #000000;"></i></a></li>
            </ul>
            
        </div>
 




    </section>

</body>

</html>

@endsection