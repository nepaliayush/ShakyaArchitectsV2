<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/main.css"  rel="stylesheet">
    <link  href="//use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
    
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="swiper.min.css">
    
    @vite(['public/css/main.css', 'resources/js/app.js'])
    <title> @yield('title')</title>
</head>
<body>

    {{View::make('header')}}
   
    @yield('content')
    
    {{View::make('footer')}}
</body>
</html>