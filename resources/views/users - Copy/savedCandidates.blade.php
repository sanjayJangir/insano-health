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
            <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <div class="d-flex justify-content-between d-md-none d-block">
                            <a class="navbar-brand" href="#">Insano <span class="health">Healthcare</span></a>
                            <button class="btn px-1 py-0 open-btn"><i class="fas fa-bars"></i></button>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>



                    </ul>


                        </div>
                    </div>
                </nav> -->

            <div class="dashboard-content px-3 pt-4">

                <!-- <div class="container p-4 con">
                        <div class="d-inline bar-div px-3">
                            <a class="text-decoration-none bar-link" href="C:\Users\visha\OneDrive\Desktop\new-healthcare\details.html"><span><i class="px-2 far fa-user-circle"></i></span>Basic
                                Information</a>
                        </div>
                        <div class="d-inline bar-div px-3">
                            <a class="text-decoration-none bar-link" href="C:\Users\visha\OneDrive\Desktop\new-healthcare\contact.html"><span><i
                                    class="px-2 fal fa-light fa-address-card"></i></span>Contact
                                Details</a>
                        </div>
                    </div> -->

                <div class="card-box">

                    <div class="row gapinrow">
                        <div class="col d-flex">
                            <p style="text-align:left; font-size:17px;font-weight:500;">Bookmarks
                            <p class="text-secondary" style="text-align:left; font-size:17px;font-weight:500;">(3)</p>
                        </div>
                        <div class="col" style="text-align: right;font-weight:500; ">
                            <div class="d-flex tw-items-center">
                                <p class="" style="text-align:left; font-size:17px;font-weight:500;">Filter</p>
                                <div class="custom-select" style="width:150px; margin-left: 30px;">
                                    <select>
                                        <option value="0"> All</option>
                                        <option value="1">Nurse</option>
                                        <option value="2">Senior Nurse</option>
                                        <option value="3">Surgeon</option>
                                    </select>
                                </div>
                                <button type="button" class="m-auto btn btn-outline-primary buttoncolor">Category<span
                                        class=""><i class="px-1 fal fa-arrow-right"></span></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="card-row row justify-content-between">

                        <div class="col my-2 d-flex">
                            <img class="profile-img m-1 my-2 "
                                src="https://jobpilot.templatecookie.com/dummy/images/candidates/candidate-02.jpg"
                                alt="profile-image" />
                            <div class="my-1 mx-3">
                                <h6 class="mb-0 card-name" style="text-align:left">Aryan Mehra</h6>
                                <p class="mb-0">Surgeon</p>
                            </div>
                        </div>
                        <div class="col my-2 d-flex justify-content-end">
                            <a href="#" class="m-auto text-decoration-none card-link card-text"><i
                                    class=" fal fa-solid fa-bookmark"></i></a>
                            <button type="button" class="m-auto btn btn-outline-primary buttoncolor">View Profile<span
                                    class=""><i class="px-1 fal fa-arrow-right"></span></i></button>
                            <a href="#" class="m-auto text-decoration-none card-link card-text"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="19" fill="currentColor"
                                    class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                    <path
                                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                </svg></a>

                        </div>
                    </div>

                    <div class="card-row d-flex row justify-content-between">
                        <div class="col my-2 d-flex">
                            <img class="profile-img m-1"
                                src="https://jobpilot.templatecookie.com/dummy/images/candidates/candidate-02.jpg"
                                alt="profile-image" />
                            <div class="my-1 mx-3">
                                <h6 class="mb-0 card-name" style="text-align:left">Priya</h6>
                                <p class="mb-0">Nurse</p>
                            </div>
                        </div>
                        <div class="col my-2 d-flex justify-content-end">
                            <a href="#" class="m-auto text-decoration-none card-link card-text"><i
                                    class=" fal fa-solid fa-bookmark"></i></a>
                            <button type="button" class="m-auto btn btn-outline-primary buttoncolor">View Profile<span
                                    class=""><i class="px-1 fal fa-arrow-right"></span></i></button>
                            <a href="#" class="m-auto text-decoration-none card-link card-text"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="19" fill="currentColor"
                                    class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                    <path
                                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                </svg></a>
                        </div>
                    </div>
                    <div class="card-row   row justify-content-between">
                        <div class="col my-2 d-flex">
                            <img class="profile-img m-1"
                                src="https://jobpilot.templatecookie.com/dummy/images/candidates/candidate-02.jpg"
                                alt="profile-image" />
                            <div class="my-1 mx-3">
                                <h6 class="mb-0 card-name" style="text-align:left">Aryan Mehra</h6>
                                <p class="mb-0">Surgeon</p>
                            </div>
                        </div>
                        <div class="col my-2 d-flex justify-content-end">
                            <a href="#" class="m-auto text-decoration-none card-link card-text"><i
                                    class=" fal fa-solid fa-bookmark"></i></a>
                            <button type="button" class="m-auto btn btn-outline-primary buttoncolor">View Profile<span
                                    class=""><i class="px-1 fal fa-arrow-right"></span></i></button>
                            <a href="#" class="m-auto text-decoration-none card-link card-text"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="19" fill="currentColor"
                                    class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                    <path
                                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                </svg></a>
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
@endsection
@section('css')
@endsection
@section('script')
@endsection
