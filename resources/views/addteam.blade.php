@extends('layouts.master')
@section('title')
Dashboard
@endsection


@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Team Member</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/uploadteam/upload" enctype="multipart/form-data">
                            @csrf
                            <div class="contact-content">

                                <div class="form">

                                    <div class="form-item">
                                        <p>

                                            Name:<br> <input type="text" name="project_name"> <br>


                                            Details: <br> <input type="text" name="details"> <br>
                                            <select name="service" id="table">
                                                <option value="architecture">Architecture</option>
                                                <option value="interiordesigning">Interior Designing</option>
                                                <option value="interiorproducts">Interior </option>
                                                <option value="sanitary">Sanitary</option>
                                                <!-- Add more options for other tables -->
                                            </select>
                                            Upload Picture: <br> <input type="file" name="thumbnail[]" id=""> <br>
                                            Choose File: <br> <input type="file" name="image[]" id="" multiple> <br>
                                            <button type="submit"
                                                class="btn btn-info btn-fill pull-right">Upload</button>

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
</div>

@endsection