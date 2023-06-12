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
    <a href="about">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
  </div>
</div>

    <div class="nav">
        <div class="nav-logo">
        <img src="/images/logo.png" alt="" srcset="" onclick="openNav()">
        </div>
        <div class="nav-text">
        <span  onclick="openNav()">  Shakya Architects </span>
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
