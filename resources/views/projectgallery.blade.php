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
        <div class="display_heading">
        <p>Interior Designing</p>
        </div>

    <div class="display">
        
    
        @foreach ($data as $images)
        @php
        $imageArray = explode('|', $images);
        @endphp
        @foreach ($imageArray as $image)
            <img src="{{ URL::to($image) }}" alt="Image">
        @endforeach
         @endforeach
      
        </div>
      
    </div> 
</body>

</html>
@endsection