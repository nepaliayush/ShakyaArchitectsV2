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
<h2 class="text-2xl font-semibold text-center my-5"> Projects</h2>
<div class="aspect-ratio grid grid-cols-1  p-0   md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5 ">

    @foreach ($data as $item)
        @foreach (explode(',', $item->thumbnail) as $path)
            <div class="w-full px-4">
                <div class="group relative overflow-hidden hover:scale-105 transform transition-all duration-300">
                    <a href="projectgallery/interiordesigning/{{$item->id}}">
                        <img class="w-full h-auto md:w-35vw transition-transform ease-in-out duration-300 transform group-hover:scale-105" src="{{ asset($path) }}" alt="">
                    </a>
                    <p class="mt-2 mb-0 text-center">{{ $item->project_name }}</p>
                </div>
            </div>
        @endforeach
    @endforeach
</div>

    <!-- <h1>Interior Desiging</h1>
    <div class="projects">
        @foreach ($data as $data)
        @foreach(explode(',', $data->thumbnail) as $path)
        <div class="w-full sm:w-1/ md:w-1/4 p-4">
            <div class="data{{$data['id']==1?'active':''}}">
                <a href="projectgallery/{{$data['id']}}"><img class="w-full h-full object-cover"
                        src="{{ asset($path) }}" alt=""></a><br>
                <p>{{ $data->project_name }}</p>
            </div>
        </div>
        @endforeach
        @endforeach
    </div> -->
</body>

</html>
@endsection