@extends('layout')
@section('meta-title')
    Autoridades | Servicio Departamental de Salud Potosí
@endsection
@section('content')
    <div id="page-banner-area" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>Autoridades</h2>
                <a href="{{ route('pages.index') }}"><i class="lni-home"></i> Inicio</a>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Institución</span>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Autoridades</span>
            </div>
        </div>
    </div>


    <section id="team" class="section-padding text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">

                    <div class="team-item text-center">
                        <div class="team-img">
                            <img class="img-fluid" src="{{ asset('assets/img/autoridades/doc-01.jpg') }}" alt="">
                            <div class="team-overlay">
                                <div class="overlay-social-icon text-center">
                                    <ul class="social-icon-team">
                                        <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-envelope" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-whatsapp" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="info-text">
                            <h3><a href="#">Dr. David Givens</a></h3>
                            <p> DIRECTOR TÉCNICO SEDES POTOSÍ</p>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">

                    <div class="team-item text-center">
                        <div class="team-img">
                            <img class="img-fluid" src="{{ asset('assets/img/autoridades/doc-02.jpg') }}" alt="">
                            <div class="team-overlay">
                                <div class="overlay-social-icon text-center">
                                    <ul class="social-icon-team">
                                        <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-envelope" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-whatsapp" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="info-text">
                            <h3><a href="#">Dra. Katty Smith</a></h3>
                            <p>JEFE UNIDAD PLANIFICACIÓN Y PROYECTOS</p>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">

                    <div class="team-item text-center">
                        <div class="team-img">
                            <img class="img-fluid" src="{{ asset('assets/img/autoridades/doc-03.jpg') }}" alt="">
                            <div class="team-overlay">
                                <div class="overlay-social-icon text-center">
                                    <ul class="social-icon-team">
                                        <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-envelope" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-whatsapp" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="info-text">
                            <h3><a href="#">Lic. Darrell S.Allen</a></h3>
                            <p>JEFE UNIDAD ADMINISTRATIVA FINANCIERA</p>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">

                    <div class="team-item text-center">
                        <div class="team-img">
                            <img class="img-fluid" src="{{ asset('assets/img/autoridades/doc-04.jpg') }}" alt="">
                            <div class="team-overlay">
                                <div class="overlay-social-icon text-center">
                                    <ul class="social-icon-team">
                                        <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-envelope" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-whatsapp" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="info-text">
                            <h3><a href="#">Lic. Justyna Michallek</a></h3>
                            <p>JEFE UNIDAD ASESORÍA JURÍDICA</p>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">

                    <div class="team-item text-center">
                        <div class="team-img">
                            <img class="img-fluid" src="{{ asset('assets/img/autoridades/doc-05.jpg') }}" alt="">
                            <div class="team-overlay">
                                <div class="overlay-social-icon text-center">
                                    <ul class="social-icon-team">
                                        <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-envelope" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-whatsapp" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="info-text">
                            <h3><a href="#">Lic. Robert Dismall</a></h3>
                            <p>JEFE UNIDAD AUDITORIA INTERNA</p>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">

                    <div class="team-item text-center">
                        <div class="team-img">
                            <img class="img-fluid" src="{{ asset('assets/img/autoridades/doc-06.jpg') }}" alt="">
                            <div class="team-overlay">
                                <div class="overlay-social-icon text-center">
                                    <ul class="social-icon-team">
                                        <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-envelope" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-whatsapp" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="info-text">
                            <h3><a href="#">Dr. Jhon S.Allen</a></h3>
                            <p>JEFE UNIDAD REDES Y SERVICIOS DE SALUD</p>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">

                    <div class="team-item text-center">
                        <div class="team-img">
                            <img class="img-fluid" src="{{ asset('assets/img/autoridades/doc-07.jpg') }}" alt="">
                            <div class="team-overlay">
                                <div class="overlay-social-icon text-center">
                                    <ul class="social-icon-team">
                                        <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-envelope" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-whatsapp" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="info-text">
                            <h3><a href="#">Dr. Criss Michallek</a></h3>
                            <p>JEFE UNIDAD EPIDEMIOLOGÍA E INVESTIGACIÓN</p>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">

                    <div class="team-item text-center">
                        <div class="team-img">
                            <img class="img-fluid" src="{{ asset('assets/img/autoridades/doc-08.jpg') }}" alt="">
                            <div class="team-overlay">
                                <div class="overlay-social-icon text-center">
                                    <ul class="social-icon-team">
                                        <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-envelope" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-whatsapp" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="info-text">
                            <h3><a href="#">Dr. Gordon Green</a></h3>
                            <p>JEFE UNIDAD SEGUROS PÚBLICOS DE SALUD</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection