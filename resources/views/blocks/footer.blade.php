<footer class="footer-standard-dark bg-extra-dark-gray">
    <div class="footer-widget-area padding-five-tb sm-padding-30px-tb">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 widget border-right border-color-medium-dark-gray md-no-border-right md-margin-30px-bottom sm-text-center">
                    <div class="widget-title alt-font  text-medium-gray text-uppercase margin-10px-bottom font-weight-600">Қатағон қурбонлари портали</div>
                    <p class=" width-95 sm-width-100">Режим работы: Вторник-пятница с 9:00 до 17:00
                        Воскресенье с 10:00 до 15:00 Обед: с 13:00 до 14:00
                        Выходной день: Понедельник</p>
                    <!-- start social media -->
                    <div class="social-icon-style-8 d-inline-block vertical-align-middle">
                        <ul class="small-icon no-margin-bottom">
                            <li><a class="facebook text-white-2" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li><a class="twitter text-white-2" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="google text-white-2" href="https://plus.google.com" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a class="instagram text-white-2" href="https://instagram.com/" target="_blank"><i class="fab fa-instagram no-margin-right" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <!-- end social media -->
                </div>
                <!-- start additional links -->
                <div class="col-lg-4 col-md-6 widget border-right border-color-medium-dark-gray padding-45px-left md-padding-15px-left md-no-border-right md-margin-30px-bottom text-center text-md-left">
                    <div class="widget-title alt-font text-medium-gray text-uppercase margin-10px-bottom font-weight-600">Menu</div>
                    <ul class="list-unstyled">
                        <li><a href="{{route('news', app()->getLocale())}}">{{__('menu.news')}}</a></li>
                        <li><a href="{{route('memory', app()->getLocale())}}">{{__('menu.memory')}}</a></li>
                        <li><a href="{{route('achievements', app()->getLocale())}}">{{__('menu.achievement')}}</a></li>
                        <li><a href="{{route('museum.main', app()->getLocale())}}">{{__('menu.museum')}}</a></li>
                        <li><a href="{{route('library', app()->getLocale())}}">{{__('menu.library')}}</a></li>
                        <li><a href="{{route('photos', app()->getLocale())}}">{{__('menu.photo')}}</a></li>
                        <li><a href="{{route('info', app()->getLocale())}}">{{__('menu.info')}}</a></li>
                    </ul>
                </div>
                <!-- end additional links -->
                <!-- start contact information -->
                <div class="col-lg-4 col-md-6 widget padding-45px-left md-padding-15px-left md-clear-both md-no-border-right sm-margin-30px-bottom text-center text-md-left">
                    <div class="widget-title alt-font text-medium-gray text-uppercase margin-10px-bottom font-weight-600">Contact Info</div>
                    <p class="d-block margin-15px-bottom width-80 sm-width-100">POFO Design Agency<br> 301 The Greenhouse, Custard Factory, London, E2 8DY.</p>
                    <div>Email: <a href="mailto:sales@domain.com">sales@domain.com</a></div>
                    <div>Phone: +44 (0) 123 456 7890</div>
                    <a href="contact-us-modern.html" class=" text-uppercase text-decoration-underline">View Direction</a>
                </div>
                <!-- end contact information -->
            </div>
        </div>
    </div>
    <div class="bg-dark-footer padding-50px-tb text-center sm-padding-30px-tb">
        <div class="container">
            <div class="row">
                <!-- start copyright -->
                <div class="col-md-6 text-md-left  text-center">© 2019 POFO is Proudly Powered by <a href="http://www.themezaa.com" target="_blank" class="text-dark-gray">ThemeZaa</a></div>
                <div class="col-md-6 text-md-right  text-center">
                    <a href="javascript:void(0);" class="text-dark-gray">Term and Condition</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="javascript:void(0);" class="text-dark-gray">Privacy Policy</a>
                </div>
                <!-- end copyright -->
            </div>
        </div>
    </div>
</footer>
