<footer class="footer">
    <div class="footer-top" style="padding: 90px 0 0px 0; !importatnt">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-column footer-about">
                        <h3 class="footer-title">@lang('auth.about_title')</h3>
                        <p class="footer-about-text">@lang('auth.about_desc')</p>
                    </div>
                </div>
                <div class="col-md-3 offset-md-1">
                    <div class="footer-column footer-explore clearfix">
                        <h3 class="footer-title">@lang('auth.explore')</h3>
                        <ul class="footer-explore-list list-unstyled">
                            <li><a href="/">@lang('auth.nav_home')</a></li>
                            <li><a href="/{{app()->getLocale()}}/about-us">@lang('auth.nav_about')</a></li>
                            <li><a href="/{{app()->getLocale()}}/#ourVehicles">@lang('auth.nav_vehicles')</a></li>
                            <li><a href="/{{app()->getLocale()}}/#specialTours">@lang('auth.nav_tours')</a></li>
                            <li><a href="/{{app()->getLocale()}}/contact-us">@lang('auth.nav_contact')</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-column footer-contact">
                        <h3 class="footer-title">@lang('auth.contact')</h3>
                        {{-- <p class="footer-contact-text">28, rue Tristan Tzara 75018<br>Paris --}}
                        </p>
                        <div class="footer-contact-info">
                            <p class="footer-contact-phone"><span class="flaticon-call"></span> +33 6 36 20 35 62</p>
                            <p class="footer-contact-mail">contact@nehlavtcparis.com </p>
                        </div>
                        <div class="footer-about-social-list">
                            <a href="https://instagram.com/nehlavtcparis?igshid=YmMyMTA2M2Y="><i class="ti-instagram"></i></a>
                            {{-- <a href="#"><i class="ti-twitter"></i></a>
                            <a href="#"><i class="ti-youtube"></i></a> --}}
                            <a href="https://www.linkedin.com/mwlite/company/nehla-vtc-paris"><i class="ti-linkedin"></i></a>
                            <a href="https://www.facebook.com/nehlavtcparis"><i class="ti-facebook"></i></a>
                            {{-- <a href="#"><i class="ti-pinterest"></i></a> --}}
                        </div>

                        <div class="footer-language"> <i class="lni ti-world"></i>
                            <select onchange="onChangeLanguage()" id="languageSelect" style="width: 700px !important;">
                                <option value="n">Change Language</option>
                                <option value="en">English</option>
                                <option value="fr">French</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-bottom-inner">
                        <p class="footer-bottom-copy-right">© Copyright 2022 All Right Received by nehlavtcparis.com, Design & Developed by <a href="http://www.builtonus.com">BuiltOnUs.com</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>