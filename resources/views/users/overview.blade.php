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
                                <h5 class="text-dark">{{ !empty($saveProfile) ? count($saveProfile) :'0' }}</h5>
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
                        href="{{ route('users.recent-candidates') }}">

                        <div>
                            <h5 class="text-dark">
                                {{ !empty($userData) && !empty($userData->cv_views) ? count($userData->cv_views) : count($userData->cv_views) }}
                            </h5>
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

                    @if (!empty($userData) && !empty($userData->cv_views))
                        @foreach ($userData->cv_views as $u => $cv_views)
                            <div class="card-row row flex">
                                <div class="col">
                                    <h6 class="mt-4">
                                        {{ !empty($cv_views->candidate) && !empty($cv_views->candidate->user) ? $cv_views->candidate->user->name : '' }}
                                    </h6>
                                    <div class=" d-flex">
                                        <p class="">
                                            {{ !empty($cv_views->candidate) && !empty($cv_views->candidate->user) ? $cv_views->candidate->profession->name : '' }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col">
                                    <h6 class="my-4 act">{{ $cv_views->candidate->status }}</h6>
                                </div>

                                <div class="col justify-content-between d-flex">
                                    @if (auth('user')->check())
                                        <a onclick="showCandidateProfileModal('{{ $cv_views->candidate->user->username }}')"
                                            href="javascript:void(0);"
                                            class="m-auto btn btn-outline-primary buttoncolor">{{ __('View Profile') }}
                                            <span>
                                                <x-svg.arrow-right-icon />
                                            </span>
                                        </a>
                                    @else
                                        <a href="javascript:void(0);"
                                            class="m-auto btn btn-outline-primary buttoncolor">{{ __('View Profile') }}
                                            <span>
                                                <x-svg.arrow-right-icon />
                                            </span>
                                        </a>
                                    @endif


                                    <div class="my-4">
                                        <a href="#" class=" text-decoration-none card-link card-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="19"
                                                fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                <path
                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                            </svg>
                                        </a>
                                    </div>

                                </div>

                            </div>
                        @endforeach
                    @endif
                </div>

            </div>

        </div>
    </div>
    </div>
    </div>

    <!-- ===================================== -->
    <div class="modal fade cadidate-modal" id="aemploye-profile" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-modal="true" role="dialog">
        <div class="modal-dialog modal-wrapper modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 class="text-center">
                        {{ __('save_to') }}
                    </h5>
                    <div class="row mb-5 border-top">
                        <div class="col-md-12" id="categoryList">
                        </div>
                        <div class="col-md-12">
                            <div class="card jobcardStyle1 saved-candidate border-0 mt-3">
                                <div class="card-body">
                                    <div class="rt-single-icon-box ">
                                        <div class="iconbox-content">
                                            <div class="post-info2">
                                                <div class="post-main-title">
                                                    <a target="_blank"
                                                        href="{{ route('company.bookmark.category.index') }}">
                                                        <span class="text-primary">{{ __('create_category') }}</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <x-website.modal.candidate-profile-modal />
@endsection
@section('css')
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <style>
        #aemploye-profile .modal-wrapper {
            width: 30% !important;
        }

        #aemploye-profile .modal-body {
            overflow-x: hidden !important;
            overflow-y: scroll !important;
        }

        .benefits-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .benefits-tags input,
        .technologies input {
            position: absolute;
            opacity: 0;
        }

        .benefits-tags span {
            font-weight: 400;
            font-size: 14px;
            line-height: 20px;
            color: #474C54;
            background: rgba(241, 242, 244, 0.4);
            border: 1px solid #E4E5E8;
            border-radius: 4px;
            padding: 8px 12px;
            cursor: pointer;
        }

        .benefits-tags input:checked~span,
        .benefits-tags span.active {
            color: #0A65CC;
            background: #E7F0FA;
            border: 1px solid #0A65CC;
            border-radius: 4px;
        }

        .mr--10px {
            margin-right: 10px
        }

        .ml--10px {
            margin-left: 10px
        }

        .tooltip-inner {
            max-width: 300px;
        }
    </style>
