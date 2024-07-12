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
            <nav class="navbar navbar-expand-lg navbar-light bg-light p-0">
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

                </div>
            </nav>

            <div class="dashboard-content px-3 pt-4">



                <div class="card-box">

                    <div class="d-flex">
                        <a class="shadow text-decoration-none  col d-flex overview-profile-card m-5 p-4 justify-content-between align-items-center"
                            href="" style="background:#fff7cf">

                            <div>
                                <h5 class="text-dark">2</h5>
                                <p class="text-dark">Saved Candidate</p>
                            </div>
                            <span class="p-2 tw-bg-white tw-rounded-lg">
                                <div class="p-1 rounded" style="border:2px solid #e7ac3a">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="24" fill="#e7ac3a"
                                        class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                                    </svg>
                            </span>
                    </div>

                    </a>
                    <a class="shadow text-decoration-none  col d-flex overview-profile-card m-5 p-4 justify-content-between align-items-center bs-info-border-subtle"
                        href="">

                        <div>
                            <h5 class="text-dark">4</h5>
                            <p class="text-dark">Profile Views</p>
                        </div>
                        <span class="p-2 tw-bg-white tw-rounded-lg">
                            <div class="p-1 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#087990"
                                    class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                </svg>
                        </span>
                </div>

                </a>
            </div>

            <div class="card-box">

                <div class="row">
                    <div class="col">
                        <p style="text-align:left; font-size:17px;font-weight:500;">Recent Healthcare Professionals</p>
                    </div>
                    <div class="col" style="text-align: right;font-weight:500; "><a
                            class="text-decoration-none text-secondary" href="">View all <span class=""><i
                                    class="px-1 fal fa-arrow-right"></i></span></a></div>
                </div>

                <div class="card-head mt-4 row d-flex text-secondary ">

                    <div class="col">
                        <h6>Name</h6>
                    </div>
                    <div class="col">
                        <h6 class="">Status</h6>
                    </div>

                    <div class="col ">
                        <h6 class="marginleftaction">Action</h6>

                    </div>

                </div>
                <div class="col">


                    <div class="card-row row flex">

                        <div class="col">
                            <h6 class="mt-4">Aryan Mehra</h6>
                            <div class=" d-flex">
                                <p class="">Surgeon</p>
                            </div>
                        </div>
                        <div class="col">
                            <h6 class="my-4 act">Active</h6>
                        </div>

                        <div class="col justify-content-between d-flex">
                            <button type="button" class="m-auto btn btn-outline-primary buttoncolor">View Profile<span
                                    class=""><i class="px-1 fal fa-arrow-right"></span></i></button>

                            <div class="my-4"><a href="#" class=" text-decoration-none card-link card-text"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="19" fill="currentColor"
                                        class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                        <path
                                            d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                    </svg></a></div>

                        </div>

                    </div>
                    <div class="card-row row flex">

                        <div class="col">
                            <h6 class="mt-4">Shriya Jain</h6>
                            <div class=" d-flex">
                                <p class="">Senior Nurse</p>
                            </div>
                        </div>
                        <div class="col">
                            <h6 class="my-4 inact">Inactive</h6>
                        </div>

                        <div class="col justify-content-between d-flex">
                            <button type="button" class="m-auto btn btn-outline-primary buttoncolor">View Profile<span
                                    class=""><i class="px-1 fal fa-arrow-right"></span></i></button>

                            <div class="my-4"><a href="#" class=" text-decoration-none card-link card-text"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="19"
                                        fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                        <path
                                            d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                    </svg></a></div>

                        </div>

                    </div>
                    <div class="card-row row flex">

                        <div class="col">
                            <h6 class="mt-4">Aryan Mehra</h6>
                            <div class=" d-flex">
                                <p class="">Surgeon</p>
                            </div>
                        </div>
                        <div class="col">
                            <h6 class="my-4 act">Active</h6>
                        </div>

                        <div class="col justify-content-between d-flex">
                            <button type="button" class="m-auto btn btn-outline-primary buttoncolor">View Profile<span
                                    class=""><i class="px-1 fal fa-arrow-right"></span></i></button>

                            <div class="my-4"><a href="#" class=" text-decoration-none card-link card-text"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="19"
                                        fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                        <path
                                            d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                    </svg></a></div>

                        </div>

                    </div>
                    <div class="card-row row flex gapinrow">

                        <div class="col">
                            <h6 class="mt-4">Shriya Jain</h6>
                            <div class=" d-flex">
                                <p class="">Senior Nurse</p>
                            </div>
                        </div>
                        <div class="col">
                            <h6 class="my-4 inact">Inactive</h6>
                        </div>

                        <div class="col justify-content-between d-flex">
                            <button type="button" class="m-auto btn btn-outline-primary buttoncolor">View Profile<span
                                    class=""><i class="px-1 fal fa-arrow-right"></span></i></button>

                            <div class="my-4"><a href="#" class=" text-decoration-none card-link card-text"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="19"
                                        fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                        <path
                                            d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                    </svg></a></div>

                        </div>

                    </div>

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
