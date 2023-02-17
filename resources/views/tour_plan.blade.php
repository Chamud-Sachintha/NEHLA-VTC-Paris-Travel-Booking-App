<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>The NEHLA VTC Paris - THE NEHLA LUXURY TRANSPORT</title>
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow&amp;family=Barlow+Condensed&amp;family=Gilda+Display&amp;display=swap">
    <link rel="stylesheet" href="{{asset('tour_plan/css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('tour_plan/css/style.css')}}">
    <style>
        .footer-about-social-list a {
            color: #aa8453; !important
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
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
    </div>
    <!-- Navbar -->
    {{ View::make('header') }}
    <!-- Spa-Wellness Slider -->
    <header class="header slider">
        <div class="owl-carousel owl-theme">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            <div class="text-center item bg-img" data-overlay-dark="3" data-background="{{ asset('images/'.$data['image']) }}"></div>
            {{-- <div class="text-center item bg-img" data-overlay-dark="3" data-background="img/spa/1.jpg"></div>
            <div class="text-center item bg-img" data-overlay-dark="3" data-background="img/spa/2.jpg"></div> --}}
        </div>
        <!-- arrow down -->
        <div class="arrow bounce text-center">
            <a href="#" data-scroll-nav="1" class> <i class="ti-arrow-down"></i> </a>
        </div>
    </header>
    <!-- Spa-Wellness Content -->
    <section class="rooms-page section-padding" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> <span><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></span>
                    <div class="section-subtitle">So Many Ways to Unwind</div>
                    <div class="section-title">{{ $data['title'] }}</div>

                    @foreach($data['descriptions'] as $each_description)
                        <p class="mb-30">{{ $each_description }}</p>
                    @endforeach
                    
                    <h4>{{ $data['place_title'] }}</h4>
                    @if($data['place_description'] != null)
                        <p>{{ $data['place_description'] }}</p>
                    @endif
                    @foreach ($data['places'] as $place)
                        <h5>{{ $place['name'] }}</h5>
                        <p class="mb-30">{{ $place['description'] }}</p>
                        @if($place['advice'] != null)
                            <p class="mb-30">Advice : {{ $place['advice'] }}</p>
                        @endif
                    @endforeach
                </div>
                {{-- <div class="col-md-12">
                    <div class="reservations">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p>Reservations</p> <a href="tel:855-100-4444">855 100 4444</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    
    <section class="rooms1 section-padding bg-cream mb-30" data-scroll-index="1">
        <div class="container">
            <div class="section-subtitle">The NEHLA Luxary Transport</div>
            <div class="section-title">{{ $data['title'] }}</div>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 mt-2">
                    <div class="card">
                        <div class="card-body">
                            <h3>@lang('auth.get_in_touch')</h3>
                            <form method="post" class="" action="/applyTour">
                                @csrf
                                <!-- form message -->
                                @if(Session()->get('status') != null)
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="alert alert-success contact__msg" style="display: none" role="alert"> Your message was sent successfully. </div>
                                        </div>
                                    </div>
                                @endif
                                <!-- form elements -->
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input name="name" type="text" placeholder="@lang('auth.form_name') *" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input name="email" type="email" placeholder="@lang('auth.form_email') *" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input name="phone" type="text" placeholder="@lang('auth.form_mobile') *" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input name="subject" type="text" placeholder="@lang('auth.subject') *" required>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <textarea name="message" id="message" cols="30" rows="4" placeholder="@lang('auth.message') *" required></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        {{-- {{dd(request()->route('id'))}} --}}
                                        <input type="hidden" value="{{$id}}" name="tour_id">
                                        {{-- <button type="submit" class="butn-dark"><a href="#0"><span>Send Message</span></a></button> --}}
                                        <input type="submit" class="butn-dark" value="@lang('auth.send_message')">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 mt-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="" style="padding-left: 20px; padding-bottom: 48px">
                                    <h3>@lang('auth.out_contact_details')</h3>
                                    <div class="reservations mb-30">
                                        <div class="icon"><span class="flaticon-call"></span></div>
                                        <div class="text">
                                            <p>@lang('auth.reservation')</p> <a href="tel:33 6 36 20 35 62">+33 6 36 20 35 62</a>
                                        </div>
                                    </div>
                                    <div class="reservations mb-30">
                                        <div class="icon"><span class="flaticon-envelope"></span></div>
                                        <div class="text">
                                            <p>@lang('auth.form_email')</p> <a href="mailto:contact@nehlavtcparis.com">contact@nehlavtcparis.com</a>
                                        </div>
                                    </div>
                                    {{-- <div class="reservations">
                                        <div class="icon"><span class="flaticon-location-pin"></span></div>
                                        <div class="text">
                                            <p>@lang('auth.address')</p> 28, rue Tristan Tzara 75018
                                            <br>Paris
                                        </div>
                                    </div> --}}
                                    <div class="footer-about-social-list" style="color: gold">
                                        <a href="https://instagram.com/nehlavtcparis?igshid=YmMyMTA2M2Y=" target="_blank"><i class="ti-instagram"></i></a>
                                        {{-- <a href="#"><i class="ti-twitter"></i></a> --}}
                                        <a href="https://www.linkedin.com/company/nehla-vtc-paris/" target="_blank"><i class="ti-linkedin"></i></a>
                                        <a href="https://www.facebook.com/nehlavtcparis" target="_blank"><i class="ti-facebook"></i></a>
                                        {{-- <a href="#"><i class="ti-pinterest"></i></a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    {{View::make('footer')}}
    <!-- jQuery -->
    <script src="{{asset('contact/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('contact/js/jquery-migrate-3.0.0.min.js')}}"></script>
    <script src="{{asset('contact/js/modernizr-2.6.2.min.js')}}"></script>
    <script src="{{asset('contact/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('contact/js/jquery.isotope.v3.0.2.js')}}"></script>
    <script src="{{asset('contact/js/pace.js')}}"></script>
    <script src="{{asset('contact/js/popper.min.js')}}"></script>
    <script src="{{asset('contact/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('contact/js/scrollIt.min.js')}}"></script>
    <script src="{{asset('contact/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('contact/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('contact/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('contact/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('contact/js/YouTubePopUp.js')}}"></script>
    <script src="{{asset('contact/js/select2.js')}}"></script>
    <script src="{{asset('contact/js/datepicker.js')}}"></script>
    <script src="{{asset('contact/js/smooth-scroll.min.js')}}"></script>
    <script src="{{asset('contact/js/custom.js')}}"></script>

    <script>
                // header scroll event trigger
        //have to add nav-scroll class

        window.onscroll = function() {myFunction()};

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
                const getLogo = document.getElementById("setLogo");
                
                const img = document.createElement('img');
                img.src = window.location.origin + "/" + "images/logo-dark.png";
                img.classList.add("logo-img");
                img.style.color = "black";
                img.setAttribute('id','setLogo');
                logoParent.removeChild(getLogo);
                logoParent.appendChild(img);
            } else {
                header.classList.remove("nav-scroll");

                const logoParent = document.getElementById("logoParent");
                const getLogo = document.getElementById("setLogo");
                
                const img = document.createElement('img');
                img.src = window.location.origin + "/" + "images/logo.png";
                img.classList.add("logo-img");
                img.setAttribute('id','setLogo');
                logoParent.removeChild(getLogo);
                logoParent.appendChild(img);
            }
        }
    </script>
</body>
</html>