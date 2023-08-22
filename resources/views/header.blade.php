<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <!-- <title>Responsive Navigation Menu</title> -->
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="myNav" class="w-screen fixed inset-y-0 right-0  flex-col bg-gray-800 bg-opacity-80 z-50 hidden">
    <div class=" w-64 text-2xl text-left bg-white h-full overflow-y-auto px-10 pt-5">
        <a href="javascript:void(0)" class="closebtn  text-gray-800 text-2xl" onclick="closeNav()">&times;</a>
        <div class="overlay-content py-4">
            <a href="homee#about" onclick="closeNav()" class="block text-gray-800 hover:text-red-500 py-2">About</a>
            <a href="#services" onclick="closeNav()" class="block text-gray-800 hover:text-blue-500 py-2">Services</a>
            <a href="#office" onclick="closeNav()" class="block text-gray-800 hover:text-blue-500 py-2">Office</a>
            <a href="#booking" onclick="closeNav()" class="block text-gray-800 hover:text-blue-500 py-2">Appointments</a>
            <a href="#contactus" onclick="closeNav()" class="block text-gray-800 hover:text-blue-500 py-2">Contact Us</a>
            <a href="#socials" onclick="closeNav()" class="block text-gray-800 hover:text-blue-500 py-2">Socials</a>
            <a href="admin" onclick="closeNav()" class="block text-gray-800 hover:text-blue-500 py-2">Admin Login</a>
        </div>
    </div>
</div>

<div class="container mx-auto md:mx-auto p-5">
    <nav class="flex items-center justify-between">
        <div class="h-8 w-10">
            <img src="/images/logo.png" alt="" srcset="">
        </div>
        <ul class="flex space-x-6 text-xl font-semibold">
            <li>Shakya Architects</li>
        </ul>
        <div>
            <span class="flex space-x-6 text-xl font-extrabold" onclick="openNav()">&#9776;</span>
        </div>
    </nav>
</div>

<script>
    function openNav() {
        document.getElementById('myNav').classList.remove('hidden');
    }

    function closeNav() {
        document.getElementById('myNav').classList.add('hidden');
    }
</script>

</body>
</html>
