@extends('layouts.master')
@section('title')
Dashboard
@endsection


@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Shakya Architects</h4>
                        <p class="card-category">Welcome to admin panel </p>
                    </div>
                    <div class="card-body">
                        <div class="dashboard">
                        <img src="/images/logo.png" alt="" srcset="" height="300px"
                            > <br>
                        </div>
                   
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


</body>
</html>


@yield('content')





<!-- <div class="dashboard">
<img src="/images/logo.png" alt="" srcset="" height="400px" style="margin-left:35%; margin-bottom:5%"> <br>
   

</div> -->
@endsection



@section('scripts')

@endsection