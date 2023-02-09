<nav class="navbar navbar-expand-lg" style="position: absolute !important;" id="myHeader">
    <div class="container">
        <!-- Logo -->
        <div class="navbar-brand valign">
            <a href="/">
                <div class="" id="logoParent">
                    <img src="{{asset('images/logo.png')}}" class="" id="setLogo" style="width: 160px">
                </div>
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
                class="icon-bar"><i class="ti-line-double"></i></span> </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="/">@lang('auth.nav_home')</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about-us', app()->getLocale()) }}">@lang('auth.nav_about')</a></li>
                <li class="nav-item"><a class="nav-link" href="/{{ app()->getLocale() }}/#ourVehicles">@lang('auth.nav_vehicles')</a></li>
                <li class="nav-item"><a class="nav-link" href="/{{ app()->getLocale() }}/#specialTours">@lang('auth.nav_tours')</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact-us', app()->getLocale()) }}">@lang('auth.nav_contact')</a></li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ Url('en') }}"><img src="https://img.icons8.com/office/16/null/usa.png" style="width: 17px; height: 17px;"/></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ Url('fr') }}"><img src="https://img.icons8.com/office/16/null/france.png" style="width: 17px; height: 17px;"/></a>
                </li>
            </ul>
        </div>
    </div>
</nav>