@extends('layout')
@section('meta-title')
    Contacto | Servicio Departamental de Salud Potosí
@endsection
@section('content')
    <!-- Page Banner Start -->
    <div id="page-banner-area" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>Contacto</h2>
                <a href="{{ route('pages.index') }}"><i class="lni-home"></i> Inicio</a>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Contacto</span>
            </div>
        </div>
    </div>
    <!-- Page Banner End -->

    <!-- Section Contact Start -->
    <section id="contact-section" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="contact-right-area">
                        <h2 class="title-">Contáctanos</h2>
                        <p>Si está interesado en comunicarse con nosotros,<br> Por favor póngase en contacto.</p>
                        <div class="contact-right">
                            <div class="single-contact">
                                <div class="contact-icon">
                                    <i class="lni-map-marker"></i>
                                </div>
                                <p>Calle Chayanta N° 779</p>
                            </div>
                            <div class="single-contact">
                                <div class="contact-icon">
                                    <i class="lni-envelope"></i>
                                </div>
                                <p><a href="#">sedespotosi2018@gmail.com</a></p>
                            </div>
                            <div class="single-contact">
                                <div class="contact-icon">
                                    <i class="lni-phone-handset"></i>
                                </div>
                                <p><a>(+591)26225559</a></p>
                            </div>
                        </div>
                        <div class="social-icon">
                            <a class="facebook" href="https://www.facebook.com/SEDES-Potos%C3%AD-110681273851746/" target="_blank"><i class="lni-facebook-filled"></i></a>
                            <a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
                            <a class="whatsapp" href="#"><i class="lni-whatsapp"></i></a>
                            <a class="youtube" href="https://www.youtube.com/channel/UCU4CIyscb3M0XsfgBM4zpRA" target="_blank"><i class="lni-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 form-line">

                    <h2>Ubicación</h2>
                    <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2658.048114606747!2d-65.75515158250049!3d-19.582457312975436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93f94e73c203f045%3A0x117cca1a166b910!2sSedes%20Potosi!5e0!3m2!1ses-419!2sbo!4v1574716623344!5m2!1ses-419!2sbo"
                            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

                </div>
            </div>
        </div>
    </section>
    <!-- Section Contact End -->

@endsection