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
    <div class="content my-3">
    <div class="single-page-banner">
        <div class="container">
            <h6 class="my-2">Employers detail</h6>
            <div class="row my-3">
                <div class="col-xl-12">
                    <div class="back-image body-24"
                        style="background-image: url('https://s3.envato.com/files/385317216/Profile%20Banner%20(1).jpg');">
                    </div>
                    <div class="profile-card-row border row">
                        <div class="col p-3 d-flex align-items-center">
                            <img class="profile-img m-1"
                                src="https://jobpilot.templatecookie.com/dummy/images/candidates/candidate-02.jpg"
                                alt="profile-image" style="width: 90px;
                        height: 90px;
                        " />
                            <div class="my-1 mx-3">
                                <h6 class="mb-0 card-name" style="text-align:left">John Doe</h6>
                                <p class="mb-0">Nationality</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="container">
            <div class="row px-4">
                <div class="col-lg-7 py-2">
                    <h3>Bio</h3>
                    <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor
                        incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis
                        aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint
                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="col-lg-5 py-2 ">
                    <div class="row border rounded">
                        <div class="col-sm-6 px-5 py-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="blue"
                                class="bi bi-gender-ambiguous" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M11.5 1a.5.5 0 0 1 0-1h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-3.45 3.45A4 4 0 0 1 8.5 10.97V13H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V14H6a.5.5 0 0 1 0-1h1.5v-2.03a4 4 0 1 1 3.471-6.648L14.293 1H11.5zm-.997 4.346a3 3 0 1 0-5.006 3.309 3 3 0 0 0 5.006-3.31z" />
                            </svg>

                            <p class="pt-2 mb-0 lightgraycolor" style="font-size: 12px;">GENDER</p>
                            <h6 class="" style="font-size: 12px;">Male</h6>
                        </div>
                        <div class="col-sm-6 px-5 py-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="blue"
                                class="bi bi-calendar-check" viewBox="0 0 16 16">
                                <path
                                    d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                <path
                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                            </svg>
                            <p class="pt-2 mb-0 lightgraycolor" style="font-size: 12px;">DOB</p>
                            <h6 class="" style="font-size: 12px;">05/12/1997</h6>
                        </div>
                    </div>


                    <div class="row border my-3 rounded">
                        <div class=" px-5 py-3">
                            <h6>Contact Information</h6>

                            <div class="d-flex gap-3">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="blue"
                                        class="bi bi-geo-alt" viewBox="0 0 16 16">
                                        <path
                                            d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    </svg>
                                </div>
                                <div>
                                    <i class="fa-solid fa-person-half-dress"></i>
                                    <p class=" mb-0 lightgraycolor" style="font-size: 12px;">LOCATION</p>
                                    <h6 class="pt-1" style="font-size: 12px;">India</h6>
                                </div>
                            </div>
                            <p class="" style="background: rgb(200, 196, 196); height: 1px;"></p>
                            <div class="d-flex gap-3">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="blue"
                                        class="bi bi-telephone" viewBox="0 0 16 16">
                                        <path
                                            d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                    </svg>
                                </div>
                                <div>
                                    <i class="fa-solid fa-person-half-dress"></i>
                                    <p class=" mb-0 lightgraycolor" style="font-size: 12px;">PHONE</p>
                                    <h6 class="pt-1" style="font-size: 14px;">08978665434</h6>
                                </div>
                            </div>
                            <p class="" style="background: rgb(200, 196, 196); height: 0.5px;"></p>
                            <div class="d-flex gap-3">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="blue"
                                        class="bi bi-envelope" viewBox="0 0 16 16">
                                        <path
                                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                    </svg>
                                </div>
                                <div>
                                    <i class="fa-solid fa-person-half-dress"></i>
                                    <p class=" mb-0 lightgraycolor" style="font-size: 12px;">EMAIL ADDRESS</p>
                                    <h6 class="pt-1" style="font-size: 14px;">gagan@gmail.com</h6>
                                </div>
                            </div>


                        </div>

                    </div>



                </div>
            </div>
        </div>
    </div>


</div>
</div>
@endsection
@section('css')
@endsection
@section('script')
@endsection
