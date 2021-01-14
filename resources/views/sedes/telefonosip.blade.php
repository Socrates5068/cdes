@extends('layout')
@section('meta-title')
    Telefonos IP | Servicio Departamental de Salud Potosí
@endsection
@section('content')
    <div id="page-banner-area" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>LISTA DE DIRECTORIO TELEFÓNICO IP</h2>
                <a href="{{ route('pages.index') }}"><i class="lni-home"></i> Inicio</a>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Institución</span>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Teléfonos IP</span>
            </div>
        </div>
    </div>


    <section class="section-table tabla-fonoIP mbr-parallax-background" id="table1-z">


        <div class="mbr-overlay" style="opacity: 0.9; background-color: rgb(255, 255, 255);">
        </div>
        <div class="container container-table">


            <div class="table-wrapper">
                <div class="container">
                    <div class="row search">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <div class="dataTables_filter">
                                <label class="searchInfo mbr-fonts-style display-7">Buscar:</label>
                                <input class="form-control input-sm" disabled="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container scroll">
                    <table class="table isSearch table-bordered table-hover" cellspacing="0">
                        <thead>
                        <tr class="table-heads ">




                            <th class="head-item mbr-fonts-style display-7">
                                UNIDAD</th>
                            <th class="head-item mbr-fonts-style display-7">
                                OFICINA</th>
                            <th class="head-item mbr-fonts-style display-7">NOMBRE DE USUARIO</th>
                            <th class="head-item mbr-fonts-style display-7">
                                TELF-IP</th>
                        </tr>
                        </thead>

                        <tbody>




                        <tr>




                            <td class="body-item mbr-fonts-style display-7">DIRECCION</td>
                            <td class="body-item mbr-fonts-style display-7">Dirección</td>
                            <td class="body-item mbr-fonts-style display-7">Msc. Dr. Eddy Salguero Gomez</td>
                            <td class="body-item mbr-fonts-style display-7">2501</td>
                        </tr>
                        <tr>




                            <td class="body-item mbr-fonts-style display-7">DIRECCION</td>
                            <td class="body-item mbr-fonts-style display-7">Secretaria de Dirección</td>
                            <td class="body-item mbr-fonts-style display-7">Sria. Jaqueline Sanchez</td>
                            <td class="body-item mbr-fonts-style display-7">2500</td>
                        </tr>
                        <tr>




                            <td class="body-item mbr-fonts-style display-7">DIRECCION</td>
                            <td class="body-item mbr-fonts-style display-7">Unidad de Auditoria Interna</td>
                            <td class="body-item mbr-fonts-style display-7">Lic. Rafael Davila Diaz</td>
                            <td class="body-item mbr-fonts-style display-7">2530</td>
                        </tr>
                        <tr>




                            <td class="body-item mbr-fonts-style display-7">DIRECCION</td>
                            <td class="body-item mbr-fonts-style display-7">Unidad Asesoría Jurídica</td>
                            <td class="body-item mbr-fonts-style display-7">Abg. Lourdes Quispe</td>
                            <td class="body-item mbr-fonts-style display-7">2524</td>
                        </tr>
                        <tr>




                            <td class="body-item mbr-fonts-style display-7">UNIDAD DE PLANIFICACION</td>
                            <td class="body-item mbr-fonts-style display-7">Unidad de Planificación</td>
                            <td class="body-item mbr-fonts-style display-7">Dra. Corina Cuba Castro</td>
                            <td class="body-item mbr-fonts-style display-7">2515</td>
                        </tr>
                        <tr>




                            <td class="body-item mbr-fonts-style display-7">UNIDAD DE PLANIFICACION</td>
                            <td class="body-item mbr-fonts-style display-7">Planificación</td>
                            <td class="body-item mbr-fonts-style display-7">Lic. Victor Chavarria Laura</td>
                            <td class="body-item mbr-fonts-style display-7">2513</td>
                        </tr>
                        <tr>




                            <td class="body-item mbr-fonts-style display-7">UNIDAD DE PLANIFICACION</td>
                            <td class="body-item mbr-fonts-style display-7">Secretaria de Planificación</td>
                            <td class="body-item mbr-fonts-style display-7">Sria. Sofia Sossa</td>
                            <td class="body-item mbr-fonts-style display-7">2512</td>
                        </tr>
                        <tr>




                            <td class="body-item mbr-fonts-style display-7">UNIDAD DE PLANIFICACION</td>
                            <td class="body-item mbr-fonts-style display-7">Area Sistemas</td>
                            <td class="body-item mbr-fonts-style display-7">Ing. Ronald Quispe C.</td>
                            <td class="body-item mbr-fonts-style display-7">2529</td>
                        </tr>
                        <tr>




                            <td class="body-item mbr-fonts-style display-7">UNIDAD DE PLANIFICACION</td>
                            <td class="body-item mbr-fonts-style display-7">Area Sistemas</td>
                            <td class="body-item mbr-fonts-style display-7">Plataforma de Comunicacion</td>
                            <td class="body-item mbr-fonts-style display-7">2532</td>
                        </tr>
                        <tr>




                            <td class="body-item mbr-fonts-style display-7">UNIDAD DE PLANIFICACION</td>
                            <td class="body-item mbr-fonts-style display-7">Area Relaciones Públicas&nbsp;</td>
                            <td class="body-item mbr-fonts-style display-7">Pdta. Carlos Zarate A.</td>
                            <td class="body-item mbr-fonts-style display-7">2519</td>
                        </tr>
                        <tr>




                            <td class="body-item mbr-fonts-style display-7">UNIDAD DE PLANIFICACION</td>
                            <td class="body-item mbr-fonts-style display-7">Radio Comunicación</td>
                            <td class="body-item mbr-fonts-style display-7">Sr. Gildo Martinez Ckacka</td>
                            <td class="body-item mbr-fonts-style display-7">2516</td>
                        </tr>
                        <tr>




                            <td class="body-item mbr-fonts-style display-7">UNIDAD DE PLANIFICACION</td>
                            <td class="body-item mbr-fonts-style display-7">Area ACAP</td>
                            <td class="body-item mbr-fonts-style display-7">Dr. Carlos Aramayo Arancibia</td>
                            <td class="body-item mbr-fonts-style display-7">2518</td>
                        </tr>
                        <tr>




                            <td class="body-item mbr-fonts-style display-7">UNIDAD DE PLANIFICACION</td>
                            <td class="body-item mbr-fonts-style display-7">Area SNIS-VE</td>
                            <td class="body-item mbr-fonts-style display-7">Dr. Angel Nuñez Rivas</td>
                            <td class="body-item mbr-fonts-style display-7">2503</td>
                        </tr>
                        <tr>




                            <td class="body-item mbr-fonts-style display-7">UNIDAD DE PLANIFICACION</td>
                            <td class="body-item mbr-fonts-style display-7">Area SNIS-VE</td>
                            <td class="body-item mbr-fonts-style display-7">Tec. Carlos Ayarachi Morales</td>
                            <td class="body-item mbr-fonts-style display-7">2514</td>
                        </tr>
                        <tr>




                            <td class="body-item mbr-fonts-style display-7">UNIDAD DE PLANIFICACION</td>
                            <td class="body-item mbr-fonts-style display-7">Area SNIS-VE</td>
                            <td class="body-item mbr-fonts-style display-7">Tec. Patricia Cordova Alcoba</td>
                            <td class="body-item mbr-fonts-style display-7">2540</td>
                        </tr>
                        <tr>




                            <td class="body-item mbr-fonts-style display-7">UNIDAD ADMINISTRATIVA
                                Y
                                FINANCIERA</td>
                            <td class="body-item mbr-fonts-style display-7">Unidad Administrativa</td>
                            <td class="body-item mbr-fonts-style display-7">Lic. Ramiro Choque</td>
                            <td class="body-item mbr-fonts-style display-7">2502</td>
                        </tr>
                        <tr>




                            <td class="body-item mbr-fonts-style display-7">UNIDAD ADMINISTRATIVA
                                Y
                                FINANCIERA</td>
                            <td class="body-item mbr-fonts-style display-7">Area Recursos Humanos</td>
                            <td class="body-item mbr-fonts-style display-7">Abg. Karen Cardenas R.</td>
                            <td class="body-item mbr-fonts-style display-7">2538</td>
                        </tr>
                        <tr>




                            <td class="body-item mbr-fonts-style display-7">UNIDAD ADMINISTRATIVA
                                Y
                                FINANCIERA</td>
                            <td class="body-item mbr-fonts-style display-7">Area Contabilidad</td>
                            <td class="body-item mbr-fonts-style display-7">Lic. Cinthya Flores Escurra</td>
                            <td class="body-item mbr-fonts-style display-7">2528</td>
                        </tr>
                        <tr>




                            <td class="body-item mbr-fonts-style display-7">UNIDAD ADMINISTRATIVA
                                Y
                                FINANCIERA</td>
                            <td class="body-item mbr-fonts-style display-7">Area Habilitación</td>
                            <td class="body-item mbr-fonts-style display-7">Lic. Mery Elias Alba</td>
                            <td class="body-item mbr-fonts-style display-7">2509</td>
                        </tr>
                        <tr>




                            <td class="body-item mbr-fonts-style display-7">UNIDAD ADMINISTRATIVA
                                Y
                                FINANCIERA</td>
                            <td class="body-item mbr-fonts-style display-7">Area Administrativa</td>
                            <td class="body-item mbr-fonts-style display-7">Lic. Lilian Tanuz Gonzales</td>
                            <td class="body-item mbr-fonts-style display-7">2539</td>
                        </tr>
                        <tr>




                            <td class="body-item mbr-fonts-style display-7">UNIDAD ADMINISTRATIVA
                                Y
                                FINANCIERA</td>
                            <td class="body-item mbr-fonts-style display-7">Area de Almacenes</td>
                            <td class="body-item mbr-fonts-style display-7">Lic. Giovana Javier Balvin</td>
                            <td class="body-item mbr-fonts-style display-7">2595</td>
                        </tr>
                        <tr>




                            <td class="body-item mbr-fonts-style display-7">UNIDAD ADMINISTRATIVA
                                Y
                                FINANCIERA</td>
                            <td class="body-item mbr-fonts-style display-7">Porteria</td>
                            <td class="body-item mbr-fonts-style display-7">Sr. Hernan Choque</td>
                            <td class="body-item mbr-fonts-style display-7">2550</td>
                        </tr>
                        <tr>




                            <td class="body-item mbr-fonts-style display-7">UNIDAD REDES
                                DE SERVICIO
                                DE SALUD</td>
                            <td class="body-item mbr-fonts-style display-7">Unidad de Redes de
                                Servicio Salud</td>
                            <td class="body-item mbr-fonts-style display-7">Dra. Nelcy Bonifaz</td>
                            <td class="body-item mbr-fonts-style display-7">2511</td>
                        </tr>
                        <tr>




                            <td class="body-item mbr-fonts-style display-7">UNIDAD REDES
                                DE SERVICIO
                                DE SALUD</td>
                            <td class="body-item mbr-fonts-style display-7">Area Atención Integral
                                a la Mujer</td>
                            <td class="body-item mbr-fonts-style display-7">Dr. Carlos Davila Diaz</td>
                            <td class="body-item mbr-fonts-style display-7">2505</td>
                        </tr>
                        <tr>




                            <td class="body-item mbr-fonts-style display-7">UNIDAD REDES
                                DE SERVICIO
                                DE SALUD</td>
                            <td class="body-item mbr-fonts-style display-7">Area de Salud Oral</td>
                            <td class="body-item mbr-fonts-style display-7">Dr. Vladimir Burgoa</td>
                            <td class="body-item mbr-fonts-style display-7">2533</td>
                        </tr>
                        <tr>




                            <td class="body-item mbr-fonts-style display-7">UNIDAD REDES
                                DE SERVICIO
                                DE SALUD</td>
                            <td class="body-item mbr-fonts-style display-7">Area Farmacia</td>
                            <td class="body-item mbr-fonts-style display-7">Dra. Ninozca Salinas</td>
                            <td class="body-item mbr-fonts-style display-7">2526</td>
                        </tr>
                        <tr>




                            <td class="body-item mbr-fonts-style display-7">UNIDAD REDES
                                DE SERVICIO
                                DE SALUD</td>
                            <td class="body-item mbr-fonts-style display-7">Area AIEPI</td>
                            <td class="body-item mbr-fonts-style display-7">Dra. Karina Apaza Surculento</td>
                            <td class="body-item mbr-fonts-style display-7">2520</td>
                        </tr>
                        <tr>




                            <td class="body-item mbr-fonts-style display-7">UNIDAD EPIDEMIOLOGIA</td>
                            <td class="body-item mbr-fonts-style display-7">Unidad de Epidemiología</td>
                            <td class="body-item mbr-fonts-style display-7">Dr. Huascar Alarcon D.</td>
                            <td class="body-item mbr-fonts-style display-7">2506</td>
                        </tr>
                        <tr>




                            <td class="body-item mbr-fonts-style display-7">UNIDAD EPIDEMIOLOGIA</td>
                            <td class="body-item mbr-fonts-style display-7">Area PAI</td>
                            <td class="body-item mbr-fonts-style display-7">Dr. David Choqueticlla</td>
                            <td class="body-item mbr-fonts-style display-7">2507</td>
                        </tr>
                        <tr>




                            <td class="body-item mbr-fonts-style display-7">UNIDAD EPIDEMIOLOGIA</td>
                            <td class="body-item mbr-fonts-style display-7">Area Chagas y Vectores</td>
                            <td class="body-item mbr-fonts-style display-7">Dr. Antonio Nogales R.</td>
                            <td class="body-item mbr-fonts-style display-7">2510</td>
                        </tr>
                        <tr>




                            <td class="body-item mbr-fonts-style display-7">UNIDAD EPIDEMIOLOGIA</td>
                            <td class="body-item mbr-fonts-style display-7">Administración Chagas</td>
                            <td class="body-item mbr-fonts-style display-7">Lic. Benjo Benitez</td>
                            <td class="body-item mbr-fonts-style display-7">2534</td>
                        </tr>
                        <tr>




                            <td class="body-item mbr-fonts-style display-7">SEGUROS PUBLICOS DE SALUD</td>
                            <td class="body-item mbr-fonts-style display-7">Unidad Seguros
                                Públicos de Salud</td>
                            <td class="body-item mbr-fonts-style display-7">Dra. Rosa Medina</td>
                            <td class="body-item mbr-fonts-style display-7">2508</td>
                        </tr>
                        <tr>




                            <td class="body-item mbr-fonts-style display-7">UNIDAD PROMOCION DE LA SALUD</td>
                            <td class="body-item mbr-fonts-style display-7">Unidad Promoción de la Salud</td>
                            <td class="body-item mbr-fonts-style display-7">Dr. Adolfo Medrano</td>
                            <td class="body-item mbr-fonts-style display-7">2522</td>
                        </tr>
                        <tr>




                            <td class="body-item mbr-fonts-style display-7">UNIDAD PROMOCION DE LA SALUD</td>
                            <td class="body-item mbr-fonts-style display-7">Area Género y Violencia</td>
                            <td class="body-item mbr-fonts-style display-7">Lic. Thelma Pereyra Caceres</td>
                            <td class="body-item mbr-fonts-style display-7">2535</td>
                        </tr>
                        <tr>




                            <td class="body-item mbr-fonts-style display-7">UNIDAD PROMOCION DE LA SALUD</td>
                            <td class="body-item mbr-fonts-style display-7">Area Nutrición</td>
                            <td class="body-item mbr-fonts-style display-7">Lic. Paola Choque</td>
                            <td class="body-item mbr-fonts-style display-7">2531</td>
                        </tr>
                        <tr>




                            <td class="body-item mbr-fonts-style display-7">UNIDAD GESTION
                                DE CALIDAD Y AUDITORIA EN SALUD</td>
                            <td class="body-item mbr-fonts-style display-7">Unidad Gestión en Salud</td>
                            <td class="body-item mbr-fonts-style display-7">Dr. Edwin Jimenez</td>
                            <td class="body-item mbr-fonts-style display-7">2596</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="container table-info-container">
                    <div class="row info">
                        <div class="col-md-6">
                            <div class="dataTables_info mbr-fonts-style display-7">
                                <span class="infoBefore">Mostrando</span>
                                <span class="inactive infoRows"></span>
                                <span class="infoAfter">entradas</span>
                                <span class="infoFilteredBefore">(Total filtradas de</span>
                                <span class="inactive infoRows"></span>
                                <span class="infoFilteredAfter">)</span>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection