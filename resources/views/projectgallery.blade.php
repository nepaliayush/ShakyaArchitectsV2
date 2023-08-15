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

    <!-- <div class="swiper">



    <div class="swiper-wrapper">
    @foreach($data as $service)
      <div class="swiper-slide"> <img src="{{asset('uploads/'.$service->image)}}" alt="" srcset="" ></div>
    

      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <p>{{ $service->name}}</p>
     
      @endforeach     
    </div> -->







    <div class="display">
        <h1>Interior Designing </h1> <br>
        @php
        $images=DB::table('interiordesignings')->pluck('image');

        @endphp

        @foreach ($images as $image)
        @php
        $images = explode('|', $image);
        @endphp
        @foreach ($images as $service)
        <img src="{{URL::to($service)}}" alt=""> <br>
        
       
        @endforeach
        @endforeach
       
        <!-- @foreach($data as $service) -->
        <!-- <img src="{{asset('/uploads/').$service->image}}" alt="" srcset="" height="500px" width="80%">  -->
        <!-- <div class="service{{$service['id']==1?'active':''}}">  -->
        <!-- <img src="{{asset('uploads/'.$service->image)}}" alt="" srcset="" >  -->
        <!-- <p>{{ $service->project_name}}</p>
            <p>{{ $service->category}}</p> 
              @endforeach     
-->

        <!-- </div>
        </div>
      
    </div> -->

</body>

</html>
@endsection