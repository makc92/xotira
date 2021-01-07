const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

/*mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');*/

mix.styles([
    'resources/assets/css/font-awesome.css',
    'resources/assets/css/themify-icons.css',
    'resources/assets/css/bootstrap.min.css',
    'resources/assets/css/swiper.min.css',
    'resources/assets/css/justified-gallery.min.css',
    'resources/assets/css/magnific-popup.css',
    'resources/assets/css/bootsnav.css',
    'resources/assets/css/animate.css',
], 'public/css/libs.css').version();

mix.styles([
    'resources/assets/css/style.css',
    'resources/assets/css/responsive.css',
], 'public/css/main.css').version();

mix.scripts([
    'resources/assets/js/jquery.js',
    'resources/assets/js/modernizr.js',
    'resources/assets/js/bootstrap.bundle.js',
    'resources/assets/js/jquery.easing.1.3.js',
    'resources/assets/js/smooth-scroll.js',
    'resources/assets/js/jquery.appear.js',
    'resources/assets/js/bootsnav.js',
    'resources/assets/js/jquery.nav.js',
    'resources/assets/js/wow.min.js',
    'resources/assets/js/page-scroll.js',
    'resources/assets/js/jquery.stellar.js',
    'resources/assets/js/jquery.magnific-popup.min.js',
    'resources/assets/js/imagesloaded.pkgd.min.js',
    'resources/assets/js/classie.js',
    'resources/assets/js/hamburger-menu.js',
    'resources/assets/js/swiper.min.js',
    'resources/assets/js/jquery.fitvids.js',
    'resources/assets/js/justified-gallery.min.js',
    'resources/assets/js/retina.min.js',
    'resources/assets/js/main.js',
], 'public/js/main.js').version();



mix.copy('resources/assets/webfonts', 'public/webfonts');
mix.copy('resources/assets/images', 'public/images');
mix.copy('resources/assets/fonts', 'public/fonts');
mix.copy('resources/assets/js/jquery.vmap.js', 'public/js/jquery.vmap.js');
mix.copy('resources/assets/js/vmap.uzbekistan.js', 'public/js/vmap.uzbekistan.js');
mix.copy('resources/assets/css/jqvmap.css', 'public/css/jqvmap.css');
mix.copy('resources/assets/css/pace.css', 'public/css/pace.css');
mix.copy('resources/assets/js/pace.js', 'public/js/pace.js');


if (mix.inProduction()) {
    mix.version();
}
