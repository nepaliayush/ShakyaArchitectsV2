@extends('layouts.master')




@section('content')
@include('sweetalert::alert')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Appointment &nbsp;|&nbsp; Bookings</h4>
                        <p class="card-category">Bookings received from booking form</p>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead class=" text-primary">
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Subject</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($data as $bookings)
                                <tr>
                                    <td>{{ $bookings->id }}</td>
                                    <td>{{ $bookings->name }}</td>
                                    <td>{{ $bookings->email }}</td>
                                    <td>{{ $bookings->phone }}</td>
                                    <td>{{ $bookings->subject}}</td>
                                    <td>{{ $bookings->date }}</td>
                                    <td>{{ $bookings->time }}</td>
                                    <td>{{ $bookings->message }}</td>
                                    <td>{{ $bookings->status }}</td>
                                    <td>
                                        <a href="{{url('/deletebooking',$bookings->id)}}" class="button">
                                            Delete&nbsp; &nbsp; </a>
                                        <a href="{{url('/editbooking',$bookings->id)}}" class="button">Edit </a>
                                    </td>
                                </tr>
                                @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection



@section('scripts')

@endsection