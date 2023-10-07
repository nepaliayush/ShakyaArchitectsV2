@extends('master')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="flex flex-col md:flex-row p-10 mt-10 mx-2 ">
        <div class="md:w-1/2 p-10  md:p-20">
            @foreach ($data as $record=> $value)

            @if ($value->picture)
            <img src="{{ URL::to($value->picture) }}" alt="Image" class="	aspect-ratio: auto; max-w-full h-auto">
            @endif
        </div>







        <div class="md:w-1/2 p-10  md:p-20 space-y-4 ">
            <div class="text-3xl font-bold">
                Hi, I'm {{ $value->name }} <br>


            </div>
            <div class="text-2xl font-bold">

                {{$value->job_title}} <br>

            </div>
            <div class="text-xl  space-y-4">
                {{$value->about_me}} <br>
                <i class="fa-solid fa-phone" style="color: #000000;"></i> {{$value->phone}} <br>
                <i class="fa-solid fa-envelope" style="color: #000000;"></i> {{$value->email}}<br>
                <i class="fa-solid fa-house" style="color: #000000;"></i> {{$value->location}} <br>


            </div>
            
          
            <div class="space-x-5 mt-10  text-3xl ">
            
                @if ($value->facebook)
                <a href="{{ $value->facebook }}" target="_blank"><i class="fa-brands fa-facebook"
                        style="color: #1c4ad4;"></i></a>
                @endif

                @if ($value->instagram)
                <a href="{{ $value->instagram }}" target="_blank"><i class="fa-brands fa-instagram"
                        style="color: #e1306c;"></i></a>
                @endif

                @if ($value->linkedin)
                <a href="{{ $value->linkedin }}" target="_blank"><i class="fa-brands fa-linkedin"
                        style="color: #1c4ad4;"></i></a>
                @endif

            </div>

        </div>




        @endforeach
    </div>


    <!-- The rest of your HTML content here -->


</body>

</html>
@endsection