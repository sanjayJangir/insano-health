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
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">


                    </div>
                </div>
            </nav>

            <div class="dashboard-content px-3 pt-4">



                <div class="card-box">

                    <div class="card-row row justify-content-between">

                        <div class="col">
                            <h6 class="mt-4">test</h6>
                            <div class=" d-flex">
                                <p class="">Contractual</p>
                            </div>
                        </div>
                        <div class="col">
                            <h6 class="my-4">Active</h6>
                        </div>
                        <div class="col">
                            <p class="my-4">0 applicants</p>
                        </div>
                        <div class="col">
                            <div class="my-4 btn btn-primary">
                                <a class="text-decoration-none text-white" href="{{ route('users.saved-candidates') }}">View
                                    Application</a>
                            </div>

                        </div>
                        <div class="col">
                            <div class="my-4">
                                <a href="#" class=" text-decoration-none card-link card-text"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="19" fill="currentColor"
                                        class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                        <path
                                            d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                    </svg></a>
                            </div>

                        </div>

                    </div>
                    <div class="card-row row justify-content-between">

                        <div class="col">
                            <h6 class="mt-4">test</h6>
                            <div class=" d-flex">
                                <p class="">Contractual</p>
                            </div>
                        </div>
                        <div class="col">
                            <h6 class="my-4">Active</h6>
                        </div>
                        <div class="col">
                            <p class="my-4">0 applicants</p>
                        </div>
                        <div class="col">
                            <div class="my-4 btn btn-primary">
                                <a class="text-decoration-none text-white" href="{{ route('users.saved-candidates') }}">View
                                    Application</a>
                            </div>

                        </div>
                        <div class="col">
                            <div class="my-4"><a href="#" class=" text-decoration-none card-link card-text"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="19"
                                        fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                        <path
                                            d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                    </svg></a></div>

                        </div>

                    </div>
                    <div class="card-row row justify-content-between">

                        <div class="col">
                            <h6 class="mt-4">test</h6>
                            <div class=" d-flex">
                                <p class="">Contractual</p>
                            </div>
                        </div>
                        <div class="col">
                            <h6 class="my-4">Active</h6>
                        </div>
                        <div class="col">
                            <p class="my-4">0 applicants</p>
                        </div>
                        <div class="col">
                            <div class="my-4 btn btn-primary">
                                <a class="text-decoration-none text-white"
                                    href="{{ route('users.saved-candidates') }}">View
                                    Application</a>
                            </div>

                        </div>
                        <div class="col">
                            <div class="my-4"><a href="#" class=" text-decoration-none card-link card-text"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="19"
                                        fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                        <path
                                            d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                    </svg></a></div>

                        </div>

                    </div>
                    <div class="card-row row justify-content-between">

                        <div class="col">
                            <h6 class="mt-4">test</h6>
                            <div class=" d-flex">
                                <p class="">Contractual</p>
                            </div>
                        </div>
                        <div class="col">
                            <h6 class="my-4">Active</h6>
                        </div>
                        <div class="col">
                            <p class="my-4">0 applicants</p>
                        </div>
                        <div class="col">
                            <div class="my-4 btn btn-primary">
                                <a class="text-decoration-none text-white"
                                    href="{{ route('users.saved-candidates') }}">View
                                    Application</a>
                            </div>

                        </div>
                        <div class="col">
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
@endsection
@section('css')
@endsection
@section('script')
@endsection
