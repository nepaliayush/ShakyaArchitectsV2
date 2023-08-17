@extends('master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script>
  const galleryItems = document.querySelectorAll('.projects');

  galleryItems.forEach(item => {
    item.addEventListener('touchstart', function() {
      this.classList.add('touched');
    });

    item.addEventListener('touchend', function() {
      this.classList.remove('touched');
    });
  });
</script>
<body>
    <h1>Interior Desiging</h1>
    <div class="projects">
<!-- 
        @php
        $images=DB::table('interiordesignings')->pluck('thumbnail');
        @endphp
        @foreach ($images as $image)
        @php
        $images = explode('|', $image);
        @endphp
        @foreach ($images as $service)
         <a href="projectgallery"><img src="{{URL::to($service)}}" alt=""></a> <br>        
        @endforeach
        @endforeach -->
        @foreach ($data as $data) 
        @foreach(explode(',', $data->thumbnail) as $path)
        <div class="data{{$data['id']==1?'active':''}}">
        <a href="projectgallery/{{$data['id']}}"><img src="{{ asset($path) }}" alt=""></a><br>
        
        <p>
   
   {{ $data->project_name }}  
   
  
 </p>
       
        </div>
        
        @endforeach  
        <!-- <div class="projects_overlay">
    <div class="text">  {{ $data->project_name }} <br><br>    </div>
  </div> -->
  
  
     
        @endforeach 
<!-- @foreach($data as $datas)

@foreach(explode(',', $data->thumbnail) as $path)
  <img src="{{ asset($path) }}">
  @endforeach 
@endforeach  -->

         
</div>                 
</body>
</html>
@endsection