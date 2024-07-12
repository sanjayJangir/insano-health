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
    <div class="main-container d-flex">
        @include('users.partials.sidebar')
        <div class="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between d-md-none d-block">
                        <a class="navbar-brand" href="#">Trusted Healthcare</a>
                        <button class="btn px-1 py-0 open-btn"><i class="fas fa-bars"></i></button>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                             <li class="nav-item">
                                 <a class="nav-link active" aria-current="page" href="#">Home</a>
                             </li>



                         </ul>
                        -->

                    </div>
                </div>
            </nav>

            <div class="dashboard-content px-3 pt-4">

                <div class="container p-4 con">
                    <div class="row">
                        <div class="col-3 d-inline bar-div px-3">
                            <a class="text-decoration-none bar-link"
                                href="C:\Users\visha\OneDrive\Desktop\new-healthcare\details.html"><i
                                    class="px-2 far fa-user-circle"></i>Basic
                                Information</a>
                        </div>
                        <div class="col-3 d-inline bar-div px-3">
                            <a class="text-decoration-none bar-link active"
                                href="C:\Users\visha\OneDrive\Desktop\new-healthcare\contact.html"><i
                                    class="px-2 fal fa-light fa-address-card"></i>Contact
                                Details</a>
                        </div>
                    </div>
                </div>

                <div class="row px-2">
                    <label for="" class="form-label ml-3">Search City</label>
                    <input style="width: 52%;" type="text" class="ml-3 form-control search-city">
                    <div class="col-lg-6 my-4">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115681.29592731265!2d-77.47713270775661!3d25.0326996781907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x892f7c99b981dbc9%3A0x2aef01d3485e50d2!2sNassau%2C%20Bahamy!5e0!3m2!1spl!2spl!4v1624445118063!5m2!1spl!2spl"
                            class="w-100" height="400" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

                <form action="" class="container p-2 mx-3">



                    <div class="row">
                        <h5>Phone & Email</h5>
                        <div class="col col-lg-6 col-sm-12">
                            <div class="p-3">
                                <label class="form-label" for="">Phone</label>
                                <input type="text" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col ">
                            <div class="p-3">
                                <label class="form-label" for="">Email Id</label>
                                <input type="email" class="form-control" placeholder="Email Id">
                            </div>
                        </div>

                    </div>
                    <div class="btn btn-primary">
                        <a class="text-decoration-none text-white" href="">Save</a>
                    </div>

                    <div class="row">
                        <h5 class="pt-4">Address</h5>
                        <div class="col col-lg-6 ">
                            <div class="p-3">
                                <label class="form-label" for="">Address Line 1</label>
                                <input type="text" class="form-control" placeholder="Address Line 1">
                            </div>
                        </div>
                        <div class="col col-lg-6 ">
                            <div class="p-3">
                                <label class="form-label" for="">Address Line 2</label>
                                <input type="text" class="form-control" placeholder="Address Line 2">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col col-lg-6 ">
                            <div class="p-3">
                                <label class="form-label" for="">Country</label>
                                <input type="text" class="form-control" placeholder="Country">
                            </div>
                        </div>
                        <div class="col col-lg-6 ">
                            <div class="p-3">
                                <label class="form-label" for="">State</label>
                                <input type="text" class="form-control" placeholder="State">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-lg-6 ">
                            <div class="p-3">
                                <label class="form-label" for="">City</label>
                                <input type="text" class="form-control" placeholder="City">
                            </div>
                        </div>
                        <div class="col col-lg-6 ">
                            <div class="p-3">
                                <label class="form-label" for="">Pincode</label>
                                <input type="text" class="form-control" placeholder="Pincode">
                            </div>
                        </div>
                    </div>
                    <div class="btn btn-primary">
                        <a class="text-decoration-none text-white" href="">Create Profile</a>
                    </div>
            </div>


            </form>

        </div>

    </div>
@endsection
@section('css')
@endsection
@section('script')
@endsection
