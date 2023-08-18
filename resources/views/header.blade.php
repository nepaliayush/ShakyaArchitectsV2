<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   <!--------- <title>Responsive Navigation Menu</title>------>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
  <div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="#about"onclick="closeNav()">About</a>
    <a href="#services" onclick="closeNav()">Services</a>
    <a href="#office"onclick="closeNav()">Office</a>
    <a href="#booking"onclick="closeNav()">Appointments</a>
    <a href="#contactus"onclick="closeNav()">Contact Us</a>
    <a href="#socials"onclick="closeNav()">Socials</a>
  </div>
</div>

    <div class="nav">
    <label for="active" class="menu-btn"><span></span></label>
        <div class="nav-logo">
        <img src="/images/logo.png" alt="" srcset="" onclick="openNav()">
        </div>
        <div class="nav-text">
        <span  onclick="openNav()">  Shakya Architects </span>
        </div>
        <div class="nav-button">
        <span onclick="openNav()">&#9776;</span>
        </div>
       
    </div>

  

  




<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>

  </body>
</html>
