@extends('layout')
@section('meta-title')
    Auditoria | Servicio Departamental de Salud Potosí
@endsection
@section('content')
    <div id="page-banner-area" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>Auditoría Interna</h2>
                <a href="{{ route('pages.index') }}"><i class="lni-home"></i> Inicio</a>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Unidades</span>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Auditoría Interna</span>
            </div>
        </div>
    </div>


    <div id="content" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">

                    <div class="inner-box property-dsc">
                        <h2 class="desc-title">Objetivo</h2>
                        <p>Evaluar y opinar sobre el grado de cumplimiento de las Normas y Procedimientos establecidos en la Ley
                            1178 de acuerdo al Art. 15 y las disposiciones legales complementarias, evaluando los aspectos
                            presupuestarios, económicos, financieros, patrimoniales, de legalidad, de gestión, así como de sistemas,
                            procedimientos y métodos de trabajo implantados en el SEDES procurando el mejoramiento de los procesos
                            para incrementar los niveles de calidad, oportunidad y confiabilidad del sistema de administración,
                            información y control gerencial, establecido en las Normas de Auditoría Gubernamental, con independencia.
                        </p>
                    </div>

                    <div class="inner-box accordion-fp">
                        <h2 class="desc-title">Organigrama</h2>
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h3 class="accordion-heading">
                                        <button class="accordion-title" data-toggle="collapse" data-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                            Auditoria Interna
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/auditoria-org.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection