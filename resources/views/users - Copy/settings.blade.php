@extends('users.layouts.app')

@section('description')
@php
$data = metaData('contact');
@endphp
{{ $data->description }}
@endsection
@section('og:image')
{{ asset($data->image) }}
@endsection
@section('title')
{{ $data->title }}
@endsection

@section('main')
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
<style>
    .nav-tabs .nav-item.show .nav-link-box,
    .nav-tabs .nav-link-box.active {
        width: 200px;
        height: 40px;
        border: none !important;
        border-bottom: 2px solid #2276eb !important;
        /* background-image: linear-gradient(#000, #000), radial-gradient(circle at top left, #0853BD, #02DAD5) !important;
    background-origin: border-box !important;
    background-clip: padding-box, border-box !important; */
        color: #2276eb !important;
        font-weight: 600 !important;
        /* border-radius: 20px !important; */
        background: none;
        fill: #2276eb !important;
    }

    .nav-link-box:hover {
        width: 200px;
        height: 40px;
        border: none !important;
        border-bottom: 2px solid #2276eb !important;
        color: #2276eb !important;
        font-weight: 600 !important;
        background: none;
        fill: #2276eb !important;
    }

    .nav-link-box {
        width: 200px;
        height: 40px;
        /* border-bottom: double 2px transparent !important; */
        color: black !important;
        font-weight: 600 !important;
        border: none !important;
        background: none;
    }

    .tab-content > .active {
        border-left: none;
        background: none;
    }
