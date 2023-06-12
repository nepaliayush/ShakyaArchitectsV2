@extends('master')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="display">
        <h1>Interior Designing</h1> <br>
        @php
        $images=DB::table('interiordesignings')->pluck('image');
        @endphp

        @foreach ($images as $image)
        @php
        $images = explode('|', $image);
        @endphp
        @foreach ($images as $service)
        <img src="{{URL::to($service)}}" alt=""><br>
        @endforeach
        @endforeach
    </div>

</body>

</html>
@endsection