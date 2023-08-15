@extends('layouts.master')
@section('title')
    Dashboard
@endsection


@section('content')
<div class="row" >
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h1 class="card-title">Upload Interior Designing</h1>
              </div>
              <div class="card-body">
              <form method="POST" action="/interiordesigningupload/upload"  enctype="multipart/form-data" >
        @csrf
        <div class="contact-content">
       
            <div class="form">
                <div class="form-item">
                   <p>

                   
                Name:<br> <input type="text" name="project_name">  <br>
                
                
              Details:  <br>   <input type="text" name="details">  <br>

              Choose Thumbnail: <br>  <input type="file" name="thumbnail[]" id=""  > <br> <br>
                Choose File: <br>  <input type="file" name="image[]" id="" multiple> <br> <br>
    
                <input type="submit" value="Send" style="background: #335791">
                </p>
            </div>
            </div>
        </div>

        </form>
              </div>
            </div>
          </div>
        </div>
    </div>
        
@endsection



@section('scripts')

@endsection