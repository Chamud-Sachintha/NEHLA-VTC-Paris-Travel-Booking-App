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
                            <li><a href="/{{app()->getLocale()}}/privacy-policy">@lang('auth.nav_privacy')</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-column footer-contact">
                        <h3 class="footer-title">@lang('auth.contact')</h3>
                        {{-- <p class="footer-contact-text">28, rue Tristan Tzara 75018<br>Paris --}}
                        </p>
                        <div class="footer-contact-info">
                            <p class="footer-contact-phone"><a href="tel:+33 0 76 05 58 946"><span class="flaticon-call"></span> +33 0 76 05 58 946</p></a>
                            <p class="footer-contact-mail"><a href="mailto:contact@nehlavtcparis.com">contact@nehlavtcparis.com</a> </p>
                        </div>
                        <div class="footer-about-social-list">
                            <a href="https://instagram.com/nehlavtcparis?igshid=YmMyMTA2M2Y=" target="_blank"><i class="ti-instagram"></i></a>
                            {{-- <a href="#"><i class="ti-twitter"></i></a>
                            <a href="#"><i class="ti-youtube"></i></a> --}}
                            <a href="https://www.linkedin.com/company/nehla-vtc-paris/" target="_blank"><i class="ti-linkedin"></i></a>
                            <a href="https://www.facebook.com/nehlavtcparis" target="_blank"><i class="ti-facebook"></i></a>
                            {{-- <a href="#"><i class="ti-pinterest"></i></a> --}}
                        </div>

                        @if ( Config::get('app.locale') == 'en')
                            <div id="TA_rated51" style="margin-left: -10px" class="TA_rated"><ul id="C5CI7r" class="TA_links CU12KOhaqw"><li id="QJQC5vqvhtZd" class="ieZaaRc64Sk"><a target="_blank" href="https://www.tripadvisor.co.uk/Attraction_Review-g187147-d27743515-Reviews-Nehla_Vtc_Paris-Paris_Ile_de_France.html"><img src="https://www.tripadvisor.co.uk/img/cdsi/img2/badges/ollie-11424-2.gif" alt="TripAdvisor"/></a></li></ul></div><script async src="https://www.jscache.com/wejs?wtype=rated&amp;uniq=51&amp;locationId=27743515&amp;lang=en_UK&amp;display_version=2" data-loadtrk onload="this.loadtrk=true"></script>
                        @else
                            <div id="TA_rated308" style="margin-left: -10px" class="TA_rated"><ul id="hr1ZBd" class="TA_links p7tyG9oho"><li id="VOXYLR" class="UtHaRag1zWK"><a target="_blank" href="https://www.tripadvisor.fr/Attraction_Review-g187147-d27743515-Reviews-Nehla_Vtc_Paris-Paris_Ile_de_France.html"><img src="https://www.tripadvisor.fr/img/cdsi/img2/badges/ollie-11424-2.gif" alt="TripAdvisor"/></a></li></ul></div><script async src="https://www.jscache.com/wejs?wtype=rated&amp;uniq=308&amp;locationId=27743515&amp;lang=fr&amp;display_version=2" data-loadtrk onload="this.loadtrk=true"></script>
                        @endif
                        {{-- <div class="footer-language"> <i class="lni ti-world"></i>
                            <select onchange="onChangeLanguage()" id="languageSelect" style="width: 700px !important;">
                                <option value="n">Change Language</option>
                                <option value="en">English</option>
                                <option value="fr">French</option>
                            </select>
                        </div> --}}
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
                        <p class="footer-bottom-copy-right">© Copyright 2023 All Right Received by nehlavtcparis.com, Design & Developed by <a href="http://www.builtonus.com">BuiltOnUs.com</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>