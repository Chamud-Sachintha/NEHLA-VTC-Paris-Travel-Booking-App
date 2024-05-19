<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>The NEHLA VTC Paris - THE NEHLA LUXURY TRANSPORT</title>
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Barlow&amp;family=Barlow+Condensed&amp;family=Gilda+Display&amp;display=swap">
    <link rel="stylesheet" href="{{asset('css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('vehicle_popup/css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('vehicle_popup/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('vehicle_popup/css/bootstrap.min.css')}}">
    
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <style>
        .goog-te-banner-frame.skiptranslate {
            display: none !important;
        } 
        body {
            top: 0px !important; 
        }
    

        .line {
            width: auto; !important
        }

        #grad1 {
            background-color: : #9C27B0;
            background-image: linear-gradient(#f8f5f0, #f8f5f0, #f8f5f0);
        }

        /*form styles*/
        #msform {
            text-align: center;
            position: relative;
            margin-top: 20px;
        }

        #msform fieldset .form-card {
            background: white;
            border: 0 none;
            border-radius: 0px;
            /* box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2); */
            box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
            padding: 20px 40px 30px 40px;
            box-sizing: border-box;
            width: 94%;
            margin: 0 3% 20px 3%;

            /*stacking fieldsets above each other*/
            position: relative;
        }

        #msform fieldset {
            background: white;
            border: 0 none;
            border-radius: 0.5rem;
            box-sizing: border-box;
            width: 100%;
            margin: 0;
            padding-bottom: 20px;

            /*stacking fieldsets above each other*/
            position: relative;
        }

        /*Hide all except first fieldset*/
        #msform fieldset:not(:first-of-type) {
            display: none;
        }

        #msform fieldset .form-card {
            text-align: left;
            color: #9E9E9E;
        }

        #msform input,
        #msform textarea {
            padding: 0px 8px 4px 8px;
            border: none;
            border-bottom: 1px solid #ccc;
            border-radius: 0px;
            margin-bottom: 25px;
            margin-top: 2px;
            width: 100%;
            box-sizing: border-box;
            font-family: 'Barlow', sans-serif;
            color: #2C3E50;
            font-size: 16px;
            letter-spacing: 1px;
        }

        #msform input:focus,
        #msform textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: none;
            font-weight: bold;
            border-bottom: 2px solid #8E6F45;
            outline-width: 0;
        }

        /*Blue Buttons*/
        #msform .action-button {
            width: 100px;
            background: #ab8a62;
            font-weight: 400;
            font-family: 'Barlow Condensed', sans-serif;
            font-size: 15px;
            letter-spacing: 1px;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 4px 5px;
            margin: 10px 5px;
        }

        #msform .action-button:hover,
        #msform .action-button:focus {
            /* box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue; */
            background: #222;
            transition: all 0.3s ease;
            transition: width 0.3s ease;
        }

        /*Previous Buttons*/
        #msform .action-button-previous {
            font-family: 'Barlow Condensed', sans-serif;
            width: 100px;
            background: #616161;
            /* font-weight: bold; */
            color: white;
            border-radius: 0px;
            cursor: pointer;
            padding: 4px 5px;
            margin: 10px 5px;
            letter-spacing: 1px;
        }

        #msform .action-button-previous:hover,
        #msform .action-button-previous:focus {
            /* box-shadow: 0 0 0 2px white, 0 0 0 3px #616161; */
        }

        /*Dropdown List Exp Date*/
        select.list-dt {
            border: none;
            outline: 0;
            border-bottom: 1px solid #8E6F45;
            padding: 2px 5px 3px 5px;
            margin: 2px;
        }

        select.list-dt:focus {
            border-bottom: 2px solid #8E6F45;
        }

        /*The background card*/
        .card {
            z-index: 0;
            border: none;
            border-radius: 0.5rem;
            position: relative;
        }

        /*FieldSet headings*/
        .fs-title {
            font-size: 25px;
            color: #2C3E50;
            margin-bottom: 10px;
            font-weight: 400px;
            text-align: left;
            font-family: 'Gilda Display', serif;
        }

        /*progressbar*/
        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: lightgrey;
        }

        #progressbar .active {
            color: #000000;
        }

        #progressbar li {
            list-style-type: none;
            font-size: 12px;
            width: 25%;
            float: left;
            position: relative;
        }

        /*Icons in the ProgressBar*/
        #progressbar #account:before {
            font-family: FontAwesome;
            padding-top: 2px;
            content: url("https://img.icons8.com/external-icongeek26-outline-icongeek26/40/ffffff/external-place-camping-icongeek26-outline-icongeek26.png");
        }

        #progressbar #Quotation:before {
            font-family: FontAwesome;
            content: url("https://img.icons8.com/pastel-glyph/35/ffffff/taxi-service--v2.png");
        }

        #progressbar #personal:before {
            font-family: FontAwesome;
            padding-top: 5px;
            content: url("https://img.icons8.com/glyph-neue/35/ffffff/user.png");
        }

        #progressbar #payment:before {
            font-family: FontAwesome;
            padding-top: 8px;
            content: url("https://img.icons8.com/ios/35/ffffff/bank-cards--v1.png");
        }

        #progressbar #confirm:before {
            font-family: FontAwesome;
            content: "\f00c";
        }

        /*ProgressBar before any progress*/
        #progressbar li:before {
            width: 50px;
            height: 50px;
            line-height: 45px;
            display: block;
            font-size: 18px;
            color: #ffffff;
            background: lightgray;
            border-radius: 50%;
            margin: 0 auto 10px auto;
            padding: 2px;
        }

        /*ProgressBar connectors*/
        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: lightgray;
            position: absolute;
            left: 0;
            top: 25px;
            z-index: -1;
        }

        /*Color number of the step and the connector before it*/
        #progressbar li.active:before,
        #progressbar li.active:after {
            background: #8E6F45;
        }

        /*Imaged Radio Buttons*/
        .radio-group {
            position: relative;
            margin-bottom: 25px;
        }

        .radio {
            display: inline-block;
            width: 204;
            height: 104;
            border-radius: 0;
            background: #8E6F45;
            box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
            box-sizing: border-box;
            cursor: pointer;
            margin: 8px 2px;
        }

        .radio:hover {
            box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3);
        }

        .radio.selected {
            box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1);
        }

        /*Fit image in bootstrap div*/
        .fit-image {
            width: 100%;
            object-fit: cover;
        }

        .nav-scroll {
            background: #fff;
            padding: 0 0 0 0;
            position: fixed !important;
            top: -100px;
            left: 0;
            width: 100%;
            -webkit-transition: -webkit-transform .5s;
            transition: -webkit-transform .5s;
            transition: transform .5s;
            transition: transform .5s, -webkit-transform .5s;
            -webkit-transform: translateY(100px);
            transform: translateY(100px);
            -webkit-box-shadow: 0px 5px 15px rgb(0 0 0 / 5%);
            box-shadow: 0px 5px 15px rgb(0 0 0 / 5%);
        }

        option:hover {
            background-color: #8E6F45;
        }

        .content {
            height: auto; !important
        }
    </style>
</head>

