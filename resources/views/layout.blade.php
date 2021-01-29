<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/ico" href="{{ asset('images/icono.ico') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        @yield('meta-title', '| SEDES')
    </title>
    @yield('metas')
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="description" content="@yield('meta-description')">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <!-- CSS FILES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/line-icons.css') }}">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slicknav.css') }}">
    <!-- Range Slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ion.rangeSlider.css') }}">
    <!-- Range Slider  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ion.rangeSlider.skinFlat.css') }}">
    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/nivo-lightbox.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/default/default.css') }}">
    <!-- Lightbox -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/lightbox.min.css') }}">
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <!-- Owl carousel -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">
    <!-- Rav Slider -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/extras/layers.css') }}">-->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/extras/navigation.css') }}">-->
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
    <!-- Photoswipe Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/photoswipe.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/default-skin/default-skin.css') }}">
    <!-- Data Tables -->
    <link rel="stylesheet" href="{{ asset('assets/datatables/data-tables.bootstrap4.min.css') }}">
    <!-- Link Swiper's CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/swipersedes.css') }}">

    <!-- ENDCSS FILES -->
    <!-- Icon Style -->
    <link href="{{ asset('assets/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">


    @yield('styles')
    @yield('scripts')
    <style>
        .cajaf{
            position: fixed;
            bottom: 60px;
            right: 10px;
            width: 60px;
            height: 60px;
            z-index: 100000;
            -webkit-animation: swing 2s infinite;
            animation: swing 2s infinite;
        }
        .cajaf:hover{
            height: 240px;
            -webkit-animation: none;
            animation: none;
        }
        .cajaf:hover .caja1{
            visibility: visible;
            bottom: 70px;
        }
        .cajaf:hover .caja2{
            visibility: visible;
            bottom: 140px;
        }
        .cajaf:hover .caja3{
            visibility: visible;
            bottom: 210px;
        }
        .caja2:hover:before,.caja1:hover:before,.caja3:hover:before{
            visibility: visible;
            color:#000;
        }
        .btn_roundf{
            position: absolute;
            bottom:0 ;
            right: 0;
            border:1px solid #FF1700;
            background: #FF1700;
            color:#fff;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            z-index: 90090;
            display: flex;
            align-content: center;
            justify-content: center;
            text-align: center;
            align-items: center;
            font-size: .8em;
        }
        .caja1{
            position: absolute;
            bottom: 0;
            right: 0;
            border:1px solid #1da1f2;
            background: #1da1f2;
            color: #fff;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            z-index: 90080;
            display: flex;
            align-content: center;
            justify-content: center;
            text-align: center;
            align-items: center;
            -webkit-transition: all .3s;
            visibility: hidden;
        }
        .caja2{
            position: absolute;
            bottom: 0;
            right: 0;
            border:1px solid #283593;
            background: #283593;
            color:#fff;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            z-index: 9070;
            display: flex;
            align-content: center;
            justify-content: center;
            text-align: center;
            align-items: center;
            visibility: hidden;
            -webkit-transition: all .6s;
        }
        .caja3{
            position: absolute;
            bottom: 0;
            right: 0;
            border:1px solid #f09433;
            background: #f09433;
            background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
            background: -webkit-linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%);
            background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f09433', endColorstr='#bc1888',GradientType=1 );
            color: #fff;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            z-index: 9050;
            display: flex;
            align-content: center;
            justify-content: center;
            text-align: center;
            align-items: center;
            -webkit-transition: all .9s;
            visibility: hidden;
        }
        @-webkit-keyframes swing
        {
            15%
            {
                -webkit-transform: translateX(8px);
                transform: translateX(8px);
            }
            30%
            {
                -webkit-transform: translateX(-8px);
                transform: translateX(-8px);
            }
            50%
            {
                -webkit-transform: translateX(5px);
                transform: translateX(5px);
            }
            65%
            {
                -webkit-transform: translateX(-5px);
                transform: translateX(-5px);
            }
            80%
            {
                -webkit-transform: translateX(3px);
                transform: translateX(3px);
            }
            100%
            {
                -webkit-transform: translateX(0);
                transform: translateX(0);
            }
        }
        @keyframes swing
        {
            15%
            {
                -webkit-transform: translateX(8px);
                transform: translateX(8px);
            }
            30%
            {
                -webkit-transform: translateX(-8px);
                transform: translateX(-8px);
            }
            50%
            {
                -webkit-transform: translateX(5px);
                transform: translateX(5px);
            }
            65%
            {
                -webkit-transform: translateX(-5px);
                transform: translateX(-5px);
            }
            80%
            {
                -webkit-transform: translateX(3px);
                transform: translateX(3px);
            }
            100%
            {
                -webkit-transform: translateX(0);
                transform: translateX(0);
            }
        }
    </style>
{{--    @stack('styles')--}}

</head>

<body>
    
    <div class="cajaf">
        <a href="#" class="btn_roundf" title="COVID 19" alt="corona virus">COVID-19</a>
        <a class="caja1" target="_blank" href="{{route('covid.pais')}}" alt="covid pais" title="covid pais">Por Pais</a>
    </div>

    @include('partials.header')

    @yield('banner')
    @yield('mision')
    @yield('noticias')
    @yield('unidades')
    @yield('galeria')

    @yield('content')
    @yield('noticia')

    <div class="container">
        <div class="row center-block d-flex justify-content-center">
            <main class="py-4 mt-5 col-10">
                @yield('denuncias')
            </main>
        </div>
    </div>
    @yield('listardenunciar')

    @include('partials.footer')


    <section id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12 copyright">
                    <p>Copyright © 2020 <a rel="nofollow" href="https://sedespotosi.com/">Sedes Potosí</a></p>
                </div>
            </div>
        </div>
    </section>

    <a href="#" class="back-to-top">
        <i class="lni-chevron-up"></i>
    </a>

    <div id="preloader">
        <div class="loader" id="loader-1"></div>
    </div>


    <!-- Root element of PhotoSwipe. Must have class pswp. -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">

                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" title="Salir (Esc)"></button>
                    <button class="pswp__button pswp__button--fs" title="Pantalla completa"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>

                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>

                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>

                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Root element of PhotoSwipe. Must have class pswp. -->

    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/jquery-min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mixitup.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/ion.rangeSlider.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.parallax.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('assets/js/nivo-lightbox.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>-->
    <!-- <script src="{{ asset('assets/js/contact-form-script.min.js') }}"></script>-->
    <script src="{{ asset('assets/js/smooth-scroll.polyfills.min.js') }}"></script>
    <script src="{{ asset('assets/js/scroll.js') }}"></script>
    <script src="{{ asset('assets/js/lightbox-plus-jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/photoswipe.min.js') }}"></script>
    <script src="{{ asset('assets/js/photoswipe-ui-default.min.js') }}"></script>
    <script src="{{ asset('assets/js/script-min.js') }}"></script>
    <script src="{{ asset('assets/datatables/jquery.data-tables.min.js') }}"></script>
    <script src="{{ asset('assets/datatables/data-tables.bootstrap4.min.js') }}"></script>
    <!-- Swiper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
    <script src="{{ asset('assets/js/swipersedes.js') }}"></script>
    <!-- Inicia Nivo Lightbox -->
    <script>
        $(document).ready(function(){
            $('a').nivoLightbox();
        });
    </script>

    
    
</body>

</html>