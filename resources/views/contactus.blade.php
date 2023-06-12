@extends('layouts.master')
@section('title')
Contact Us
@endsection


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
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <h1 class="card-title">Contact Us</h1>
            </div>
            <div class="card-body">
            
                <div class="table-responsive">
                    <table class="table">
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
</body>
</html>


@endsection