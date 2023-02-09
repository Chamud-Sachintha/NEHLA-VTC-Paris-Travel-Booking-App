<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>The NEHLA VTC Paris - THE NEHLA LUXURY TRANSPORT</title>
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow&amp;family=Barlow+Condensed&amp;family=Gilda+Display&amp;display=swap">
    <link rel="stylesheet" href="{{asset('contact/css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('contact/css/style.css')}}">
    <style>
        .bg-fixed {
            background-attachment: scroll;
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
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="3" data-background="{{asset('images/contactbg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    {{-- <h5>@lang('auth.get_in_touch')</h5> --}}
                    <h1>@lang('auth.contact_us')</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact -->
    <section class="contact section-padding">
        <div class="container">
            <div class="row mb-10">
                <div class="col-md-6 mb-60">
                    <h3>@lang('auth.contact_title')</h3>
                    <p>@lang('auth.contact_desc')</p>
                    <div class="reservations mb-30">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p>@lang('auth.reservation')</p> <a href="tel:855-100-4444">+33 6 36 20 35 62</a>
                        </div>
                    </div>
                    <div class="reservations mb-30">
                        <div class="icon"><span class="flaticon-envelope"></span></div>
                        <div class="text">
                            <p>@lang('auth.email_info')</p> <a href="mailto:info@luxuryhotel.com">contact@nehlavtcparis.com</a>
                        </div>
                    </div>
                    {{-- <div class="reservations">
                        <div class="icon"><span class="flaticon-location-pin"></span></div>
                        <div class="text">
                            <p>Address</p> 28, rue Tristan Tzara 75018
                            <br>Paris
                        </div>
                    </div> --}}
                </div>
                <div class="col-md-5 mb-30 offset-md-1">
                    <h3>@lang('auth.get_in_touch')</h3>
                    <form method="post" class="" action="/saveContactMessage">
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
                                {{-- <button class="butn-dark"><a href="#0"><span>Send Message</span></a></button> --}}
                                <input type="submit" class="butn-dark" value="@lang('auth.send_message')">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Map Section -->
            {{-- <div class="row">
                <div class="col-md-12 map animate-box" data-animate-effect="fadeInUp">
                    <iframe src="https://www.google.com/maps/embed?pb=!3m1!4b1!4m5!3m4!1s0x47e66e7ded5ec87f:0x1ced6e1bcb46d9b1!8m2!3d48.8954894!4d2.3632539" width="100%" height="600" style="border:0;" allowfullscreen loading="lazy"></iframe>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- Reservation & Booking Form -->
    {{-- <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0" data-background="img/slider/2.jpg" data-overlay-dark="2">
            <div class="container">
                <div class="row">
                    <!-- Reservation -->
                    <div class="col-md-5 mb-30 mt-30">
                        <p><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></p>
                        <h5>Each of our guest rooms feature a private bath, wi-fi, cable television and include full breakfast.</h5>
                        <div class="reservations mb-30">
                            <div class="icon color-1"><span class="flaticon-call"></span></div>
                            <div class="text">
                                <p class="color-1">Reservation</p> <a class="color-1" href="tel:855-100-4444">855 100 4444</a>
                            </div>
                        </div>
                        <p><i class="ti-check"></i><small>Call us, it's toll-free.</small></p>
                    </div>
                    <!-- Booking From -->
                    <div class="col-md-5 offset-md-2">
                        <div class="booking-box">
                            <div class="head-box">
                                <h6>Rooms & Suites</h6>
                                <h4>Hotel Booking Form</h4>
                            </div>
                            <div class="booking-inner clearfix">
                                <form action="rooms2.html" class="form1 clearfix">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input1_wrapper">
                                                <label>Check in</label>
                                                <div class="input1_inner">
                                                    <input type="text" class="form-control input datepicker" placeholder="Check in">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="input1_wrapper">
                                                <label>Check out</label>
                                                <div class="input1_inner">
                                                    <input type="text" class="form-control input datepicker" placeholder="Check out">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="select1_wrapper">
                                                <label>Adults</label>
                                                <div class="select1_inner">
                                                    <select class="select2 select" style="width: 100%">
                                                        <option value="0">Adults</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="select1_wrapper">
                                                <label>Children</label>
                                                <div class="select1_inner">
                                                    <select class="select2 select" style="width: 100%">
                                                        <option value="0">Children</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn-form1-submit mt-15">Check Availability</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients -->
    <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-7 owl-carousel owl-theme">
                    <div class="clients-logo">
                        <a href="#0"><img src="images/1.png" alt></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="images/2.png" alt></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="images/3.png" alt></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="images/4.png" alt></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="images/5.png" alt></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="images/6.png" alt></a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
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