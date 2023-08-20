@extends('layouts.master')
@section('title')
    Dashboard
@endsection


@section('content')
@include('sweetalert::alert')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Booking</h4>
                    </div>
                    <div class="card-body">
                    <form method="POST" action="{{url('updatebooking/'. $bookings->id)}}"   id="redirect-form">
                  @csrf
                  @method('PUT')
        <div class="contact-content">
       
            <div class="form">
                <div class="form-item">
                Name:<br> <input type="text" name="name" value="{{$bookings->name}}">  <br>
                Email:  <br>   <input type="text" name="email" value="{{$bookings->email}}">  <br>
                Phone Number: <br> <input type="text" name="phone" value="{{$bookings->phone}}"><br>
                Subject:<br> <input type="text" name="subject" value="{{$bookings->subject}}">  <br>
                Date: <br> <input type="date" name="date" value="{{$bookings->date}}" id=""><br>
                Time: <br> <input type="time" name="time" value="{{$bookings->time}}" id=""> <br>
                Message: </span><br><input type="text" name="status" value="{{$bookings->message}}">  <br>
                Status:<br><input type="text" name="status" value="{{$bookings->status}}">  <br>
               
    
                <!-- <input type="submit" value="Send" style="background: #335791"> -->
                <button type="submit"
                                                class="btn btn-info btn-fill pull-right">Update</button>
           
            </div>
            </div>
        </div>

        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection



