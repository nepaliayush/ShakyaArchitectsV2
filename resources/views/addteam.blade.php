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

                                            Name:<br> <input type="text" name="name"> <br>
                                            Job Title:<br> <input type="text" name="job_title"> <br>
                                            Phone Number:<br> <input type="text" name="phone"> <br>
                                            Email:<br> <input type="text" name="email"> <br>
                                            Location:<br> <input type="text" name="location"> <br>
                                            About me: <br> <input type="text" name="about_me"> <br>
                                          
                                            
                                           
                                           <legend>Socials</legend>
                                           Facebook: <br> <input type="url" name="facebook"><br>
                                           Instagram: <br> <input type="url" name="instagram"><br>
                                           Linkedin: <br> <input type="url" name="linkedin"><br>
                                           Upload Picture: <br> <input type="file" name="picture[]" id=""> <br>
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