<body>

    <!-- Preloader -->
    <div class="preloader-bg"></div>
    <div id="preloader">
        <div id="preloader-status">
            <div class="preloader-position loader"> <span></span> </div>
        </div>
    </div>
    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- Navbar -->
    {{ View::make('header') }}
    <!-- Slider -->

    <header class="header slider-fade">
        <div class="owl-carousel owl-theme">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            <div class="text-center item bg-img" data-overlay-dark="2" data-background="{{asset('images/bg3.jpg')}}">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <span>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                </span>
                                <h4>@lang('auth.f_subtitle')</h4>
                                <h1>@lang('auth.f_title')</h1>
                                <div class="butn-light mt-30 mb-30"> <a href="#tourForm"><span>@lang('auth.reservation')</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center item bg-img" data-overlay-dark="2" data-background="{{asset('images/bg2.jpg')}}">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <span>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                </span>
                                <h4>@lang('auth.s_subtitle')</h4>
                                <h1>@lang('auth.s_title')</h1>
                                <div class="butn-light mt-30 mb-30"> <a href="#tourForm"><span>@lang('auth.reservation')</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center item bg-img" data-overlay-dark="3" data-background="{{asset('images/bg1.jpg')}}">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <span>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                </span>
                                <h4>@lang('auth.t_subtitle')</h4>
                                <h1>@lang('auth.t_title')</h1>
                                <div class="butn-light mt-30 mb-30"> <a href="#tourForm"><span>@lang('auth.reservation')</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider reservation -->
        <div class="reservation">
            <a href="tel:33 6 36 20 35 62">
                <div class="icon d-flex justify-content-center align-items-center">
                    <i class="flaticon-call"></i>
                </div>
                <div class="call"><span>+33 0 76 05 58 946</span> <br>@lang('auth.reservation')</div>
            </a>
        </div>
    </header>

    <!-- About -->
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <span>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                    </span>
                    <div class="section-subtitle">@lang('auth.sec_2_subtitle')</div>
                    <div class="section-title">@lang('auth.sec_2_title')</div>
                    <p>@lang('auth.sec_2_desc_1')</p>
                    <p>@lang('auth.sec_2_desc_2')</p>
                    <p>@lang('auth.sec_2_desc_3')</p>
                    <p>@lang('auth.sec_2_desc_4')</p>
                    <!-- call -->
                    <div class="row d-none d-md-block d-lg-block">
                        <div class="row">
                            <div class="col-6 mt-2">
                                <div class="reservations">
                                    <div class="icon">
                                        <img src="https://img.icons8.com/dotty/80/8e6f45/reservation-2.png" />
                                    </div>
                                    <div class="text">
                                        <p>@lang('auth.normal_tours')</p> <a href="#tourForm">@lang('auth.fill_in_the_form')</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mt-2">
                                <div class="reservations">
                                    <div class="icon">
                                        <img src="https://img.icons8.com/wired/64/8e6f45/phone.png" />
                                    </div>
                                    <div class="text">
                                        <p>@lang('auth.special_tours')</p> <a href="#specialTours">@lang('auth.see_our_plans')</a>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                    <div class="row d-md-none d-lg-none">
                        <div class="row ">
                            <div class="col-12 mt-2">
                                <div class="reservations">
                                    <div class="icon">
                                        <img src="https://img.icons8.com/dotty/80/8e6f45/reservation-2.png" />
                                    </div>
                                    <div class="text">
                                        <p>@lang('auth.normal_tours')</p> <a href="#tourForm">@lang('auth.fill_in_the_form')</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-3 ms-3">
                                <div class="reservations">
                                    <div class="icon">
                                        <img src="https://img.icons8.com/wired/64/8e6f45/phone.png" />
                                    </div>
                                    <div class="text">
                                        <p>@lang('auth.special_tours')</p> <a href="#specialTours">@lang('auth.see_our_plans')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp">
                    <img src="{{asset('images/4th.jpg')}}" alt>
                </div>
                <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp">
                    <img src="{{asset('images/5th.jpg')}}" alt class="mt-90 mb-30">
                </div>
            </div>
        </div>
    </section>

    {{-- stepper form starts here --}}

    <section class="section-padding" style="margin-top: -150px" id="tourForm">
        <!-- MultiStep Form -->
        <div class="container-fluid" id="grad1">
            <div class="row justify-content-center mt-0">
                <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;">
                        <strong class="section-title ms-5 me-5" style="font-size: 35px; font-weight: 700px">@lang('auth.sec_3_title')</strong>
                        <div class="text-center">
                            <div class="butn-dark"> <a href="/client/login"><span>@lang('auth.manage_bookings')</span></a> </div>
                            {{-- <a href="" class="btn btn-primary btn-sm" style="width: 150px">Manage Bookings</a> --}}
                        </div>
                        <div class="row">
                            <div class="col-md-12 mx-0">
                                <form id="msform" action="{{route('checkout', 'en')}}" method="post">
                                    @csrf
                                    <!-- progressbar -->
                                    <ul id="progressbar">
                                        <li class="active" id="account">
                                            <strong>@lang('auth.your_jurney')</strong>
                                        </li>
                                        <li id="Quotation"><strong>@lang('auth.quotation')</strong></li>
                                        <li id="personal"><strong>@lang('auth.personal')</strong></li>
                                        <li id="payment"><strong>@lang('auth.payment')</strong></li>
                                    </ul>
                                    <!-- fieldsets -->
                                    <fieldset>
                                        <div class="form-card">
                                            <div class="row">
                                                <div class="col-md-6 col-lg-6 col-sm-12">
                                                    <h2 class="fs-title">@lang('auth.your_jurney')</h2>

                                                    <div class="row">
                                                        <div class="col-12 mb-1" id="inverseFrom">
                                                            <label for="">@lang('auth.from') :</label>
                                                            <input type="text" placeholder="Ex. Paris"
                                                                class="form-control" id="from" name="from" required>
                                                        </div>
                                                        <div class="col-12 text-center">
                                                            {{-- <input type="button" name="next" class="action-button" onclick="inverseLocations(); return false;" value="Next Step"> --}}
                                                            <button type="button" class="btn btn-info btn-sm" onclick="inverseLocations(); return false;" style="background-color: #AA8453; border: none">↑ ↓</button>
                                                        </div>
                                                        <div class="col-12 mb-1" id="inverseTo">
                                                            <input type="hidden" value="null" id="placeAmount"
                                                                name="placeAmount">
                                                            <label for="">@lang('auth.to') :</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height: 2.5rem" id="to" name="to"
                                                                onchange="setAmountOnPlace()">
                                                                <option value="0">---Select Place---</option>
                                                                @foreach ($all_places as $each_place)
                                                                    <option value="{{ $each_place['place_name'] }}">{{
                                                                        $each_place['place_name'] }}</option>
                                                                @endforeach
                                                            </select>
                                                            {{-- <input type="text" placeholder="Eg. Kiribatgoda"
                                                                class="form-control" id="to" name="to"> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12">
                                                    <h2 class="fs-title">@lang('auth.options')</h2>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <label for="">@lang('auth.oneway')</label>
                                                                </div>
                                                                <div class="col-6">
                                                                    <input type="radio" name="tripType" value="oneWay"
                                                                        style="margin-top: 1.2rem" id="ow">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <label for="">@lang('auth.return')</label>
                                                                </div>
                                                                <div class="col-6">
                                                                    <input type="radio" name="tripType" value="return"
                                                                    style="margin-top: 1.2rem" id="rw">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-2">
                                                        <div class="col-6">
                                                            <label for="">@lang('auth.passengers') :</label>
                                                            {{-- <input type="text" class="form-control" placeholder="Ex. 3"
                                                                id="passengers" name="passengers"> --}}
                                                            <select class="form-select" aria-label="Default select example"
                                                                style="height: 2.5rem" id="passengers" name="passengers" onchange="onSelectPassengerRange()">
                                                                <option value="0" selected>Select Passengers</option>
                                                                <option value="1 à 3">1 à 3</option>
                                                                <option value="4 à 5">4 à 5</option>
                                                                <option value="6 à 7">6 à 7</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="">@lang('auth.luggage') :</label>
                                                            <input type="text" class="form-control" placeholder="Ex. 3"
                                                                id="luggage" name="luggage">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-2">
                                                <div class="col">
                                                    <label for="">@lang('auth.select_date') :</label>
                                                    {{-- <input type="date" class="form-control" style="width: 10rem"
                                                        id="date" name="date"> --}}
                                                    <input type="text" class="form-control input datepicker"
                                                        placeholder="Select Date" id="date" name="date">
                                                </div>
                                                <div class="col">
                                                    <label for="">@lang('auth.hour') :</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height: 2.5rem" id="hour" name="hour">
                                                        @for($i = 0; $i <= 24; $i++) <option value="{{$i}}">{{$i}}
                                                            </option>
                                                            @endfor
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label for="">@lang('auth.min') :</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height: 2.5rem" id="min" name="min">
                                                        <option value="00">00</option>
                                                        <option value="15">15</option>
                                                        <option value="30">30</option>
                                                        <option value="45">45</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row mt-2" id="returnInfo" style="display: none">
                                                <div class="col">
                                                    <label for="">@lang('auth.return_date') :</label>
                                                    {{-- <input type="date" class="form-control" style="width: 10rem"
                                                        name="returnDate"> --}}
                                                    <input type="text" class="form-control input datepicker"
                                                        placeholder="Select Date" id="returnDate" name="returnDate">
                                                </div>
                                                <div class="col">
                                                    <label for="">@lang('auth.hour') :</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height: 2.5rem" name="returnHour">

                                                        @for($i = 1; $i <= 24; $i++)
                                                            <option value="{{$i}}">{{$i}}</option>
                                                        @endfor

                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label for="">@lang('auth.min') :</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height: 2.5rem" name="returnMin">

                                                        <option value="00">00</option>
                                                        <option value="15">15</option>
                                                        <option value="30">30</option>
                                                        <option value="45">45</option>
                                                    </select>
                                                </div>
                                            </div>

                                            {{-- <div class="row mt-2">
                                                <div class="col-6" style="display: none" id="returnFromHiddenEl">
                                                    <label for="">@lang('auth.return_from') :</label>
                                                    <input type="text" placeholder="Ex. Paris"
                                                        class="form-control" id="returnFrom" name="returnFrom">
                                                </div>
                                                <div class="col-6" style="display: none" id="returnToHiddenEl">
                                                    <label for="">@lang('auth.return_to') :</label>
                                                    <input type="text" placeholder="Ex. Paris"
                                                        class="form-control" id="returnTo" name="returnTo">
                                                </div>
                                            </div> --}}

                                            <div class="row mt-2">
                                                <div class="col-6" id="flightNumberParent">
                                                    <label for="">@lang('auth.flight_number') :</label>
                                                    <input type="text" class="form-control" placeholder="Ex. A0019OKIJU"
                                                        id="flightNumber" name="flightNumber">
                                                </div>
                                                <div class="col-6">
                                                    <label for="">@lang('auth.baby_seat') :</label>
                                                    <input type="text" class="form-control" placeholder="Ex. 3"
                                                        id="babySeat" name="babySeats">
                                                </div>
                                            </div>

                                            <div class="row mt-2">
                                                {{-- <div class="col-3">
                                                    <label for="">Meet & Greet :</label>
                                                    <input type="text" placeholder="Eg. 3" class="form-control"
                                                        id="meet" name="meet">
                                                </div> --}}

                                                {{-- <div class="col-6">
                                                    <label for="">Baby Seat :</label>
                                                    <input type="text" class="form-control" placeholder="Eg. 3"
                                                        id="babySeat" name="babySeats">
                                                </div> --}}

                                                {{-- <div class="col-3">
                                                    <label for="">Booster Seat :</label>
                                                    <input type="text" class="form-control" placeholder="Eg. 3"
                                                        id="boosterSeat" name="boosterSeats">
                                                </div>

                                                <div class="col-3">
                                                    <label for="">Wheelchair :</label>
                                                    <input type="text" class="form-control" placeholder="Eg. 3"
                                                        id="wheelChair" name="wheelchairs">
                                                </div> --}}
                                            </div>
                                        </div>
                                        <input type="button" name="next" class="action-button checkFeilds"
                                            onclick="onClickNext()" value="@lang('auth.next')" />
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-card">
                                            <div class="row">
                                                <div class="col-md-6 col-lg-6 col-sm-12">
                                                    <h2 class="fs-title">@lang('auth.map')</h2>
                                                    <div id="map" style="width: 100%; height: 400px;">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-12">
                                                    <h2 class="fs-title">@lang('auth.your_jurney')</h2>

                                                    <div class="row">
                                                        <div class="col-12">
                                                            <p id="fromRes">@lang('auth.from') :</p>
                                                        </div>
                                                        <div class="col-12">
                                                            <p id="toRes">@lang('auth.to') :</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <p id="placeAmountFirst">@lang('auth.price') :</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h2 class="fs-title">@lang('auth.your_jurney')</h2>
                                                        </div>
                                                        <div class="col-6">
                                                            <p id="dateRes">@lang('auth.date') :</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p id="timeRes">@lang('auth.time') :</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h2 class="fs-title">@lang('auth.options')</h2>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <p id="passengerRes">@lang('auth.passengers') :</p>
                                                                </div>
                                                                <div class="col-6">
                                                                    <p id="babySeatsRes">@lang('auth.baby_seat') :</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <p id="resturnRes">@lang('auth.return') :</p>
                                                                </div>
                                                                {{-- <div class="col-6">
                                                                    <p id="boosterRes">Booster Seats :</p>
                                                                </div> --}}
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <p id="luggageRes">@lang('auth.luggage') :</p>
                                                                </div>
                                                                {{-- <div class="col-6">
                                                                    <p id="wheelChairRes">Wheelchair :</p>
                                                                </div> --}}
                                                            </div>
                                                            <div class="row">
                                                                {{-- <div class="col-6">
                                                                    <p id="meetRes">Meet & Greet :</p>
                                                                </div> --}}

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2" id="selectedVehicle"></div>
                                            <div class="row mt-2" id="vehicleList">
                                                @foreach ($all_vehicles as $each_vehicle)
                                                <div class="card mb-3" style="box-shadow: inset 0 0 3px #aa8453;">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-4 col-lg-4 col-sm-12">
                                                                <img src="{{ asset('featuredImage/' .$each_vehicle['image']) }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="col-md-5 col-lg-5 col-sm-12">
                                                                <h3 id="tmpName" class="section-title" style="font-size: 23px;">{{ $each_vehicle['brand']}}</h3>
                                                                <p class="ms-3"><b>@lang('auth.name') :- {{ $each_vehicle['model'] }}</b></p>
                                                                <p class="ms-3"><b>@lang('auth.passengers') :- {{ $each_vehicle['seats'] }}</b></p>
                                                            </div>
                                                            <div class="col-lg-3 col-sm-12">
                                                                <input type="button" style="background-color: #8E6F45"
                                                                    class="action-button" id="{{ "buy" .
                                                                    $each_vehicle['id'] }}"
                                                                    onclick="buyNow('{{ $each_vehicle['brand'] . $each_vehicle['model']}}', '{{ $each_vehicle['id'] }}', '{{ 'buy' . $each_vehicle['id'] }}')"
                                                                    name="buy" value="@lang('auth.select')">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <input type="button" name="previous" class="previous action-button-previous"
                                            value="@lang('auth.previous')" />
                                        <input type="button" name="next" class="action-button checkVehicleSelected" value="@lang('auth.next')" />
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-card">
                                            <h2 class="fs-title">@lang('auth.promotional_details')</h2>

                                            <div class="row">
                                                <div class="col-md-4 col-lg-4 col-sm-12">
                                                    <label for="">@lang('auth.promo_code_txt') :</label>
                                                </div>
                                                <div class="col-md-4 col-lg-4 col-sm-12">
                                                    <input type="text" class="form-control" placeholder="Ex. PROMO001"
                                                        id="promoCode">
                                                </div>
                                                <div class="col-md-4 col-lg-4 col-sm-12">
                                                    <button class="btn btn-primary btn-sm" style="background-color: #8E6F45 !important; border: 1px solid #8E6F45"
                                                        onclick="addPromoToFinalAmount(); return false;">@lang('auth.add_promo_btn')</button>
                                                </div>
                                            </div>

                                            <h2 class="fs-title">@lang('auth.vehicle_details')</h2>

                                            <div class="row">
                                                <div class="col-6">
                                                    <p id="vehicleName">@lang('auth.name') :</p>
                                                </div>
                                                <div class="col-6">
                                                    <p id="totalAmount">@lang('auth.price') :</p>
                                                </div>
                                            </div>

                                            <h2 class="fs-title">@lang('auth.reg_details')</h2>

                                            <div class="row">
                                                <div class="col-6">
                                                    <button class="btn btn-primary btn-sm" style="background-color: #8E6F45 !important; border: 1px solid #8E6F45"
                                                        onclick="openNewUserForm(); return false;">@lang('auth.new_cli')</button>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary btn-sm" style="background-color: #8E6F45 !important; border: 1px solid #8E6F45"
                                                        onclick="openExistingUserForm(); return false;">@lang('auth.existing_cli')</button>
                                                </div>
                                            </div>

                                            <div id="newUser" style="display: none">
                                                <div class="row mt-2">
                                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                                        <label for="">@lang('auth.fname') :</label>
                                                        <input type="text" class="form-control" name="fname"
                                                            placeholder="Ex. Kamal" id="fname">
                                                    </div>
                                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                                        <label for="">@lang('auth.lname') :</label>
                                                        <input type="text" class="form-control" name="lname"
                                                            placeholder="Ex. Nishantha" id="lname">
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                                        <label for="">@lang('auth.mobile') :</label>
                                                        <input type="text" class="form-control" name="mobileNumber"
                                                            placeholder="Ex. Kamal" id="mobileNumber">
                                                    </div>
                                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                                        <label for="">@lang('auth.email') :</label>
                                                        <input type="text" class="form-control" name="emailAddress"
                                                            placeholder="Ex. Nishantha" id="emailAddress">
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                                        <label for="">@lang('auth.create_pswd') :</label>
                                                        <input type="password" class="form-control" name="password"
                                                            id="password">
                                                    </div>
                                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                                        <label for="">@lang('auth.conf_pswd') :</label>
                                                        <input type="password" class="form-control"
                                                            name="confirmPassword" id="confirmPassword">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-2" id="existingUser" style="display: none">
                                                <div class="col-md-6 col-lg-6 col-sm-12">
                                                    <label for="">@lang('auth.user_email') :</label>
                                                    <input type="text" class="form-control" placeholder="Ex. Kamal"
                                                        id="checkMail" name="checkMail">
                                                </div>
                                            </div>
                                        </div>
                                        <input type="button" name="previous" class="previous action-button-previous"
                                            value="@lang('auth.previous')" />
                                        <input type="button" name="make_payment" class="action-button checkClick"
                                            value="@lang('auth.next')" />
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-card">
                                            <div class="row">
                                                <div class="col-md-6 col-lg-6 col-sm-12">
                                                    <h2 class="fs-title">@lang('auth.vehicle_details')</h2>

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <p id="vehicleNameLast">@lang('auth.name') :</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p id="vehiclePriceLast">@lang('auth.price') :</p>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-5">
                                                        <h2 class="fs-title">@lang('auth.personal_details')</h2>

                                                        <div class="row">
                                                            <div class="col-12">
                                                                <p id="fnameRes">@lang('auth.fname') :</p>
                                                            </div>
                                                            <div class="col-12">
                                                                <p id="lnameRes">@lang('auth.lname') :</p>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-12">
                                                                <p id="mobileRes">@lang('auth.mobile') :</p>
                                                            </div>
                                                            <div class="col-12">
                                                                <p id="emailRes">@lang('auth.email') :</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12">
                                                    <h2 class="fs-title">@lang('auth.your_jurney')</h2>

                                                    <div class="row">
                                                        <div class="col-12">
                                                            <p id="fromResLast">@lang('auth.from') :</p>
                                                        </div>
                                                        <div class="col-12">
                                                            <p id="toResLast">@lang('auth.to') :</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h2 class="fs-title">@lang('auth.date') & @lang('auth.time')</h2>
                                                        </div>
                                                        <div class="col-6">
                                                            <p id="dateResLast">@lang('auth.date') :</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p id="timeResLast">@lang('auth.time') :</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h2 class="fs-title">@lang('auth.options')</h2>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <p id="passengersResLast">@lang('auth.passengers') :</p>
                                                                </div>
                                                                <div class="col-6">
                                                                    <p id="babySeatsResLast">@lang('auth.baby_seat') :</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <p id="returnResLast">@lang('return') :</p>
                                                                </div>
                                                                {{-- <div class="col-6">
                                                                    <p id="boosterSeatResLast">Booster Seats :</p>
                                                                </div> --}}
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <p id="luggageResLast">@lang('auth.luggage') :</p>
                                                                </div>
                                                                {{-- <div class="col-6">
                                                                    <p id="wheelChairResLast">Wheelchair :</p>
                                                                </div> --}}
                                                            </div>
                                                            {{-- <div class="row">
                                                                <div class="col-6">
                                                                    <p id="meetResLast">Meet & Greet :</p>
                                                                </div>

                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md-6 col-lg-6 col-sm-12">
                                                    <input type="submit" class="btn btn-primary btn-sm"
                                                        value="@lang('auth.pay_online_btn')">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- stepper form ends here --}}

    <!-- Rooms -->
    <section class="rooms1 section-padding bg-cream d-none d-md-block d-lg-block" data-scroll-index="1" id="ourVehicles">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">@lang('auth.sec_4_sub_title')</div>
                    <div class="section-title">@lang('auth.sec_4_title')</div>
                </div>
            </div>
            
            <div class="row" style="margin-top: -10px;">
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="position-re o-hidden"> <img src="{{asset('images/car2-flip.png')}}" alt style="max-width: 500px"> </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12" style="padding-top: 50px">
                    <h2 style="font-family: 'Gilda Display', serif;">@lang('auth.car_1_title')</h2>
                    <p>
                        @lang('auth.car_1_desc_1')
                    </p>
                    <p>@lang('auth.car_1_desc_2')</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <h2 style="font-family: 'Gilda Display', serif;">@lang('auth.car_2_title')</h2>
                    <p>
                        @lang('auth.car_2_desc_1')
                    </p>
                    <p>
                        @lang('auth.car_2_desc_2')
                    </p>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="position-re o-hidden"> <img src="{{asset('images/car1-flip.png')}}" style="width: 600px;"> </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="rooms1 section-padding bg-cream d-md-none d-lg-none" data-scroll-index="1" id="ourVehicles">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">@lang('auth.sec_4_sub_title')</div>
                    <div class="section-title">@lang('auth.sec_4_title')</div>
                </div>
            </div>
            <div class="row" style="margin-top: -10px;">
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="position-re o-hidden"> <img src="{{asset('images/car2-flip.png')}}" alt style="max-width: 500px"> </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12" style="padding-top: 20px; padding-bottom: 50px;">
                    <h2 style="font-family: 'Gilda Display', serif;">@lang('auth.car_1_title')</h2>
                    <p>
                        @lang('auth.car_1_desc_1')
                    </p>
                    <p>@lang('auth.car_1_desc_2')</p>
                </div>
            </div>

             <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <h2 style="font-family: 'Gilda Display', serif;">@lang('auth.car_2_title')</h2>
                    <div class="position-re o-hidden"> <img src="{{asset('images/car1-flip.png')}}"> </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12" style="padding-top: 30px">
                    <p>
                       @lang('auth.car_2_desc_1')
                    </p>
                    <p>
                        @lang('auth.car_2_desc_2')
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Facilties -->
    <section class="facilties section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">@lang('auth.sec_5_sub_title')</div>
                    <div class="section-title">@lang('auth.sec_5_title')</div>
                </div>
            </div>
            <div class="row">
                @if ( Config::get('app.locale') == 'en')

                    <div class="col-md-4">
                        <div class="single-facility animate-box" data-animate-effect="fadeInUp" style="padding-bottom: 16%">
                            <span class="flaticon-world"></span>
                            <h5>@lang('auth.card_1_title')</h5>
                            <p>@lang('auth.card_1_desc')</p>
                            <div class="facility-shape"> <span class="flaticon-world"></span> </div>
                        </div>
                    </div>
                @else
                    <div class="col-md-4">
                        <div class="single-facility animate-box" data-animate-effect="fadeInUp" style="padding-bottom: 23%">
                            <span class="flaticon-world"></span>
                            <h5>@lang('auth.card_1_title')</h5>
                            <p>@lang('auth.card_1_desc')</p>
                            <div class="facility-shape"> <span class="flaticon-world"></span> </div>
                        </div>
                    </div>
                @endif
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-car"></span>
                        <h5>@lang('auth.card_2_title')</h5>
                        <p>@lang('auth.card_2_desc')</p>
                        <div class="facility-shape"> <span class="flaticon-car"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        {{-- <span class="flaticon-bed"></span> --}}
                        <img style="width: 46px; height: 46px;" src="https://img.icons8.com/external-xnimrodx-lineal-xnimrodx/100/aa8453/external-charger-photography-xnimrodx-lineal-xnimrodx.png"/>
                        <h5 class="mt-3">@lang('auth.card_3_title')</h5>
                        <p>@lang('auth.card_3_desc')</p>
                        <div class="facility-shape"> <span class="flaticon-bed"></span> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testiominals -->
    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0" data-background="{{asset('images/testimonial.jpg')}}"
            data-overlay-dark="3">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="testimonials-box">
                            <div class="head-box">
                                <h6>@lang('auth.testimonials')</h6>
                                <h4>@lang('auth.client_say')</h4>
                                <div class="line"></div>
                            </div>
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <span class="quote"><img src="images/quot.png" alt></span>
                                    <p>" @lang('auth.cmnt_1') "</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="images/1_1.jpg" alt> </div>
                                        <div class="cont"> <span><i class="star-rating"></i><i
                                                    class="star-rating"></i><i class="star-rating"></i><i
                                                    class="star-rating"></i><i class="star-rating"></i></span>
                                            <h6>Maureen G.</h6> <span>@lang('auth.gr')</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <span class="quote"><img src="images/quot.png" alt></span>
                                    <p>" @lang('auth.cmnt_2') "</p>

                                    <div class="info">
                                        <div class="author-img"> <img src="images/1_1.jpg" alt> </div>
                                        <div class="cont"> <span><i class="star-rating"></i><i
                                                    class="star-rating"></i><i class="star-rating"></i><i
                                                    class="star-rating"></i><i class="star-rating"></i></span>
                                            <h6>Julien C</h6> <span>@lang('auth.gr')</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <span class="quote"><img src="images/quot.png" alt></span>
                                    <p>
                                        « @lang('auth.cmnt_3') »

                                    </p>
                                    
                                    <div class="info">
                                        <div class="author-img"> <img src="images/5.jpg" alt> </div>
                                        <div class="cont"> <span><i class="star-rating"></i><i
                                                    class="star-rating"></i><i class="star-rating"></i><i
                                                    class="star-rating"></i><i class="star-rating"></i></span>
                                            <h6>Roya S.</h6> <span>@lang('auth.gr')</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services -->
    <section class="services section-padding" id="specialTours">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                    <div class="img left">
                        <a href="/{{app()->getLocale()}}/tour-plans/1"><img src="{{asset('images/1_5.jpg')}}" alt></a>
                    </div>
                </div>
                <div class="col-md-6 p-0 bg-cream valign animate-box" data-animate-effect="fadeInRight">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>@lang('auth.discover')</h6>
                            </div>
                            <h4>@lang('auth.tr_1')</h4>
                            <p>@lang('auth.tr_1_desc')</p>
                            <div class="butn-dark"> <a href="/{{app()->getLocale()}}/tour-plans/1"><span>@lang('auth.learn_more')</span></a> </div>
                            {{-- <div class="butn-dark"> <a href="{{ route('tour-plans', ['locale' => app()->getLocale(), 'tour_id' => '1']) }}"><span>@lang('auth.learn_more')</span></a> </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 bg-cream p-0 order2 valign animate-box" data-animate-effect="fadeInLeft">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>@lang('auth.exp')</h6>
                            </div>
                            <h4>@lang('auth.tr_2')</h4>
                            <p>@lang('auth.tr_2_desc')</p>
                            <div class="butn-dark"> <a href="/{{app()->getLocale()}}/tour-plans/2"><span>@lang('auth.learn_more')</span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0 order1 animate-box" data-animate-effect="fadeInRight">
                    <div class="img">
                        <a href="/{{app()->getLocale()}}/tour-plans/2"><img src="{{asset('images/3_2.jpg')}}" alt></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                    <div class="img left">
                        <a href="/{{app()->getLocale()}}/tour-plans/3"><img src="{{asset('images/2_3.jpg')}}" alt></a>
                    </div>
                </div>
                <div class="col-md-6 p-0 bg-cream valign animate-box" data-animate-effect="fadeInRight">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>@lang('auth.modern')</h6>
                            </div>
                            <h4>@lang('auth.tr_3')</h4>
                            <p>@lang('auth.tr_3_desc')</p>
                            <div class="butn-dark"> <a href="/{{app()->getLocale()}}/tour-plans/3"><span>@lang('auth.learn_more')</span></a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    {{View::make('footer')}}
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('js/jquery-migrate-3.0.0.min.js')}}"></script>
    <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
    <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('js/jquery.isotope.v3.0.2.js')}}"></script>
    <script src="{{asset('js/pace.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/scrollIt.min.js')}}"></script>
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('js/YouTubePopUp.js')}}"></script>
    <script src="{{asset('js/select2.js')}}"></script>
    <script src="{{asset('js/datepicker.js')}}"></script>
    <script src="{{asset('js/smooth-scroll.min.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="http://js.stripe.com/v3/"></script>
    <script src="{{asset('vehicle_popup/js/main.js')}}"></script>
    <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
    <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{config('app.g_map_key')}}&libraries=places"></script>

    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

    <script>
        var map, clientReturn, isNewUser, vehiclePrice;
        var vehicleSelected = false;

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function onSelectPassengerRange() {
            var toPlace
            if (isSet == 0) {
                toPlace = document.getElementById("to").value;
            } else {
                toPlace = document.getElementById("from").value;
            }
            const passengerRange = document.getElementById("passengers").value;
            
            $.ajax({
                type: 'GET',
                url: "{{ route('getpriceByPlaceName', 'en') }}",
                data: { placeName: toPlace, range: passengerRange },
                success: function (data) {
                    document.getElementById("placeAmount").value = data.success;
                    document.getElementById("placeAmountFirst").innerHTML = "@lang('auth.price') : " + data.success;
                }
            });
        }

        // validations starts

        $(".checkFeilds").click(function(e) {
            const toCheck = document.getElementById("to").value;
            const fromCheck = document.getElementById("from").value;
            const passengers = document.getElementById("passengers").value;
            const date = document.getElementById("date").value;
            let selected = document.querySelector("input[name='tripType']:checked")
            console.log(passengers);
            if (toCheck === "0" || fromCheck === "" || passengers === "0" || selected === null || date === "") {
                alert("Please Fill All Feilds.");
                e.preventDefault();
                return false;
            } else {
                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({ opacity: 0 }, {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({ 'opacity': opacity });
                    },
                    duration: 600
                });

                displayRoute();
            }

            if (clientReturn === "Yes") {
                document.getElementById("placeAmount").value = document.getElementById("placeAmount").value * 2;
                document.getElementById("placeAmountFirst").innerHTML = "@lang('auth.price') : " + document.getElementById("placeAmount").value;
            }
        });

        $(".checkVehicleSelected").click(function (e) {
            if (vehicleSelected !== true) {
                alert("Please Select Vehicle to Proceed.");
            } else {
                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({ opacity: 0 }, {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({ 'opacity': opacity });
                    },
                    duration: 600
                });
            }
        });

        //validations ends

        var isSet = 0;
        function inverseLocations() {
            const getInverseFromParent = document.getElementById("inverseFrom");
            const getInverseToParent = document.getElementById("inverseTo");

            const getTo = document.getElementById("to");
            const getFrom = document.getElementById("from");

            if (isSet === 0) {
                getInverseFromParent.appendChild(getTo);
                getInverseToParent.appendChild(getFrom);

                getTo.id = "from";
                getTo.name = "from";

                getFrom.id = "to";
                getFrom.name = "to";

                isSet = 1;
            } else {
                getInverseFromParent.appendChild(getTo);
                getInverseToParent.appendChild(getFrom);

                getTo.id = "from";
                getTo.name = "from";

                getFrom.id = "to";
                getFrom.name = "to";

                isSet = 0;
            }

            return false;
        }

        function setAmountOnPlace() {
            var toPlace
            if (isSet == 0) {
                toPlace = document.getElementById("to").value;
            } else {
                toPlace = document.getElementById("from").value;
            }

            // $.ajax({
            //     type: 'GET',
            //     url: "{{ route('getpriceByPlaceName', 'en') }}",
            //     data: { placeName: toPlace },
            //     success: function (data) {
            //         document.getElementById("placeAmount").value = data.success;
            //         document.getElementById("placeAmountFirst").innerHTML = "@lang('auth.price') : " + data.success;
            //     }
            // });
        }

        initMap();
        var pickInput = document.getElementById("from");
        // var destinationInput = document.getElementById("to");
        var returnTo = document.getElementById("returnTo");
        var returnForm = document.getElementById("returnFromHiddenEl");
        var pickAutoComplete = new google.maps.places.Autocomplete(pickInput);
        // var destinationAutocomplete = new google.maps.places.Autocomplete(destinationInput);
        // var returnToAutoComplete = new google.maps.places.Autocomplete(returnTo);
        // var returnFromAutoComplete = new google.maps.places.Autocomplete(returnFrom);

        function onClickNext() {
            var to = document.getElementById("to").value;
            var date = document.getElementById("date").value;
            var hour = document.getElementById("hour").value;
            var min = document.getElementById("min").value;

            var passengers = document.getElementById("passengers").value;
            var luggage = document.getElementById("luggage").value;
            var babySeats = document.getElementById("babySeat").value;
            // var boosterSeat = document.getElementById("boosterSeat").value;
            // var wheelChair = document.getElementById("wheelChair").value;
            // var meet = document.getElementById("meet").value;

            document.getElementById("fromRes").innerHTML = "@lang('auth.from') : " + pickInput.value;
            document.getElementById("toRes").innerHTML = "@lang('auth.to') : " + to;
            document.getElementById("dateRes").innerHTML = "@lang('auth.date') : " + date;
            document.getElementById("timeRes").innerHTML = "@lang('auth.time') : " + hour + " : " + min;

            document.getElementById("passengerRes").innerHTML = "@lang('auth.passengers') : " + passengers;
            document.getElementById("luggageRes").innerHTML = "@lang('auth.luggage') : " + luggage;
            document.getElementById("babySeatsRes").innerHTML = "@lang('auth.baby_seat') : " + babySeats;
            document.getElementById("resturnRes").innerHTML = "@lang('auth.return') : " + clientReturn;
            // document.getElementById("boosterRes").innerHTML = "Booster Seat : " + boosterSeat;
            // document.getElementById("wheelChairRes").innerHTML = "Wheel Chairs : " + wheelChair;
            // document.getElementById("meetRes").innerHTML = "Meet & Greet : " + meet;
        }

        //init map
        function initMap() {
            var myLating = {
                lat: 6.9778,
                lng: 79.9272
            };

            map = new google.maps.Map(document.getElementById("map"), { zoom: 16, center: myLating });
        }

        let radioButtons = document.querySelectorAll("input[name='tripType']");
        let changeDomToReturnInfo = document.getElementById("returnInfo");

        let findSelected = () => {
            var getFlightNumEl = document.getElementById("flightNumberParent");
            let selected = document.querySelector("input[name='tripType']:checked").value;

            if (selected === "return") {
                clientReturn = "Yes";
                changeDomToReturnInfo.style.display = null;

                // document.getElementById("returnToHiddenEl").style.display = null;
                // document.getElementById("returnFromHiddenEl").style.display = null;
            } else {
                changeDomToReturnInfo.style.display = "none";
                clientReturn = "No";

                
            }
        }

        radioButtons.forEach((radioBtn) => {
            radioBtn.addEventListener("change", findSelected);
        });

        $(document).ready(function () {

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;

            $(".checkClick").click(function (e) {
                if (isNewUser !== true) {
                    var emailCheck = $("input[name=checkMail]").val();

                    if (emailCheck === "") {
                        alert("Please Enter Email Address.");
                    } else {
                        $.ajax({
                            type: 'GET',
                            url: "{{ route('clientEmailCheck', 'en') }}",
                            data: { email: emailCheck },
                            success: function (data) {
                                if (data.status != 0) {
                                    current_fs = $(".checkClick").parent();
                                    next_fs = $(".checkClick").parent().next();

                                    //Add Class Active
                                    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                                    //show the next fieldset
                                    next_fs.show();
                                    //hide the current fieldset with style
                                    current_fs.animate({ opacity: 0 }, {
                                        step: function (now) {
                                            // for making fielset appear animation
                                            opacity = 1 - now;

                                            current_fs.css({
                                                'display': 'none',
                                                'position': 'relative'
                                            });
                                            next_fs.css({ 'opacity': opacity });
                                        },
                                        duration: 600
                                    });
                                    document.getElementById("fnameRes").innerHTML = "@lang('auth.fname') : " + data.result["first_name"];
                                    document.getElementById("lnameRes").innerHTML = "@lang('auth.lname') : " + data.result["last_name"];
                                    document.getElementById("mobileRes").innerHTML = "@lang('auth.mobile') : " + data.result["mobile_number"];
                                    document.getElementById("emailRes").innerHTML = "@lang('auth.email') : " + data.result["email"];

                                    document.getElementById("vehicleNameLast").innerHTML = "@lang('auth.name') : " + vehicleName;
                                    document.getElementById("vehiclePriceLast").innerHTML = "@lang('auth.price') : " + document.getElementById("placeAmount").value;

                                    var to = document.getElementById("to").value;
                                    var date = document.getElementById("date").value;
                                    var hour = document.getElementById("hour").value;
                                    var min = document.getElementById("min").value;

                                    var passengers = document.getElementById("passengers").value;
                                    var luggage = document.getElementById("luggage").value;
                                    var babySeats = document.getElementById("babySeat").value;
                                    // var boosterSeat = document.getElementById("boosterSeat").value;
                                    // var wheelChair = document.getElementById("wheelChair").value;
                                    // var meet = document.getElementById("meet").value;

                                    document.getElementById("fromResLast").innerHTML = "@lang('auth.from') : " + pickInput.value;
                                    document.getElementById("toResLast").innerHTML = "@lang('auth.to') : " + to;
                                    document.getElementById("dateResLast").innerHTML = "@lang('auth.date') : " + date;
                                    document.getElementById("timeResLast").innerHTML = "@lang('auth.time') : " + hour + " : " + min;

                                    document.getElementById("passengersResLast").innerHTML = "@lang('auth.passengers') : " + passengers;
                                    document.getElementById("luggageResLast").innerHTML = "@lang('auth.luggage') : " + luggage;
                                    document.getElementById("babySeatsResLast").innerHTML = "@lang('auth.baby_seat') : " + babySeats;
                                    document.getElementById("returnResLast").innerHTML = "@lang('auth.return') : " + clientReturn;
                                    // document.getElementById("boosterSeatResLast").innerHTML = "Booster Seat : " + boosterSeat;
                                    // document.getElementById("wheelChairResLast").innerHTML = "Wheel Chairs : " + wheelChair;
                                    // document.getElementById("meetResLast").innerHTML = "Meet & Greet : " + meet;
                                }
                            }
                        });
                    }
                } else {
                    var fname = $("input[name=fname]").val();
                    var lname = $("input[name=lname]").val();
                    var password = $("input[name=password]").val();
                    var email = $("input[name=emailAddress]").val();
                    var mobile = $("input[name=mobileNumber]").val();

                    if (fname === "" || lname === "" || password === "" || email === "" || mobile === "") {
                        alert("Please Fill All Feilds");
                    } else {
                        if (document.getElementById("password").value === document.getElementById("confirmPassword").value ) {

                            $.ajax({
                                type: 'POST',
                                url: "{{ route('ajaxRequest.post', 'en') }}",
                                data: { fname: fname, lname: lname, email: email, mobile: mobile, password: password },
                                success: function (data) {
                                    if (data.status === '1') {

                                        current_fs = $(".checkClick").parent();
                                        next_fs = $(".checkClick").parent().next();

                                        //Add Class Active
                                        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                                        //show the next fieldset
                                        next_fs.show();
                                        //hide the current fieldset with style
                                        current_fs.animate({ opacity: 0 }, {
                                            step: function (now) {
                                                // for making fielset appear animation
                                                opacity = 1 - now;

                                                current_fs.css({
                                                    'display': 'none',
                                                    'position': 'relative'
                                                });
                                                next_fs.css({ 'opacity': opacity });
                                            },
                                            duration: 600
                                        });

                                        document.getElementById("fnameRes").innerHTML = "First Name : " + document.getElementById("fname").value;
                                        document.getElementById("lnameRes").innerHTML = "Last Name : " + document.getElementById("lname").value;
                                        document.getElementById("mobileRes").innerHTML = "Mobile Number : " + document.getElementById("mobileNumber").value;
                                        document.getElementById("emailRes").innerHTML = "Email Address : " + document.getElementById("emailAddress").value;

                                        document.getElementById("vehicleName").innerHTML = "@lang('auth.name') : " + vehicleName;
                                        document.getElementById("vehicleNameLast").innerHTML = "@lang('auth.name') : " + vehicleName;
                                        document.getElementById("vehiclePriceLast").innerHTML = "@lang('auth.price') : " + document.getElementById("placeAmount").value;

                                        var to = document.getElementById("to").value;
                                        var date = document.getElementById("date").value;
                                        var hour = document.getElementById("hour").value;
                                        var min = document.getElementById("min").value;

                                        var passengers = document.getElementById("passengers").value;
                                        var luggage = document.getElementById("luggage").value;
                                        var babySeats = document.getElementById("babySeat").value;
                                        // var boosterSeat = document.getElementById("boosterSeat").value;
                                        // var wheelChair = document.getElementById("wheelChair").value;
                                        // var meet = document.getElementById("meet").value;

                                        document.getElementById("fromResLast").innerHTML = "From : " + pickInput.value;
                                        document.getElementById("toResLast").innerHTML = "To : " + to;
                                        document.getElementById("dateResLast").innerHTML = "Date : " + date;
                                        document.getElementById("timeResLast").innerHTML = "Time : " + hour + " : " + min;

                                        document.getElementById("passengersResLast").innerHTML = "Passengers : " + passengers;
                                        document.getElementById("luggageResLast").innerHTML = "Luggage : " + luggage;
                                        document.getElementById("babySeatsResLast").innerHTML = "Baby Seats : " + babySeats;
                                        document.getElementById("returnResLast").innerHTML = "Return : " + clientReturn;
                                        document.getElementById("boosterSeatResLast").innerHTML = "Booster Seat : " + boosterSeat;
                                        document.getElementById("wheelChairResLast").innerHTML = "Wheel Chairs : " + wheelChair;
                                        document.getElementById("meetResLast").innerHTML = "Meet & Greet : " + meet;

                                    } else if (data.status === '2') {
                                        alert("Duplicate User.");
                                    } else {
                                        alert("Error");
                                    }
                                }
                            });
                        } else {
                            alert("Password Doesnt Match");
                        }
                    }
                }
            });

            $(".next").click(function () {

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({ opacity: 0 }, {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({ 'opacity': opacity });
                    },
                    duration: 600
                });

                displayRoute();
            });

            $(".previous").click(function () {

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate({ opacity: 0 }, {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({ 'opacity': opacity });
                    },
                    duration: 600
                });
            });

            $('.radio-group .radio').click(function () {
                $(this).parent().find('.radio').removeClass('selected');
                $(this).addClass('selected');
            });

            $(".submit").click(function () {
                return false;
            })

        });

        function displayRoute() {
            var origin = document.getElementById("from").value;
            var destination = document.getElementById("to").value;
            var directionsService = new google.maps.DirectionsService();
            var directionsDisplay = new google.maps.DirectionsRenderer({ draggable: false });
            var travelMode = google.maps.DirectionsTravelMode.DRIVING;
            directionsService.route({
                origin: origin,
                destination: destination,
                travelMode: travelMode,
                avoidTolls: true
            }, function (response, status) {
                if (status === "OK") {
                    directionsDisplay.setMap(map);
                    directionsDisplay.setDirections(response);
                } else {
                    directionsDisplay.setMap(null);
                    directionsDisplay.setDirections(null);
                }
            });
        }

        const newUserForm = document.getElementById("newUser");
        const existingUser = document.getElementById("existingUser");
        const parentNodes = document.getElementById("vehicleList");
        const cpyParentNode = parentNodes;

        var vehicleName;

        function buyNow(name, id, jsId) {
            vehicleName = name;
            document.getElementById("vehicleName").innerHTML = "@lang('auth.name') : " + name;
            const selectedVehicle = document.getElementById("selectedVehicle");

            // parentNodes.remove();
            selectedVehicle.innerHTML = "<input type='hidden' name='vehicleId' value='" + id + "' id='vehicleId'>";
            document.getElementById("vehicleId").value = id;
            document.getElementById("totalAmount").innerHTML = "@lang('auth.price') : " + document.getElementById("placeAmount").value;

            if (vehicleSelected != true) {
                const getBuy = document.getElementById(jsId);
                const getBuyParent = getBuy.parentElement;
                const getBuyCpy = getBuy;
                getBuyParent.removeChild(getBuy);

                const createBtn = document.createElement("button");
                createBtn.classList.add("action-button");
                createBtn.style.height = "34px";
                createBtn.innerHTML = "Selected";
                createBtn.id = "selectedBtn";
                createBtn.onclick = function () { removeSelected(getBuyCpy, getBuyParent); return false; };
                getBuyParent.appendChild(createBtn);
                vehicleSelected = true;
            } else {
                return false;
            }
        }

        function removeSelected(getBuyCpy, parent) {
            parent.removeChild(document.getElementById("selectedBtn"));
            parent.appendChild(getBuyCpy);
            vehicleSelected = false;
        }

        function reverseVehicle() {
            const selectedVehicle = document.getElementById("selectedVehicle");
            selectedVehicle.innerHTML = "";
            selectedVehicle.appendChild(cpyParentNode);
        }

        function openNewUserForm() {
            newUserForm.style.display = null;
            existingUser.style.display = "none";
            isNewUser = true;
        }

        function openExistingUserForm() {
            existingUser.style.display = null;
            newUserForm.style.display = "none";
            isNewUser = false;
        }

        // header scroll event trigger
        //have to add nav-scroll class

        window.onscroll = function () { myFunction() };

        // Get the header
        var header = document.getElementById("myHeader");

        // Get the offset position of the navbar
        var sticky = header.offsetTop;

        // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("nav-scroll");
                header.style.position = "fixed";

                const logoParent = document.getElementById("logoParent");
                logoParent.classList.add("ms-2");
                const getLogo = document.getElementById("setLogo");

                const img = document.createElement('img');
                img.src = window.location.origin + "/" + "images/logo-dark.png";
                img.classList.add("logo-img");
                img.style.color = "black";
                img.setAttribute('id', 'setLogo');
                logoParent.removeChild(getLogo);
                logoParent.appendChild(img);
            } else {
                header.classList.remove("nav-scroll");

                const logoParent = document.getElementById("logoParent");
                const getLogo = document.getElementById("setLogo");

                const img = document.createElement('img');
                img.src = window.location.origin + "/" + "images/logo.png";
                img.classList.add("logo-img");
                img.setAttribute('id', 'setLogo');
                logoParent.removeChild(getLogo);
                logoParent.appendChild(img);
            }
        }

        function addPromoToFinalAmount() {
            const promoCode = document.getElementById("promoCode").value;
            const totalAmount = document.getElementById("placeAmount").value;

            if (promoCode) {
                $.ajax({
                    type: 'GET',
                    url: "{{ route('getPromoValueByCode', 'en') }}",
                    data: { promoCode: promoCode },
                    success: function (data) {
                        document.getElementById("totalAmount").innerHTML = "@lang('auth.price') : " + (totalAmount - (totalAmount * (data.success / 100)));
                        document.getElementById("placeAmount").value = totalAmount - (totalAmount * (data.success / 100));
                    }
                });
            } else {
                alert("please insert promo code");
            }
        }

        function onChangeLanguage() {
            const languageSelect = document.getElementById("languageSelect").value;
            console.log(languageSelect);
            if (languageSelect === "en") {
                window.location.href = window.location.origin + "/en";
            } else {
                window.location.href = window.location.origin + "/fr";
            }
        }

    </script>
</body>

</html>