@extends('admin.admin-dashboard')

@section('main-content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <div class="page-content">
        <div class="row profile-body">
            <!-- left wrapper start -->
            <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
                <div class="card rounded">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div>
                                <img class="wd-100 rounded-circle" src="{{(!empty($profileData->photo)) ? url('uploads/admin_images/'.$profileData->photo) : url('uploads/no_image.jpg')}}" alt="profile">
                                <span class="h4 ms-3 mb-3 text-white">{{$profileData->name}}</span>

                            </div>
                        </div>
                        <p>Hi! I'm {{$profileData->name}} the Senior UI Designer at NobleUI. We hope you enjoy the design and quality of Social.</p>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Username:</label>
                            <p class="text-muted">{{$profileData->username}}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                            <p class="text-muted">{{$profileData->email}}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>
                            <p class="text-muted">{{$profileData->phone}}</p>
                        </div>
                        <div class="mt-3 d-flex social-links">
                            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                <i data-feather="github"></i>
                            </a>
                            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                <i data-feather="twitter"></i>
                            </a>
                            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                <i data-feather="instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- left wrapper end -->
            <!-- middle wrapper start -->
            <div class="col-md-8 col-xl-8 middle-wrapper">
                <div class="row">
                    <div class="card-body">

                        <h3 class="card-title mb-3">Edit Profile</h3>
                        <hr>

                        <form class="forms-sample">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name"  name="name" value="{{$profileData->name}}">
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username"  name="username" value="{{$profileData->username}}">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email"  name="email" value="{{$profileData->email}}">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{$profileData->phone}}">
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address" value="{{$profileData->address}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Photo</label>
                                <input type="file" class="form-control" id="imageInput" name="photo" value="{{$profileData->photo}}">
                            </div>
                            <div class="mb-3">
                                <img class="wd-80 h-100 rounded-circle" id="showImage" src="{{(!empty($profileData->photo)) ? url('uploads/admin_images/'.$profileData->photo) : url('uploads/no_image.jpg')}}" alt="profile">
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <button class="btn btn-secondary">Cancel</button>
                        </form>

                    </div>
                </div>
            </div>
            <!-- middle wrapper end -->

        </div>
    </div>

    <script>
        $(document).ready(function (){
            $("#imageInput").change(function (e){
                var reader = new FileReader();
                reader.onload=function (e){
                    $("#showImage").attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files[0]);
            })
            // $("#imageInput").change(function () {
            //     if (this.files && this.files[0]) {
            //         var reader = new FileReader();
            //         reader.onload = function (e) {
            //             $('#showImage').attr('src', e.target.result);
            //         }
            //         reader.readAsDataURL(this.files[0]);
            //     }
            // })

        })
    </script>

@endsection