</style>
<div class="main-container d-flex">
    @include('users.partials.sidebar')

    <div class="content px-3 pt-4">
        <div class="tab-box">
            <nav class="ml-20">
                <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                    <button class="nav-link-box mx-2 tab-button active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" class="bi bi-person-lines-fill border rounded p-1" viewBox="0 0 16 16">
                            <path
                                d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"
                            />
                        </svg>
                        Basic Information
                    </button>
                    <button class="nav-link-box mx-2 tab-button" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                        Contact Details
                    </button>
                </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
                <!-- first tab -->
                <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <form action="" class="container p-2 mx-3">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="p-3">
                                    <label class="form-label" for="">Your name</label>
                                    <input type="text" class="form-control" placeholder="Your name" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="p-3">
                                    <label class="form-label" for="">Date of birth</label>
                                    <!-- <input type="date" name="birthday" class="form-control text-secondary"
                                        placeholder=""> -->
                                    <input type="date" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- <h5 class="pt-4">Address</h5> -->
                            <div class="col-sm-6">
                                <div class="p-3">
                                    <label class="form-label" for="">Nationality</label>
                                    <input type="text" class="form-control" placeholder="Nationality" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="p-3">
                                    <label class="form-label" for="">Gender</label>
                                    <select class="form-control py-0 px-2 text-secondary" aria-label="Default select example">
                                        <option selected>Select Gender</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="p-3">
                                    <label class="form-label" for="customFile">Upload Image</label>
                                    <div class="profile-image-upload-wrap h-25 tw-bg-white">
                                        <input name="image" class="profile-file-upload-input" type="file" onchange="readURL(this);" accept="image/*" />
                                        <div class="drag-text">
                                            <svg width="48" height="49" viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M32 32.5L24 24.5L16 32.5" stroke="#ADB2BA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M24 24.5V42.5" stroke="#ADB2BA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M40.7809 37.2809C42.7316 36.2175 44.2726 34.5347 45.1606 32.4982C46.0487 30.4617 46.2333 28.1874 45.6853 26.0343C45.1373 23.8812 43.8879 21.972 42.1342 20.6078C40.3806 19.2437 38.2226 18.5024 36.0009 18.5009H33.4809C32.8755 16.1594 31.7472 13.9856 30.1808 12.1429C28.6144 10.3002 26.6506 8.83664 24.4371 7.86216C22.2236 6.88767 19.818 6.42766 17.4011 6.51671C14.9843 6.60576 12.619 7.24154 10.4833 8.37628C8.34747 9.51101 6.49672 11.1152 5.07014 13.0681C3.64356 15.0211 2.67828 17.272 2.24686 19.6517C1.81544 22.0314 1.92911 24.478 2.57932 26.8075C3.22954 29.1369 4.39938 31.2887 6.0009 33.1009"
                                                    stroke="#ADB2BA"
                                                    stroke-width="3"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                                <path d="M32 32.5L24 24.5L16 32.5" stroke="#ADB2BA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>

                                            <h3>{{ __('browse_photo_or_drop_here') }}</h3>
                                            <p>{{ __('photo_larger_than_pixels_work_best_max_photo_size_mb') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="p-3">
                                    <label class="form-label" for="customFile">Upload Banner Image</label>
                                    <div class="profile-image-upload-wrap h-25 tw-bg-white">
                                        <input name="image" class="profile-file-upload-input" type="file" onchange="readURL(this);" accept="image/*" />
                                        <div class="drag-text">
                                            <svg width="48" height="49" viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M32 32.5L24 24.5L16 32.5" stroke="#ADB2BA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M24 24.5V42.5" stroke="#ADB2BA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M40.7809 37.2809C42.7316 36.2175 44.2726 34.5347 45.1606 32.4982C46.0487 30.4617 46.2333 28.1874 45.6853 26.0343C45.1373 23.8812 43.8879 21.972 42.1342 20.6078C40.3806 19.2437 38.2226 18.5024 36.0009 18.5009H33.4809C32.8755 16.1594 31.7472 13.9856 30.1808 12.1429C28.6144 10.3002 26.6506 8.83664 24.4371 7.86216C22.2236 6.88767 19.818 6.42766 17.4011 6.51671C14.9843 6.60576 12.619 7.24154 10.4833 8.37628C8.34747 9.51101 6.49672 11.1152 5.07014 13.0681C3.64356 15.0211 2.67828 17.272 2.24686 19.6517C1.81544 22.0314 1.92911 24.478 2.57932 26.8075C3.22954 29.1369 4.39938 31.2887 6.0009 33.1009"
                                                    stroke="#ADB2BA"
                                                    stroke-width="3"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                                <path d="M32 32.5L24 24.5L16 32.5" stroke="#ADB2BA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>

                                            <h3>{{ __('browse_photo_or_drop_here') }}</h3>
                                            <p>{{ __('photo_larger_than_pixels_work_best_max_photo_size_mb') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="">
                                <div class="p-3">
                                    <label for="Bio" class="form-label">Bio</label>
                                    <textarea name="Bio" class="form-control" id="" cols="150" rows="6"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="btn mx-3 my-1" style="background: #0b5ed7;">
                            <a class="text-decoration-none text-white" href="C:\Users\visha\OneDrive\Desktop\new-healthcare\saved-candidates.html">Update Profile</a>
                        </div>
                    </form>
                </div>

                <!-- second tab -->
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row p-2 mx-3">
                        <label for="" class="form-label ml-3 text-black">Search City (Click to add a pointer)</label>
                        <input style="width: 100%;" type="text" class="ml-3 form-control search-city" placeholder="Enter city name" />
                        <div class="my-4">
                            <iframe
                                style="width: 100%;"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115681.29592731265!2d-77.47713270775661!3d25.0326996781907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x892f7c99b981dbc9%3A0x2aef01d3485e50d2!2sNassau%2C%20Bahamy!5e0!3m2!1spl!2spl!4v1624445118063!5m2!1spl!2spl"
                                class="w-100"
                                height="400"
                                allowfullscreen=""
                                loading="lazy"
                            ></iframe>
                        </div>
                    </div>
                    <form action="" class="container p-2 mx-3">
                        <div class="row">
                            <h5 class="px-4 fs-5 fw-semibold">Phone & Email</h5>
                            <div class="col-sm-6">
                                <div class="p-3">
                                    <label class="form-label" for="">Phone</label>
                                    <input type="text" class="form-control" placeholder="Phone Number" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="p-3">
                                    <label class="form-label" for="">Email Id</label>
                                    <input type="email" class="form-control" placeholder="Email Id" />
                                </div>
                            </div>
                        </div>
                        <div class="mx-3 btn btn" style="background: #0b5ed7;">
                            <a class="text-decoration-none text-white" href="">Save Change</a>
                        </div>
                        <hr />
                        <div class="row">
                            <h5 class="px-4 fs-5 fw-semibold">Change Password</h5>
                            <div class="col-sm-6">
                                <div class="p-3">
                                    <label class="form-label" for="">New Password *</label>
                                    <div class="input-group rounded" id="show_hide_password" style="background:#e8f0fe">
                                        <input class="form-control" type="password" placeholder="password">
                                        <div class="input-group-addon d-flex align-items-center px-3">
                                            <a href=""><i class="fal fa-eye-slash" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="p-3">
                                        <label class="form-label" for="">Confirm Password *</label>
                                        <div class="input-group rounded" id="show_hide_password_confirm" style="background:#e8f0fe">
                                            <input class="form-control" type="password" placeholder="confirm password">
                                            <div class="input-group-addon d-flex align-items-center px-3">
                                                <a href=""><i class="fal fa-eye-slash" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="mx-3 btn btn" style="background: #0b5ed7;">
                            <a class="text-decoration-none text-white" href="">Save Change</a>
                        </div>
                        <hr />



                        <div class="row">
                            <h5 class="px-4 fs-5 fw-semibold">Close/Delete Account</h5>
                            <small class="px-4 w-50 text-secondary">
                                If you delete your account, you will no longer be able to get information about the matched jobs, following employers, job alerts, shortlisted jobs, and more. You will be abandoned from all the services of
                                application
                            </small>
                        </div>
                        <div class="text-secondary m-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#dc3545" class="bi bi-x-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                            <a class="text-decoration-none text-danger px-1" href="">Close Account</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('css')
@endsection
@section('script')
<script>
    $(document).ready(function() {
    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
    $("#show_hide_password_confirm a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password_confirm input').attr("type") == "text"){
            $('#show_hide_password_confirm input').attr('type', 'password');
            $('#show_hide_password_confirm i').addClass( "fa-eye-slash" );
            $('#show_hide_password_confirm i').removeClass( "fa-eye" );
        }else if($('#show_hide_password_confirm input').attr("type") == "password"){
            $('#show_hide_password_confirm input').attr('type', 'text');
            $('#show_hide_password_confirm i').removeClass( "fa-eye-slash" );
            $('#show_hide_password_confirm i').addClass( "fa-eye" );
        }
    });
});
</script>
@endsection
