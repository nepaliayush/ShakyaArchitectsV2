@extends('master')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css">
</head>

<body>
    <div class="text-center ">
    <h2 class="text-2xl font-semibold text-center mt-5"> Image Gallery</h2>
    </div>

    <div class="flex flex-wrap justify-center gap-4 p-2">
        @foreach ($data as $images)
        @php
        $imageArray = explode('|', $images);
        @endphp
        @foreach ($imageArray as $image)
        <img src="{{ URL::to($image) }}" alt="Image" class="max-w-full h-auto">
        @endforeach
        @endforeach
    </div>
</body>

</html>

@endsection