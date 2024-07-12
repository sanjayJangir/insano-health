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
    <style>
        .nav-tabs .nav-item.show .nav-link-box,
        .nav-tabs .nav-link-box.active {
            width: 200px;
            height: 40px;
            border: none !important;
            border-bottom: 2px solid #2276eb !important;

            color: #2276eb !important;
            font-weight: 600 !important;
            background: none;
            fill: #2276eb !important
        }

        .nav-link-box:hover {
            width: 200px;
            height: 40px;
            border: none !important;
            border-bottom: 2px solid #2276eb !important;
            color: #2276eb !important;
            font-weight: 600 !important;
            background: none;
            fill: #2276eb !important
        }

        .nav-link-box {
            width: 200px;
            height: 40px;
            color: black !important;
            font-weight: 600 !important;
            border: none !important;
            background: none;

        }

        .tab-content>.active {
            border-left: none;
            background: none
        }
    </style>
    <div class="main-container d-flex">
        @include('users.partials.sidebar')

        <div class="content px-3 pt-4">
            <div class="tab-box">
                <nav class="ml-20">
                    <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                        <button class="nav-link-box mx-2 tab-button active" id="nav-home-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                            aria-selected="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                class="bi bi-person-lines-fill border rounded p-1 " viewBox="0 0 16 16">
                                <path
                                    d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                            </svg>
                            Basic Information
                        </button>
                        <button class="nav-link-box mx-2 tab-button" id="nav-profile-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                            aria-selected="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                            Contact Details
                        </button>
                    </div>
                </nav>
                <div class="tab-content p-3" id="nav-tabContent">
                    <!-- first tab -->
                    <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <form action="{{ route('users.userStore') }}" method="post" class="container p-2 mx-3"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="p-3">
                                        <label class="form-label" for="">Your name</label>
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror" placeholder="Your name"
                                            value="{{ $login_user->name }}">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">{{ __($message) }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="p-3">
                                        <label class="form-label" for="">Date of birth</label>
                                        <input type="date" id="birthday" name="birthday"
                                            class="form-control text-secondary @error('birthday') is-invalid @enderror"
                                            value="{{ $login_user->date_of_birth }}" placeholder="">
                                        @error('birthday')
                                            <span class="invalid-feedback" role="alert">{{ __($message) }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="p-3">
                                        <label class="form-label" for="">Nationality</label>
                                        <input type="text" name="nationality" value="{{ $login_user->nationality }}"
                                            class="form-control @error('nationality') is-invalid @enderror"
                                            placeholder="Nationality">
                                        @error('nationality')
                                            <span class="invalid-feedback" role="alert">{{ __($message) }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="p-3">
                                        <label class="form-label" for="">Gender</label>
                                        <select
                                            class=" form-control py-0 px-2 text-secondary @error('gender') is-invalid @enderror"
                                            aria-label="Default select example" name="gender">
                                            <option>Select Gender</option>
                                            <option {{ $login_user->gender == 'male' ? 'selected' : '' }} value="male">
                                                Male</option>
                                            <option {{ $login_user->gender == 'female' ? 'selected' : '' }} value="female">
                                                Female</option>
                                            <option {{ $login_user->gender == 'three' ? 'selected' : '' }} value="three">
                                                Three</option>
                                        </select>
                                        @error('gender')
                                            <span class="invalid-feedback" role="alert">{{ __($message) }}</span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="p-3">
                                        <label class="form-label" for="customFile">Upload Image</label>
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">{{ __($message) }}</span>
                                        @enderror
                                        <div class="profile-image-upload-wrap h-25 tw-bg-white">
                                            <input name="image"
                                                class="profile-file-upload-input @error('image') is-invalid @enderror"
                                                type="file" onchange="readURL(this);" data-linkUrl="hiddenurlimage"
                                                accept="image/*" />
                                            <!-- onchange="readURL(this);" -->
                                            <input type="hidden" value="" name="hiddenurlimage"
                                                class="hiddenurlimage" id="hiddenurlimage" />
                                            <div class="drag-text">
                                                <svg width="48" height="49" viewBox="0 0 48 49" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M32 32.5L24 24.5L16 32.5" stroke="#ADB2BA" stroke-width="3"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M24 24.5V42.5" stroke="#ADB2BA" stroke-width="3"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path
                                                        d="M40.7809 37.2809C42.7316 36.2175 44.2726 34.5347 45.1606 32.4982C46.0487 30.4617 46.2333 28.1874 45.6853 26.0343C45.1373 23.8812 43.8879 21.972 42.1342 20.6078C40.3806 19.2437 38.2226 18.5024 36.0009 18.5009H33.4809C32.8755 16.1594 31.7472 13.9856 30.1808 12.1429C28.6144 10.3002 26.6506 8.83664 24.4371 7.86216C22.2236 6.88767 19.818 6.42766 17.4011 6.51671C14.9843 6.60576 12.619 7.24154 10.4833 8.37628C8.34747 9.51101 6.49672 11.1152 5.07014 13.0681C3.64356 15.0211 2.67828 17.272 2.24686 19.6517C1.81544 22.0314 1.92911 24.478 2.57932 26.8075C3.22954 29.1369 4.39938 31.2887 6.0009 33.1009"
                                                        stroke="#ADB2BA" stroke-width="3" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M32 32.5L24 24.5L16 32.5" stroke="#ADB2BA" stroke-width="3"
                                                        stroke-linecap="round" stroke-linejoin="round" />
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
                                        @error('banner_image')
                                            <span class="invalid-feedback" role="alert">{{ __($message) }}</span>
                                        @enderror
                                        <div class="profile-image-upload-wrap h-25 tw-bg-white">
                                            <input name="banner_image"
                                                class="profile-file-upload-input @error('banner_image') is-invalid @enderror"
                                                type="file" accept="image/*" />
                                            <!-- onchange="readURL(this);" -->
                                            <div class="drag-text">
                                                <svg width="48" height="49" viewBox="0 0 48 49" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M32 32.5L24 24.5L16 32.5" stroke="#ADB2BA" stroke-width="3"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M24 24.5V42.5" stroke="#ADB2BA" stroke-width="3"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path
                                                        d="M40.7809 37.2809C42.7316 36.2175 44.2726 34.5347 45.1606 32.4982C46.0487 30.4617 46.2333 28.1874 45.6853 26.0343C45.1373 23.8812 43.8879 21.972 42.1342 20.6078C40.3806 19.2437 38.2226 18.5024 36.0009 18.5009H33.4809C32.8755 16.1594 31.7472 13.9856 30.1808 12.1429C28.6144 10.3002 26.6506 8.83664 24.4371 7.86216C22.2236 6.88767 19.818 6.42766 17.4011 6.51671C14.9843 6.60576 12.619 7.24154 10.4833 8.37628C8.34747 9.51101 6.49672 11.1152 5.07014 13.0681C3.64356 15.0211 2.67828 17.272 2.24686 19.6517C1.81544 22.0314 1.92911 24.478 2.57932 26.8075C3.22954 29.1369 4.39938 31.2887 6.0009 33.1009"
                                                        stroke="#ADB2BA" stroke-width="3" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M32 32.5L24 24.5L16 32.5" stroke="#ADB2BA" stroke-width="3"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>

                                                <h3>{{ __('browse_photo_or_drop_here') }}</h3>
                                                <p>{{ __('photo_larger_than_pixels_work_best_max_photo_size_mb') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="">
                                    <div class="p-3">
                                        <label for="Bio" class="form-label">Bio</label>
                                        <textarea name="aboutus" class="form-control @error('aboutus') is-invalid @enderror" id="" cols="150"
                                            rows="6">{{ $login_user->aboutus }}</textarea>
                                        @error('aboutus')
                                            <span class="invalid-feedback" role="alert">{{ __($message) }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="btn mx-3 my-1" style="background:#0b5ed7"> -->
                            <!-- <a class="text-decoration-none text-white" href="#">Update Profile</a> -->
                            <button type="submit" class="text-decoration-none btn mx-3 my-1" name="UpdateProfile"
                                style="background:#0b5ed7">Update Profile</button>
                            <!-- </div> -->
                        </form>
                    </div>

                    <!-- second tab -->
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                        <div class="row p-2 mx-3">
                            <label for="" class="form-label ml-3 text-black">Search City (Click to add a
                                pointer)</label>
                            <input style="width: 100%;" type="text" class="ml-3 form-control search-city"
                                placeholder="Enter city name" id="geocompletes" value="111 Broadway, New York, NY">
                            <div class="map_canvas" id="map_canvas" style="height: 400px;"></div>
                            <div class="my-4">
                                <div class="map_canvas"></div>
                            </div>
                        </div>
                        <form action="" class="container p-2 mx-3">
                            <div class="row">
                                <h5 class="px-4 fs-5 fw-semibold">Phone & Email</h5>
                                <div class="col-sm-6">
                                    <div class="p-3">
                                        <label class="form-label" for="">Phone</label>
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            placeholder="Phone Number" value="{{ $login_user->phone }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="p-3">
                                        <label class="form-label" for="">Email Id</label>
                                        <input type="email" class="form-control" placeholder="Email Id"
                                            value="{{ $login_user->email }}">
                                    </div>
                                </div>

                            </div>
                            <div class="mx-3 btn btn" style="background:#0b5ed7">
                                <a class="text-decoration-none text-white" href="">Save</a>
                            </div>

                            <div class="row">
                                <h5 class="px-4 mb-0 mt-3 fs-5 fw-semibold">Address</h5>
                                <div class="col-sm-6 ">
                                    <div class="p-3">
                                        <label class="form-label" for="">Address Line 1</label>
                                        <input type="text" class="form-control" id="address_line_1"
                                            name="address_line_1" placeholder="Address Line 1"
                                            value="{{ $login_user->address_line_1 }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 ">
                                    <div class="p-3">
                                        <label class="form-label" for="">Address Line 2</label>
                                        <input type="text" name="address_line_2" id="address_line_2"
                                            class="form-control" placeholder="Address Line 2"
                                            value="{{ $login_user->address_line_2 }}">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-6 ">
                                    <div class="p-3">
                                        <label class="form-label" for="">Country</label>
                                        <input type="text" class="form-control" name="country" id="country"
                                            placeholder="Country" value="{{ $login_user->country }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 ">
                                    <div class="p-3">
                                        <label class="form-label" for="">State</label>
                                        <input type="text" class="form-control" name="state" id="state"
                                            placeholder="State" value="{{ $login_user->state }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 ">
                                    <div class="p-3">
                                        <label class="form-label" for="">City</label>
                                        <input type="text" class="form-control" id="city" name="city"
                                            placeholder="City" value="{{ $login_user->city }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 ">
                                    <div class="p-3">
                                        <label class="form-label" for="">Pincode</label>
                                        <input type="text" class="form-control" name="pincode" id="pincode"
                                            placeholder="Pincode" value="{{ $login_user->pincode }}">
                                    </div>
                                </div>
                            </div>
                            <div class="mx-3 btn" style="background:#0b5ed7">
                                <a class="text-decoration-none text-white" href="">Create Profile</a>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('css')
    <style>
        form {
            width: 300px;
            float: left;
            margin-left: 20px
        }

        fieldset {
            width: 320px;
            margin-top: 20px
        }

        fieldset strong {
            display: block;
            margin: 0.5em 0 0em;
        }

        fieldset input {
            width: 95%;
        }

        ul span {
            color: #999;
        }
    </style>
@endsection
@section('script')
    <script src="https://maps.googleapis.com/maps/api/js?key={{ $setting->google_map_key }}&libraries=places"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

    <script src="{{ asset('js/jquery.geocomplete.js') }}"></script>

    <script>
        $(function() {
            $("#geocompletes").geocomplete({
                map: ".map_canvas",
                details: "form ",
                markerOptions: {
                    draggable: true
                }
            });
        });

        function initialize() {
            var address = (document.getElementById('geocompletes'));
            var autocomplete = new google.maps.places.Autocomplete(address);
            autocomplete.setTypes(['geocode']);
            google.maps.event.addListener(autocomplete, 'place_changed', function() {
                var place = autocomplete.getPlace();
                var state = '';
                var country = '';
                var zip = '';
                var city = '';
                if (place.address_components) {
                    for (var i = 0; i < place.address_components.length; i++) {
                        var types = place.address_components[i].types;

                        if (place.address_components[i].types[0].toString() === 'administrative_area_level_1') {
                            state = place.address_components[i].long_name;
                        } else if (place.address_components[i].types[0].toString() === 'country') {
                            country = place.address_components[i].long_name;
                        }

                        if (types.indexOf('postal_code') > -1) {
                            zip = place.address_components[i].long_name;
                        }

                        if (types.indexOf('locality') > -1) { // locality type
                            city = place.address_components[i].long_name; // here's your town name
                        }

                    }
                }
                $('#address_line_1').val(place.name);
                $('#address_line_2').val('');
                $('#country').val(country);
                $('#state').val(state);
                $('#city').val(city);
                $('#pincode').val(zip);
            });
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
@endsection
