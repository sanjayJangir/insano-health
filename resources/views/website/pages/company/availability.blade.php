@extends('website.layouts.app')

@section('title')
    {{ __('Availability') }}
@endsection
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
<style>
    /* Import Google font - Poppins */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

    .wrapper {
        width: 400px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
    }


    header .icons {
        display: flex;
    }

.textsetting{
    font-size: 20px;
    font-weight: 600;
}
.backgroundcolor{
    background-color: #3FBDC7;
    margin-top: 30px !important;
    border-radius:10px !important
}
.timebutton{
    background-color: white;
    border-color: #0C1853 !important;
  padding-top:10px;
  padding-bottom:10px;
    border-radius:6px !important
}

    header .icons span:hover {
        background: #f2f2f2;
    }

    header .current-date {
        font-size: 1.45rem;
        font-weight: 500;
    }

    .calendar {
        padding: 20px;
    }

    .calendar ul {
        display: flex;
        flex-wrap: wrap;
        list-style: none;
        text-align: center;
    }

    .calendar .days {
        margin-bottom: 20px;
    }

    .calendar li {
        color: #333;
        width: calc(100% / 7);
        font-size: 1.07rem;
    }

    .calendar .weeks li {
        font-weight: 500;
        cursor: default;
    }

    .calendar .days li {
        z-index: 1;
        cursor: pointer;
        position: relative;
        margin-top: 30px;
    }

    .days li.inactive {
        color: #aaa;
    }

    .days li.active {
        color: #fff;
    }

    .days li::before {
        position: absolute;
        content: "";
        left: 50%;
        top: 50%;
        height: 40px;
        width: 40px;
        z-index: -1;
        border-radius: 50%;
        transform: translate(-50%, -50%);
    }

    .days li.active::before {
        background: #3FBDC7;
    }

    .days li:not(.active):hover::before {
        background: #f2f2f2;
    }

    .buttoncolor {
        border-color: #3FBDC7 !important;
    }

    .textsetting {
        font-size: 20px;
        font-weight: 600;
    }

    .backgroundcolor {
        background-color: #3FBDC7;
        margin-top: 30px !important;
        border-radius: 10px !important
    }

    .timebutton {
        background-color: white;
        border-color: #0C1853 !important;
        padding-top: 10px;
        padding-bottom: 10px;
        border-radius: 6px !important
    }

    .timebutton:hover {
        background-color: #0C1853 !important;
        border-color: #fff !important;
        color: white;
        padding-top: 10px;
        padding-bottom: 10px;
        transition-duration: 500ms;
        border-radius: 6px !important
    }
</style>

@section('main')
    <div class="dashboard-wrapper">
        <div class="container">
            <div class="row">
                {{-- Sidebar --}}
                <x-website.candidate.sidebar />
                <div class="col-lg-9">
                    <div class="dashboard-right">
                        <div class="row d-flex justify-content-between p-2">
                            <div class="col-sm-12 col-md-6">
                                <h5 class="rt-mb-32">Availability</h5>
                            </div>

<div class="col">
<p class="textsetting"> Date </p>
<div>
<form >
  <label for="from">From</label>
  <input type="date" id="from" name="">
</form>
</div>

<div>
<form >
  <label for="to">To</label>
  <input type="date" id="to" name="to">
</form>
</div>


                                </div>

                                         <div class="col">
                                          <p class="textsetting">Time </p>
   
                                           <div>
                                           <div>
           <form >
  <label for="from">From</label>
  <input type="time" id="from" name="from">
</form>

</div>

<div>
<form >
  <label for="to">To</label>
  <input type="time" id="to" name="to">
</form>
</div>
</div>
</div>

                                <div class="row  backgroundcolor">

                                    <p class="textsetting text-white mt-3"> 12 Jan 2023 to 14 Jan 2023 </p>
                                    <div class="d-flex items-center gap-3 mb-5">
<div>
<p class="textsetting">From </p>
                                        <button class="timebutton">
                                            12:00 - 1:00PM
                                        </button>

  </div>
  <div>
<p class="textsetting">To </p>
                                        <button class="timebutton">
                                            12:00 - 1:00PM
                                        </button>

  </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="dashboard-footer text-center body-font-4 text-gray-500">
                    <x-website.footer-copyright />
                </div>
            </div>


  
@endsection
