<footer class="footer-standard-light bg-gold">
    <div class="footer-widget-area padding-five-tb sm-padding-30px-tb">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 widget border-right border-color-medium-dark-gray md-no-border-right md-margin-30px-bottom sm-text-center">
                    <div class="widget-title alt-font  text-white-2 text-uppercase margin-10px-bottom font-weight-600">{{__('footer.museum')}}</div>
                    <p class=" width-95 sm-width-100 text-white-2">{!! __('footer.hours') !!}</p>
                    <!-- start social media -->
                    <div class="social-icon-style-8 d-inline-block vertical-align-middle">
                        <ul class="small-icon no-margin-bottom">
                            <li><a class="facebook text-white-2" href="https://www.facebook.com/museumRepression/" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li><a class="facebook text-white-2" href="https://t.me/Muzey_Markaz" target="_blank"><i class="fab fa-telegram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <!-- end social media -->
                </div>
                <!-- start additional links -->
                <div class="col-lg-4 col-md-6 widget border-right border-color-medium-dark-gray padding-45px-left md-padding-15px-left md-no-border-right md-margin-30px-bottom text-center text-md-left">
                    <div class="widget-title alt-font text-white-2 text-uppercase margin-10px-bottom font-weight-600">Menu</div>
                    <ul class="list-unstyled">
                        <li><a class="text-white-2" href="{{route('news', app()->getLocale())}}">{{__('menu.news')}}</a></li>
                        <li><a class="text-white-2" href="{{route('memory', app()->getLocale())}}">{{__('menu.memory')}}</a></li>
                        <li><a class="text-white-2" href="{{route('achievements', app()->getLocale())}}">{{__('menu.achievement')}}</a></li>
                        <li><a class="text-white-2" href="{{route('museum.main', app()->getLocale())}}">{{__('menu.museum')}}</a></li>
                        <li><a class="text-white-2" href="{{route('library', app()->getLocale())}}">{{__('menu.library')}}</a></li>
                        <li><a class="text-white-2" href="{{route('photos', app()->getLocale())}}">{{__('menu.media')}}</a></li>
                        <li><a class="text-white-2" href="{{route('info', app()->getLocale())}}">{{__('menu.info')}}</a></li>
                        <li><a class="text-white-2" href="{{route('contacts', app()->getLocale())}}">{{__('menu.contacts')}}</a></li>
                    </ul>
                </div>
                <!-- end additional links -->
                <!-- start contact information -->
                <div class="col-lg-4 col-md-6 widget padding-45px-left md-padding-15px-left md-clear-both md-no-border-right sm-margin-30px-bottom text-center text-md-left">
                    <p class="d-block margin-15px-bottom width-80 sm-width-100 text-white-2">{{__('footer.address')}}</p>
                    <div class="text-white-2"><i class="fas fa-at"></i>  <a href="mailto:muzey-xotira@inbox.uz" class="text-white-2">muzey-xotira@inbox.uz</a> /  <a href="mailto:mx@exat.uz" class="text-white-2">mx@exat.uz</a></div>
                    <div class="text-white-2"><i class="fas fa-phone"></i> <a href="tel:+998712442940" class="text-white-2">(998-71)2442940</a>   / <a href="tel:+998712447331" class="text-white-2">(998-71) 2447331</a> </div>
                    <a href="https://goo.gl/maps/59Gnumcip8QmHALW9" class="text-uppercase text-decoration-underline text-white-2" target="_blank">{{__('footer.map')}}</a>
                </div>
                <!-- end contact information -->
            </div>
        </div>
    </div>
    <div class="bg-dark-footer padding-50px-tb text-center sm-padding-30px-tb">
        <div class="container">
            <div class="row">
                <!-- start copyright -->
                <div class="col-md-12 text-center">© 2020 Powered by <a href="https://it-park.uz/" target="_blank" class="text-dark-gray" style="color: #7dba28;font-weight: 700">ITPark</a><!-- Made By makc92.dev --></div>
                <!-- end copyright -->
            </div>
        </div>
    </div>
</footer>

