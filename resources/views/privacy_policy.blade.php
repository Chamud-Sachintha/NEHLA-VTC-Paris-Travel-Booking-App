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
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="3" data-background="{{asset('images/privacy_new.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    {{-- <h5>@lang('auth.get_in_touch')</h5> --}}
                    <h1>@lang('auth.contact_us')</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="rooms-page section-padding" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> <span><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></span>
                    <div class="section-subtitle">So Many Ways to Unwind</div>
                    <div class="section-title">@lang('auth.privacy_title')</div>

                    <p class="mb-20">@lang('auth.p1')</p>
                    <p class="mb-20">@lang('auth.p2')</p>
                    <p class="mb-20">@lang('auth.p3')</p>
                    <p class="mb-20">@lang('auth.p4')</p>
                    <p class="mb-20">@lang('auth.p5')</p>
                    <p class="mb-20">@lang('auth.p6')</p>
                    <p class="mb-20">@lang('auth.p7')</p>
                    <p class="mb-20">@lang('auth.p8')</p>
                    <p class="mb-20">@lang('auth.p9')</p>
                    <p class="mb-20">@lang('auth.p10')</p>
                    <p class="mb-20">@lang('auth.p11')</p>
                    <p class="mb-20">@lang('auth.p12')</p>
                    <p class="mb-20">@lang('auth.p13')</p>
                    <p class="mb-20">@lang('auth.p14')</p>
                    <p class="mb-20">@lang('auth.p15')</p>
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