@endsection
@section('script')
    <script>
        function Filter() {
            $('#form').submit();
        }

        $('#sortby').on('change', function() {
            $('#form').submit();
        })

        $('#perpage').on('change', function() {
            $('#form').submit();
        })

        function FilterClose(name) {

            $('[name="' + name + '"]').val('');
            $('#form').submit();
        }

        var style = localStorage.getItem("candidate_style") == null ? 'box' : localStorage.getItem("candidate_style");
        setStyle(style);

        function styleSwitch(style) {
            localStorage.setItem("candidate_style", style);
            setStyle(style);
        }

        function setStyle(style) {
            if (style == 'box') {
                $('#nav-home-tab').addClass('active');
                $('#nav-home').addClass('show active');
                $('#nav-profile-tab').removeClass('active');
                $('#nav-profile').removeClass('show active');
            } else {
                $('#nav-home-tab').removeClass('active');
                $('#nav-home').removeClass('show active');
                $('#nav-profile-tab').addClass('active');
                $('#nav-profile').addClass('show active');
            }
        }

        function showCandidateProfileModal(username) {
            $.ajax({
                url: "{{ route('website.candidate.profile.details') }}",
                type: "GET",
                data: {
                    username: username,
                    count_view: 1
                },
                success: function(response) {
                    if (!response.success) {
                        if (response.redirect_url) {
                            return Swal.fire({
                                title: 'Oops...',
                                text: response.message,
                                icon: 'error',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: "{{ __('upgrade_plan') }}"
                            }).then((result) => {
                                if (result.value) {
                                    window.location.href = response.redirect_url;
                                }
                            })
                        } else {
                            return Swal.fire('Error', response.message, 'error');
                        }
                    }

                    let data = response.data;
                    let social = data.social_info
                    let candidate = response.data.candidate;

                    $('#candidate_id').val(data.candidate.id)
                    if (data.candidate.bookmarked) {
                        $('#removeBookmakCandidate').removeClass('d-none')
                        $('#bookmakCandidate').addClass('d-none')
                    } else {
                        $('#bookmakCandidate').removeClass('d-none')
                        $('#removeBookmakCandidate').addClass('d-none')
                    }

                    data.name ? $('.candidate-profile-info h2').html(data.name) : '';
                    data.candidate.photo ? $('#candidate_image').attr("src", data.candidate.photo) : '';
                    data.candidate.profession ? $('.candidate-profile-info h4').html(capitalizeFirstLetter(data
                        .candidate.profession.name)) : '';
                    data.candidate.bio ? $('.biography p').html(data.candidate.bio) : '';

                    // Social info
                    if (social.facebook || social.twitter || social.linkedin || social.youtube || social
                        .instagram) {
                        $('#candidate_social_profile_modal').show()
                        social.facebook ? $('.social-media ul li:nth-child(1)').attr("href", social.facebook) :
                            '';
                        social.twitter ? $('.social-media ul li:nth-child(2)').attr("href", social.twitter) :
                            '';
                        social.linkedin ? $('.social-media ul li:nth-child(3)').attr("href", social.linkedin) :
                            '';
                        social.instagram ? $('.social-media ul li:nth-child(4)').attr("href", social
                                .instagram) :
                            '';
                        social.youtube ? $('.social-media ul li:nth-child(5)').attr("href", social.youtube) :
                            '';

                    } else {
                        $('#candidate_social_profile_modal').hide()
                    }

                    // skills & languages
                    if (candidate.skills.length != 0) {
                        $.each(candidate.skills, function(key, value) {
                            $('#candidate_skills').append(
                                `<span class="tw-bg-[#E7F0FA] tw-rounded-[4px] tw-text-sm tw-text-[#0A65CC] tw-px-3 tw-py-1.5">
                            ${value.name}
                        </span>`
                            )
                        });
                    }

                    if (candidate.languages.length != 0) {
                        $.each(candidate.languages, function(key, value) {
                            $('#candidate_languages').append(
                                `<div class="tw-inline-block tw-p-3 tw-bg-[#F1F2F4] tw-rounded-[4px]">
                            <h4 class="tw-text-sm tw-text-[#474C54] tw-font-medium tw-mb-[2px]">${value.name}</h4>
                        </div>`

                            )
                        });
                    }

                    if (candidate.educations.length != 0) {
                        $.each(candidate.educations, function(key, value) {
                            $('#candidate_profile_educations').append(
                                `<tr>
                            <td>${value.level}</td>
                            <td>${value.degree}</td>
                            <td>${value.year}</td>
                        </tr>`
                            )
                        });
                    }

                    if (candidate.experiences.length != 0) {
                        $.each(candidate.experiences, function(key, value) {
                            $('#candidate_profile_experiences').append(
                                `<tr>
                            <td>${value.company}</td>
                            <td>${value.department} / ${value.designation}</td>
                            <td>${value.formatted_end} - ${value.formatted_start}</td>
                        </tr>
                        `
                            )
                        });
                    }

                    // other info
                    data.candidate.birth_date ? $('#candidate_birth_date').html(data.candidate.birth_date) : '';
                    data.contact_info && data.contact_info.country ? $('#candidate_nationality').html(data
                        .contact_info.country
                        .name) : ''
                    data.candidate.marital_status ? $('#candidate_marital_status').html(capitalizeFirstLetter(
                        data.candidate.marital_status)) : ''
                    data.candidate.gender ? $('#candidate_gender').html(capitalizeFirstLetter(data.candidate
                        .gender)) : ''
                    data.candidate.experience ? $('#candidate_experience').html(data.candidate.experience
                        .name) : ''
                    data.candidate.education ? $('#candidate_education').html(capitalizeFirstLetter(data
                        .candidate.education.name)) : ''

                    data.candidate.website ? $('#candidate_website').html(data.candidate.website) : ''
                    $('#candidate_location').html(data.candidate.full_address)
                    data.contact_info && data.contact_info.phone ? $('#candidate_phone').html(data.contact_info
                        .phone) : ''
                    data.contact_info && data.contact_info.secondary_phone ? $('#candidate_seconday_phone')
                        .html(data.contact_info
                            .secondary_phone) : ''
                    data.contact_info && data.contact_info.email ? $('#contact_info_email').html(data
                        .contact_info.email) : ''

                    $('#candidate-profile-modal').modal('show');
                    if (response.profile_view_limit && response.profile_view_limit.length) {
                        if (!response.data.candidate.already_view) {
                            toastr.success(response.profile_view_limit, 'Success');
                        }
                    }

                    $('#cv_view' + candidate.id).removeClass("d-none");
                },
                error: function(error) {
                    Swal.fire('Error', 'Something Went Wrong!', 'error');
                }
            });
        }

        function CompanyBookmark(candidate) {
            $.ajax({
                url: "{{ route('company.bookmark.category.index', ['ajax' => 1]) }}",
                type: "GET",
                data: {
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function(data) {

                    $('#categoryList').html('');
                    if (data.length > 0) {
                        $.each(data, function(key, value) {
                            $('#categoryList').append(`
                        <div class="card jobcardStyle1 saved-candidate">
                            <div class="card-body">
                                <div class="rt-single-icon-box ">
                                    <div class="iconbox-content cursor-pointer ">
                                        <div class="post-info2 cursor-pointer ">
                                            <label for="exampleRadios${value.id}" class="post-main-title cursor-pointer ">
                                                <div class="form-check d-flex justify-content-between from-radio-custom">
                                                    ${value.name}
                                                    <input onclick="BookmarkCanidate(${candidate},${value.id})" class="cursor-pointer  form-check-input" type="radio" name="experience" value="6" id="exampleRadios${value.id}">
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `);
                        });
                    }
                }
            });

            $('#aemploye-profile').modal('show');
        };

        function BookmarkCanidate(id, cat) {
            var url = "{{ route('company.companybookmarkcandidate', ':id') }}";
            url = url.replace(':id', id);

            $.ajax({
                url: url,
                type: "POST",
                data: {
                    cat: cat,
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function(response) {
                    console.log(response)
                    if (!response.success) {
                        if (response.redirect_url) {
                            return Swal.fire({
                                title: 'Oops...',
                                text: response.message,
                                icon: 'error',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: "{{ __('upgrade_plan') }}"
                            }).then((result) => {
                                if (result.value) {
                                    window.location.href = response.redirect_url;
                                }
                            })
                        } else {
                            return Swal.fire('Error', response.message, 'error');
                        }
                    }

                    // location.reload();
                },
                error: function(data) {
                    location.reload();
                }
            });
        }



        $('#bookmakCandidate').on('click', function() {
            CompanyBookmark($('#candidate_id').val())
            $('#candidate-profile-modal').modal('hide');
        });

        $('#removeBookmakCandidate').on('click', function() {
            var url = "{{ route('company.companybookmarkcandidate', ':id') }}";
            url = url.replace(':id', $('#candidate_id').val());

            $.ajax({
                url: url,
                type: "POST",
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    $('#removeBookmakCandidate').addClass('d-none')
                    $('#bookmakCandidate').removeClass('d-none')
                    toastr.success('Candidate removed from bookmark list', 'Success')
                },
                error: function(data) {
                    alert('Something went wrong')
                }
            });
        });

        function capitalizeFirstLetter(string) {
            return string[0].toUpperCase() + string.slice(1);
        }
    </script>
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
@endsection
