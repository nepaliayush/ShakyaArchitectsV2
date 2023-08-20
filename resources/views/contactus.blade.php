@extends('layouts.master')
@section('title')
Contact Us
@endsection


@section('content')
@include('sweetalert::alert') 
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Contact Us</h4>
                        <p class="card-category">Messages received form contact us form.</p>
                    </div>
                    <div class="card-body">
                    <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                    <thead class=" text-primary">
                            <th>S.No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Message</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($data as $contact)
                                <td>{{ $contact->id }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->phone }}</td>
                                <td>{{ $contact->message }}</td>
                                <td><a href="{{url('/removecontact',$contact->id)}}" class="button"> Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                                    </table>
                                </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>      

@endsection