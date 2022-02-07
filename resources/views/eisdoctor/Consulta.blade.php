<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tables - SB Admin</title>
    <link rel="stylesheet" href="{{ asset('dependencias/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('dependencias/select2-bootstrap4.css') }}">
    <link href="{{ asset('dependencias/css/styles.css') }}" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">EISDoctor</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
            <i class="fas fa-bars"></i>
        </button>
        <!-- Navbar Search-->

        <!-- Navbar-->
        <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        {{ __('Salir') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link active" href="">
                            <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                            Dashboard
                        </a>

                        <a class="nav-link collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-columns"></i>
                            </div>
                            EISDOCTOR
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="">Consultar</a>
                                <a class="nav-link" href="">Crear pacientes secretaria</a>
                                <a class="nav-link" href="">Modificar consulta servicio paciente</a>
                                <a class="nav-link" href="">Crear pacientes</a>
                                <a class="nav-link" href="{{ route('ciudades.index') }}">Crear ciudades</a>
                                <a class="nav-link" href="{{ route('ocupaciones.index') }}">Crear Ocupaciones</a>
                                <a class="nav-link" href="{{ route('religiones.index') }}">Crear Religiones</a>
                                <a class="nav-link" href="{{ route('nacionalidades.index') }}">Crear nacionalidad</a>
                                <a class="nav-link" href="{{ route('medicamentos.index') }}">Crear Medicamentos</a>
                                <a class="nav-link" href="{{ route('enfermedades.index') }}">Crear Enfermedades</a>
                                <a class="nav-link" href="{{ route('examenes.index') }}">Crear examenes</a>
                            </nav>
                        </div>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseAseguradora" aria-expanded="false" aria-controls="collapseAseguradora">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-columns"></i>
                            </div>
                            Aseguradora
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="collapseAseguradora" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="">Crear seguros</a>
                                <a class="nav-link" href="">Reporte facturas por seguro</a>
                                <a class="nav-link" href="">Reporte servicios agrupados</a>
                                <a class="nav-link" href="">Generar factura aseguradora</a>

                            </nav>
                        </div>



                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseFacturacion" aria-expanded="false" aria-controls="collapseFacturacion">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-columns"></i>
                            </div>
                            Facturacion
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="collapseFacturacion" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="">Crear servicios medicos</a>
                                <a class="nav-link" href="">Consulta / Reporte caja</a>
                                <a class="nav-link" href="">Consulta / Reporte facturas</a>

                            </nav>
                        </div>



                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseEstadisticas" aria-expanded="false" aria-controls="collapseEstadisticas">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-columns"></i>
                            </div>
                            Estadisticas
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="collapseEstadisticas" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="">Pacientes por sexo</a>
                                <a class="nav-link" href="">Pacientes por edad</a>
                                <a class="nav-link" href="">Pacientes por estado civil</a>
                                <a class="nav-link" href="">Pacientes por ocupacion</a>
                                <a class="nav-link" href="">Pacientes por religion</a>
                                <a class="nav-link" href="">Pacientes por nacionalidad</a>
                                <a class="nav-link" href="">Grafico de diagnosticos</a>

                            </nav>
                        </div>


                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseEstadisticas" aria-expanded="false" aria-controls="collapseEstadisticas">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-columns"></i>
                            </div>
                            NCF
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="collapseEstadisticas" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="">Pacientes por sexo</a>
                                <a class="nav-link" href="">Pacientes por edad</a>
                                <a class="nav-link" href="">Pacientes por estado civil</a>
                                <a class="nav-link" href="">Pacientes por ocupacion</a>
                                <a class="nav-link" href="">Pacientes por religion</a>
                                <a class="nav-link" href="">Pacientes por nacionalidad</a>
                                <a class="nav-link" href="">Grafico de diagnosticos</a>

                            </nav>
                        </div>




                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseConfig" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Configuracion
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>



                        <div class="collapse" id="collapseConfig" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    Configuracion inicial
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="#">Datos del medico</a>
                                        <a class="nav-link" href="#">Valores iniciales del sistema</a>
                                        <a class="nav-link" href="#">Crear administradores</a>
                                    </nav>
                                </div>

                            </nav>
                        </div>

                        <div class="collapse" id="collapseConfig" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="#">Crear usuarios</a>
                                <a class="nav-link" href="{{ route('medicos.index') }}">Crear medicos</a>
                                <a class="nav-link" href="#">Modificar privilegios de usuarios</a>
                                <a class="nav-link" href="#">Impresoras</a>

                            </nav>
                        </div>




                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Creditos</div>
                    EfrenisSoft
                </div>
            </nav>
        </div>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"> </script>


        @if (session('save') == 'ok')
        <script>
            Swal.fire({
                position: 'top-center'
                , icon: 'success'
                , title: 'Se ha guardao la consulta correctamente'
                , showConfirmButton: false
                , timer: 2000
            })

        </script>
        @endif
        <div id="layoutSidenav_content">
            <div class="card mt-5 mx-3">

                <div class="card-body table-responsive">
                    <h4 class="mb-3">Consultas</h4>

                    <table id="dataTable" class="table table-striped table-bordered" style="width:100%">

                        <thead>
                            <tr>
                                <th scope="col">Turn</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Sexo</th>
                                <th scope="col">Tel</th>
                                <th scope="col">Cedula</th>
                                <th scope="col">Ocupacion</th>
                                <th scope="col">Prox.cita</th>
                                <th scope="col">Opciones</th>
                                <th scope="col">Mas opciones</th>


                            </tr>
                        </thead>
                        <tbody>


                            @foreach ($cons as $consulta)
                            <tr>
                                <td></td>
                                <td>{{ $consulta->pacientes->nombre }}</td>
                                <td>{{ $consulta->pacientes->sexo }}</td>
                                <td>{{ $consulta->pacientes->tel1 }}</td>
                                <td>{{ $consulta->pacientes->cedula }}</td>
                                <td>{{ $consulta->pacientes->poliza }}</td>
                                <td>{{ $consulta->fecha }}</td>
                                <td>
                                    <span class="dropdown">

                                        <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="opcion" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Opciones
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="opcion">

                                            <div>


                                                <a class="dropdown-item" href="">Referimiento</a>

                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#PreOperatoria"> Imprimir PreOperatoria</a>

                                            </div>
                                        </div>
                                    </span>

                                    <!-- Button trigger modal -->


                                    <!-- Modal -->
                                    <div class="modal fade" id="PreOperatoria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <form action="{{route('guardar.Operatoria')}}" method="POST">

                                                {!! Form::hidden('medico_id', auth()->user()->medico_id ) !!}
                                                {!! Form::hidden('paciente_id', $consulta->pacientes->id) !!}
                                                @csrf
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Valoracion medica
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="card mt-3 mx-3 mb-2">
                                                        <div class="card-header">
                                                            Crear valoracion medica
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="tab-pane" role="tabpanel" id="tab-8">
                                                                <div>

                                                                    <div class="form-group">
                                                                        <p><strong>Datos del Paciente</strong></p>
                                                                        <div class="row">
                                                                            <div class="col-6">
                                                                                <p><strong>Fecha</strong><input id="pre" name="fecha" class="form-control" type="date" style="background: rgb(251,233,233);"></p>
                                                                            </div>

                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-3 col-sm-2 col-lg-1">
                                                                                <p><strong>Codigo</strong><br><input class="form-control" value="{{$consulta->pacientes->id}}" name="codigo" type="text" style="width: 100%;background: rgb(204,203,203);"></p>
                                                                            </div>
                                                                            <div class="col-9 col-sm-10 col-lg-4">
                                                                                <p><strong>Nombre</strong><input class="form-control" value="{{$consulta->pacientes->nombre}}" name="nombre" type="text" style="width: 100%;background: rgb(204,203,203);"></p>
                                                                            </div>
                                                                            <div class="col-3 col-sm-2 col-lg-1">
                                                                                <p><strong>Sexo</strong><input class="form-control" value="{{$consulta->pacientes->sexo}}" name="sexo" type="text" style="width: 100%;background: rgb(204,203,203);"></p>
                                                                            </div>
                                                                            <div class="col-3 col-sm-2 col-lg-1">
                                                                                <p><strong>Edad</strong><input class="form-control" type="text" name="edad" style="width: 100%;background: rgb(204,203,203);"></p>
                                                                            </div>
                                                                            <div class="col">
                                                                                <p><strong>Dirección</strong><input class="form-control" value="{{$consulta->pacientes->direccion}}" name="direccion" type="text" style="width: 100%;background: rgb(204,203,203);"></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-5">
                                                                                <p><strong>DX</strong>:<input class="form-control" name="val_dx" type="text" style="width: 100%;background: rgb(251,233,233);"></p>
                                                                                <p><strong><span style="text-decoration: underline;">SÍNTOMAS-EVOLUCIÓN</span></strong></p>
                                                                                <div class="row">
                                                                                    <div class="col">
                                                                                        <p><strong>Servicios</strong><input name="val_servicio" class="form-control" type="text" style="width: 100%;background: rgb(251,233,233);"></p>
                                                                                    </div>
                                                                                    <div class="col">
                                                                                        <p><strong>Plan Terapéutico</strong><input name="plan_terapéutico" class="form-control" type="text" style="background: rgb(251,233,233);width: 100%;"></p>
                                                                                    </div>
                                                                                </div>
                                                                                <p><strong><span style="text-decoration: underline;">ANTECEDENTES:</span></strong></p>

                                                                                <div class="row">
                                                                                    <div class="col">


                                                                                        <div class="form-check"><input name="angina" class="form-check-input" type="checkbox" id="formCheck-9"><label class="form-check-label" for="formCheck-9"><strong>ANGINA</strong></label></div>
                                                                                        <div class="form-check"><input name="antec_disnea" class="form-check-input" type="checkbox" id="formCheck-17"><label class="form-check-label" for="formCheck-9"><strong>DISNEA DE ESFUERZO</strong></label></div>
                                                                                        <div class="form-check"><input name="antec_ortopnea" class="form-check-input" type="checkbox" id="formCheck-16"><label class="form-check-label" for="formCheck-9"><strong>ORTOPNEA</strong></label></div>
                                                                                        <div class="form-check"><input name="antec_disnea_parox_noct" class="form-check-input" type="checkbox" id="formCheck-15"><label class="form-check-label" for="formCheck-9"><strong>DISNEA PAROXISTICA NOCTURNA</strong></label></div>
                                                                                        <div class="form-check"><input class="form-check-input" type="checkbox" name="antec_palpitac" id="formCheck-14"><label class="form-check-label" for="formCheck-9"><strong>PALPITACIONES</strong></label></div>
                                                                                        <div class="form-check"><input name="antec_iam" class="form-check-input" type="checkbox" id="formCheck-13"><label class="form-check-label" for="formCheck-9"><strong>IAM</strong></label></div>
                                                                                        <div class="form-check"><input name="antec_mas6" class="form-check-input" type="checkbox" id="formCheck-12"><label class="form-check-label" for="formCheck-9"><strong>&gt;6 MESES</strong></label></div>
                                                                                        <div class="form-check"><input name="antec_men6" class="form-check-input" type="checkbox" id="formCheck-11"><label class="form-check-label" for="formCheck-9"><strong>&lt;6 MESES</strong></label></div>
                                                                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-27"><label class="form-check-label" for="formCheck-9"><strong>HTA</strong></label></div>
                                                                                        <p><strong>EVOLUCIÓN</strong><textarea name="antec_evol" class="form-control" style="width: 100%;background: rgb(251,233,233);height: 130px;"></textarea></p>
                                                                                        <div class="form-check"><input name="antec_tos" class="form-check-input" type="checkbox" id="formCheck-10"><label class="form-check-label" for="formCheck-9"><strong>TOS</strong></label></div>
                                                                                        <div class="form-check"><input name="antec_excpetor" class="form-check-input" type="checkbox" id="formCheck-29"><label class="form-check-label" for="formCheck-9"><strong>EXPECTORACIÓN</strong><br></label></div>
                                                                                        <div class="form-check"><input name="antec_hemotpisis" class="form-check-input" type="checkbox" id="formCheck-28"><label class="form-check-label" for="formCheck-9"><strong>HEMOPTISIS</strong></label></div>
                                                                                    </div>

                                                                                    <div class="col">
                                                                                        <div class="form-check"><input name="antec_tabaquismo" class="form-check-input" type="checkbox" id="formCheck-18"><label class="form-check-label" for="formCheck-9"><strong>TABAQUISMO</strong><br></label></div>
                                                                                        <div class="form-check"><input name="antec_asma" class="form-check-input" type="checkbox" id="formCheck-19"><label class="form-check-label" for="formCheck-9"><strong>ASMA</strong></label></div>
                                                                                        <div class="form-check"><input name="antec_neumonia" class="form-check-input" type="checkbox" id="formCheck-20"><label class="form-check-label" for="formCheck-9"><strong>PNEUMONIA</strong></label></div>
                                                                                        <div class="form-check"><input name="antec_tb" class="form-check-input" type="checkbox" id="formCheck-21"><label class="form-check-label" for="formCheck-9"><strong>TB</strong></label></div>
                                                                                        <div class="form-check"><input name="antec_dm" class="form-check-input" type="checkbox" id="formCheck-22"><label class="form-check-label" for="formCheck-9"><strong>DM</strong></label></div>
                                                                                        <div class="form-check"><input name="antec_nefropatia" class="form-check-input" type="checkbox" id="formCheck-23"><label class="form-check-label" for="formCheck-9"><strong>NEFROPATIA</strong></label></div>
                                                                                        <div class="form-check"><input name="antec_hepatopia" class="form-check-input" type="checkbox" id="formCheck-24"><label class="form-check-label" for="formCheck-9"><strong>HEPATOPATIA</strong></label></div>
                                                                                        <div class="form-check"><input name="antec_etilismo" class="form-check-input" type="checkbox" id="formCheck-25"><label class="form-check-label" for="formCheck-9"><strong>ETILISMO</strong></label></div>
                                                                                        <div class="form-check"><input name="antec_alergia" class="form-check-input" type="checkbox" id="formCheck-26"><label class="form-check-label" for="formCheck-9"><strong>ALERGÍA</strong><br></label></div>
                                                                                        <div class="form-check"><input name="antec_sangrado" class="form-check-input" type="checkbox" id="formCheck-30"><label class="form-check-label" for="formCheck-9"><strong>SANGRADO FÁCIL</strong></label></div>



                                                                                        <p><strong>MEDICAMENTOS</strong><textarea name="antec_medicamento" class="form-control" style="width: 100%;background: rgb(251,233,233);height: 130px;"></textarea></p>
                                                                                        <p><strong>OTROS</strong><textarea name="antec_otros" class="form-control" style="width: 100%;background: rgb(251,233,233);height: 130px;"></textarea></p>
                                                                                    </div>


                                                                                </div>
                                                                            </div>
                                                                            <div class="col">
                                                                                <p><strong><span style="text-decoration: underline;">EXPLORACIÓN</span></strong></p>
                                                                                <div class="row">
                                                                                    <div class="col">
                                                                                        <p><strong>TA</strong><input name="expl_ta" class="form-control" type="text" style="width: 100%;background: rgb(251,233,233);" placeholder="mm Hg."></p>
                                                                                    </div>
                                                                                    <div class="col">
                                                                                        <p><strong>FC</strong><input name="expl_fc" class="form-control" type="text" style="background: rgb(251,233,233);width: 100%;" placeholder="/m"></p>
                                                                                    </div>
                                                                                    <div class="col">
                                                                                        <p><strong>FR</strong><input name="expl_fr" class="form-control" type="text" style="background: rgb(251,233,233);width: 100%;" placeholder="/m"></p>
                                                                                    </div>
                                                                                </div>
                                                                                <p><strong>CORAZÓN</strong><input name="expl_corazon" class="form-control" type="text" style="background: rgb(251,233,233);width: 100%;"></p>
                                                                                <p><strong><span style="text-decoration: underline;">CUELLO:</span></strong></p>
                                                                                <div class="row">
                                                                                    <div class="col">
                                                                                        <p><strong>GLÁNDULAS TIROIDES</strong><input name="expl_gland_tiroide" class="form-control" type="text" style="background: rgb(251,233,233);width: 100%;"></p>
                                                                                    </div>
                                                                                    <div class="col">
                                                                                        <p><strong>PULSOS</strong><input name="expl_pulsos" class="form-control" type="text" style="background: rgb(251,233,233);width: 100%;"></p>
                                                                                    </div>
                                                                                    <div class="col">
                                                                                        <p><strong>SOPLOS</strong><input name="expl_soplos" class="form-control" type="text" style="background: rgb(251,233,233);width: 100%;"></p>
                                                                                    </div>
                                                                                </div>
                                                                                <p><strong>PULMONES</strong><input name="expl_pulmones" class="form-control" type="text" style="background: rgb(251,233,233);width: 100%;"></p>
                                                                                <p><strong>ABDOMEN</strong><input name="expl_abdomen" class="form-control" type="text" style="background: rgb(251,233,233);width: 100%;"></p>
                                                                                <p><strong>MS IS</strong><input class="form-control" name="expl_ms_is" type="text" style="background: rgb(251,233,233);width: 100%;"></p>
                                                                                <p><strong>ECG RITMO</strong><input name="expl_ecg_ritmo" class="form-control" type="text" style="background: rgb(251,233,233);width: 100%;"></p>
                                                                                <p><strong><span style="text-decoration: underline;">LABORATORIO</span></strong><input name="laboratorio" class="form-control" type="text" style="background: rgb(251,233,233);width: 100%;"></p>
                                                                                <p><strong><span style="text-decoration: underline;">DX</span></strong><input name="dx" class="form-control" type="text" style="background: rgb(251,233,233);width: 100%;"></p>
                                                                                <p><strong><span style="text-decoration: underline;">COMENTARIO</span></strong><input name="diag_comentario" class="form-control" type="text" style="background: rgb(251,233,233);width: 100%;"></p>
                                                                                <div class="row">
                                                                                    <div class="col">
                                                                                        <p><strong><span style="text-decoration: underline;">RIESGO</span></strong><input name="diag_riesgo" class="form-control" type="text" style="background: rgb(251,233,233);width: 100%;"></p>
                                                                                    </div>
                                                                                    <div class="col">
                                                                                        <p><strong><span style="text-decoration: underline;">TX</span></strong><input name="tx" class="form-control" type="text" style="background: rgb(251,233,233);width: 100%;"></p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                        <button type="submit" class="btn btn-success">Guardar</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>





                                </td>


                                <td>


                                    <span class="dropdown">
                                        <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Mas opciones
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                            <div>

                                                <a class="dropdown-item" href="{{ route('consultas.create', ['paciente_id' => $consulta->pacientes->id, 'turno_id' => $consulta->id]) }}">Consultar</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#createciudad{{ $consulta->pacientes->id }}">Indicar
                                                    analisis</a>

                                                <a class="dropdown-item" data-toggle="modal" data-target="#diagnostico{{ $consulta->pacientes->id }}">Indicar
                                                    diagnostico</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#tratamiento{{ $consulta->pacientes->id }}">Indicar
                                                    tratamiento</a>

                                            </div>
                                        </div>
                                    </span>




                                    {{-- Modal analisis --}}
                                    <div class="modal fade" id="createciudad{{ $consulta->pacientes->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <form action="{{ route('analisis.store') }}" method="POST">
                                                {!! Form::hidden('medico_id', auth()->user()->medico_id) !!}

                                                <input type="hidden" name="paciente_id" id="" value="{{ $consulta->pacientes->id }}">
                                                @csrf
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Crear
                                                            analisis</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="card mt-3 mx-3 mb-2">
                                                        <div class="card-header">
                                                            Indicar analisis
                                                        </div>
                                                        <div class="card-body">

                                                            <div class="form-row">

                                                                <div class="form-group col-md-6">
                                                                    <label for="apellido"><b>Nombre</b></label>
                                                                    <input type="text" class="form-control" name="nombre" placeholder="Nombre del analisis">

                                                                </div>


                                                                <div class="form-group col-md-6">
                                                                    <label for="apellido"><b>Fecha</b></label>
                                                                    <input type="date" class="form-control" id="fechaActual" name="fecha">

                                                                </div>

                                                                <div class="form-group col-md-12 mt-3">
                                                                    <div class="form-floating">
                                                                        <label for="floatingTextarea" class="form-label"><b>Observacion</b></label>
                                                                        <textarea class="form-control" name="observacion" placeholder="Observacion" id="motivo" style="height:150px" style="resize: none"></textarea>

                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                        <button type="submit" class="btn btn-success">Guardar</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    {{-- End modal analisis --}}




                                    {{-- modal diagnostico --}}

                                    <div class="modal fade" id="diagnostico{{ $consulta->pacientes->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <form action="{{ route('diagnosticos.store') }}" method="POST">
                                                {!! Form::hidden('medico_id', auth()->user()->medico_id) !!}

                                                <input type="hidden" name="paciente_id" id="" value="{{ $consulta->pacientes->id }}">
                                                @csrf
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Crear
                                                            diagnostico</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="card mt-3 mx-3 mb-2">
                                                        <div class="card-header">
                                                            Indicar diagnostico
                                                        </div>
                                                        <div class="card-body">

                                                            <div class="form-row">

                                                                <div class="form-group col-md-12">
                                                                    <label for="apellido"><b>Nombre</b></label>
                                                                    <input type="text" class="form-control" name="nombre" placeholder="Nombre del diagnostico">

                                                                </div>


                                                                <div class="form-group col-md-12 mt-3">
                                                                    <div class="form-floating">
                                                                        <label for="floatingTextarea" class="form-label"><b>Historia
                                                                                clinica</b></label>
                                                                        <textarea class="form-control" name="hist_clinica" placeholder="Historia clinica" id="motivo" style="height:150px" style="resize: none"></textarea>

                                                                    </div>
                                                                </div>

                                                                <div class="form-group col-md-12 mt-3">
                                                                    <div class="form-floating">
                                                                        <label for="floatingTextarea" class="form-label"><b>Diagnostico a
                                                                                investigar</b></label>
                                                                        <textarea class="form-control" name="diagnostico" placeholder="Diagnostico a investigar" id="motivo" style="height:150px" style="resize: none"></textarea>

                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                        <button type="submit" class="btn btn-success">Guardar</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    {{-- End modal diagnostico --}}




                                    {{-- Modal tratamiento --}}

                                    <div class="modal fade" id="tratamiento{{ $consulta->pacientes->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <form action="{{ route('recetas.store') }}" method="POST">
                                                {!! Form::hidden('medico_id', auth()->user()->medico_id) !!}
                                                <input type="hidden" name="paciente_id" id="" value="{{ $consulta->pacientes->id }}">
                                                @csrf
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Crear
                                                            receta</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="card mt-3 mx-3 mb-2">
                                                        <div class="card-header">
                                                            Indicar receta
                                                        </div>
                                                        <div class="card-body">

                                                            <div class="form-row">

                                                                <div class="form-group col-md-6">
                                                                    <label for="apellido"><b>Medicamento1</b></label>
                                                                    <select name="medicamento1" id="medicamento" class="form-control medicamento1" onchange="changeMedicamento(this)">
                                                                        <option selected>-- Selecionar --</option>
                                                                        @foreach ($medicamentos as $medicamento)
                                                                        <option data-descripcion="{{ $medicamento->descripcion }}" data-tiempo_uso="{{ $medicamento->tiempo_uso }}">
                                                                            {{ $medicamento->nombre }}
                                                                        </option>
                                                                        @endforeach
                                                                    </select>

                                                                    <label for=""><b>Descripcion</b></label>
                                                                    <input class="form-control" type="text" name="descripcion1" id="descripcion1">

                                                                    <label for=""><b>Tiempo de uso</b></label>
                                                                    <input class="form-control" type="text" id="tiempo_uso1" name="tiempo_uso1">
                                                                </div>

                                                                <div class="form-group col-md-6">
                                                                    <label for="apellido"><b>Medicamento2</b></label>
                                                                    <select name="medicamento2" id="medicamento2" class="form-control medicamento1" onchange="changeMedicamento2(this)">
                                                                        <option selected>-- Selecionar --</option>
                                                                        @foreach ($medicamentos as $medicamento)
                                                                        <option data-descripcion="{{ $medicamento->descripcion }}" data-tiempo_uso="{{ $medicamento->tiempo_uso }}">
                                                                            {{ $medicamento->nombre }}
                                                                        </option>
                                                                        @endforeach
                                                                    </select>

                                                                    <label for=""><b>Descripcion </b></label>
                                                                    <input class="form-control" type="text" name="descripcion2" id="descripcion2">

                                                                    <label for=""><b>Tiempo de uso</b></label>
                                                                    <input class="form-control" type="text" name="tiempo_uso2" id="tiempo_uso2">
                                                                </div>


                                                                <div class="form-group col-md">
                                                                    <label for="apellido"><b>Medicamento
                                                                            3</b></label>
                                                                    <select name="medicamento3" id="medicamento3" class="form-control medicamento1" onchange="changeMedicamento3(this)">
                                                                        <option selected>-- Selecionar --</option>
                                                                        @foreach ($medicamentos as $medicamento)
                                                                        <option data-descripcion="{{ $medicamento->descripcion }}" data-tiempo_uso="{{ $medicamento->tiempo_uso }}">
                                                                            {{ $medicamento->nombre }}
                                                                        </option>
                                                                        @endforeach
                                                                    </select>

                                                                    <label for=""><b>Descripcion</b></label>
                                                                    <input class="form-control" type="text" name="descripcion3" id="descripcion3">

                                                                    <label for=""><b>Tiempo de uso</b></label>
                                                                    <input class="form-control" type="text" name="tiempo_uso3" id="tiempo_uso3">
                                                                </div>


                                                                <div class="form-group col-md">
                                                                    <label for="apellido"><b>Medicamento
                                                                            4</b></label>
                                                                    <select name="medicamento4" id="medicamento4" class="form-control medicamento1" onchange="changeMedicamento4(this)">
                                                                        <option selected>-- Selecionar --</option>
                                                                        @foreach ($medicamentos as $medicamento)
                                                                        <option data-descripcion="{{ $medicamento->descripcion }}" data-tiempo_uso="{{ $medicamento->tiempo_uso }}">
                                                                            {{ $medicamento->nombre }}
                                                                        </option>
                                                                        @endforeach
                                                                    </select>

                                                                    <label for=""><b>Descripcion</b></label>
                                                                    <input class="form-control" type="text" name="descripcion4" id="descripcion4">

                                                                    <label for=""><b>Tiempo de uso</b></label>
                                                                    <input class="form-control" type="text" name="tiempo_uso4" id="tiempo_uso4">
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="reset" id="reset" onclick="reset()" class=" btn btn-secondary"> Resetear</button>
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                        <button type="submit" class="btn btn-success">Guardar</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    {{-- End modal tratamiento --}}

                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

            @if (session('eliminar') == 'ok')
            <script>
                Swal.fire(
                    'Eliminado!', 'El medico ha sido eliminado.', 'success'
                )

            </script>
            @endif

            <script>
                function archiveRemove(any) {
                    var click = $(any);
                    var id = click.attr("id");
                    Swal.fire({
                        title: 'Estas seguro que quieres elimnarlo?'
                        , text: "No se podran revertir los cambios!"
                        , icon: 'warning'
                        , showCancelButton: true
                        , confirmButtonColor: '#3085d6'
                        , cancelButtonColor: '#d33'
                        , confirmButtonText: 'Si borrar!'
                        , cancelButtonText: 'Cancelar!'
                    }).then((result) => {
                        if (result.value) {
                            $('a[id="' + id + '"]').parents(".archiveItem").submit();
                        } else {

                        }
                    });
                }

            </script>



        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('demo/datatables-demo.js') }}"></script>
    <script src="{{ asset('dependencias/js/scripts.js') }}"></script>

    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>



    <script src="{{ asset('dependencias/select2.js') }}"></script>

    <script>
        $("#medicamento").select2({
            theme: "bootstrap4"

        });

        $("#medicamento2").select2({
            theme: "bootstrap4"

        });

        $("#medicamento3").select2({
            theme: "bootstrap4"

        });


        $("#medicamento4").select2({
            theme: "bootstrap4"

        });



        function changeMedicamento(el) { // recibimos por parametro el elemento select
            // obtenemos la opción seleccionada .
            var descripcion1 = $('option:selected', el).attr('data-descripcion');
            $("#descripcion1") /* <---- ahi va el nombre del id de tu input, al que le quieres asignar este valor ---> */
                .val(descripcion1);
            //console.log(descripcion1);

            var tiempo_uso1 = $('option:selected', el).attr('data-tiempo_uso');
            $("#tiempo_uso1") /* <---- ahi va el nombre del id de tu input, al que le quieres asignar este valor ---> */
                .val(tiempo_uso1);
            //console.log(tiempo_uso1);

        }


        function changeMedicamento2(el) { // recibimos por parametro el elemento select
            // obtenemos la opción seleccionada .
            var descripcion2 = $('option:selected', el).attr('data-descripcion');
            $("#descripcion2") /* <---- ahi va el nombre del id de tu input, al que le quieres asignar este valor ---> */
                .val(descripcion2);
            //console.log(descripcion1);

            var tiempo_uso2 = $('option:selected', el).attr('data-tiempo_uso');
            $("#tiempo_uso2") /* <---- ahi va el nombre del id de tu input, al que le quieres asignar este valor ---> */
                .val(tiempo_uso2);
            //console.log(tiempo_uso1);

        }

        function changeMedicamento3(el) { // recibimos por parametro el elemento select
            // obtenemos la opción seleccionada .
            var descripcion3 = $('option:selected', el).attr('data-descripcion');
            $("#descripcion3") /* <---- ahi va el nombre del id de tu input, al que le quieres asignar este valor ---> */
                .val(descripcion3);
            //console.log(descripcion1);

            var tiempo_uso3 = $('option:selected', el).attr('data-tiempo_uso');
            $("#tiempo_uso3") /* <---- ahi va el nombre del id de tu input, al que le quieres asignar este valor ---> */
                .val(tiempo_uso3);
            //console.log(tiempo_uso1);

        }


        function changeMedicamento4(el) { // recibimos por parametro el elemento select
            // obtenemos la opción seleccionada .
            var descripcion4 = $('option:selected', el).attr('data-descripcion');
            $("#descripcion4") /* <---- ahi va el nombre del id de tu input, al que le quieres asignar este valor ---> */
                .val(descripcion4);
            //console.log(descripcion1);

            var tiempo_uso4 = $('option:selected', el).attr('data-tiempo_uso');
            $("#tiempo_uso4") /* <---- ahi va el nombre del id de tu input, al que le quieres asignar este valor ---> */
                .val(tiempo_uso4);
            //console.log(tiempo_uso1);

        }

    </script>

    <script>
        window.onload = function() {
            var fecha = new Date(); //Fecha actual
            var mes = fecha.getMonth() + 1; //obteniendo mes
            var dia = fecha.getDate(); //obteniendo dia
            var ano = fecha.getFullYear(); //obteniendo año
            if (dia < 10)
                dia = '0' + dia; //agrega cero si el menor de 10
            if (mes < 10)
                mes = '0' + mes //agrega cero si el menor de 10
            document.getElementById('fechaActual').value = ano + "-" + mes + "-" + dia;
        }

    </script>

    <script>
        window.onload = function() {
            var fecha = new Date(); //Fecha actual
            var mes = fecha.getMonth() + 1; //obteniendo mes
            var dia = fecha.getDate(); //obteniendo dia
            var ano = fecha.getFullYear(); //obteniendo año
            if (dia < 10)
                dia = '0' + dia; //agrega cero si el menor de 10
            if (mes < 10)
                mes = '0' + mes //agrega cero si el menor de 10
            document.getElementById('pre').value = ano + "-" + mes + "-" + dia;
        }

    </script>


    <style>
        textarea {

            resize: none;
        }

    </style>



</body>

</html>
