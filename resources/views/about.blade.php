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
    <link rel="stylesheet" href="{{asset('css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <style>
        .bg-fixed {
            background-attachment: scroll;
            background-position: center;
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
    {{View::make('header')}}
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="{{asset('images/4_2.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-90">
                    <h5>@lang('auth.about_sub_title')</h5>
                    <h1>@lang('auth.about_title')</h1>
                </div>
            </div>
        </div>
    </div>
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
                    <div class="section-subtitle">@lang('auth.about_sub_title')</div>
                    <div class="section-title">@lang('auth.about_title_2')</div>
                    <p>@lang('auth.about_desc')</p>
                    <!-- reservation -->
                    <div class="reservations">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p>@lang('auth.reservation')</p> <a href="tel:855-100-4444">+33 6 36 20 35 62</a>
                        </div>
                    </div>
                </div>
                <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp"> <img src="{{asset('images/ab1.jpg')}}" alt > </div>
                <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp"> <img src="{{asset('images/ab2.jpg')}}" alt class="mt-90 mb-30"> </div>
            </div>
        </div>
    </section>
    
    <section class="about section-padding" style="margin-top: -30px; padding-top: 0px; !important;">
        <div class="container">
            <div class="row">
                <h1>@lang('auth.about_title_3')</h1>
            </div>
            <div class="row">
                <p>@lang('auth.about_li_1')</p>
            </div>
            <div class="row">
                <p>@lang('auth.about_li_2')</p>
            </div>
            <div class="row">
                <p>@lang('auth.about_li_3')</p>
            </div>
            <div class="row">
                <p>@lang('auth.about_li_4')</p>
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