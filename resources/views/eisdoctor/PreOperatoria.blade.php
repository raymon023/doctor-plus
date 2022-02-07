<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="{{ asset('dependencias/css/styles.css') }}" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
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
                        <a class="nav-link active" href="/Dashboard">
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
                                <a class="nav-link" href="{{ route('consultas.index') }}">Consultar</a>
                                <a class="nav-link" href="{{ route('citas.index') }}">Crear pacientes secretaria</a>
                                <a class="nav-link" href="">Modificar consulta servicio paciente</a>
                                <a class="nav-link" href="{{ route('pacientes.index') }}">Crear pacientes</a>
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
                                <a class="nav-link" href="{{ route('seguros.index') }}">Crear seguros</a>
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

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseHistorial" aria-expanded="false" aria-controls="collapseEstadisticas">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-columns"></i>
                            </div>
                            Historial
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="collapseHistorial" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('historial.consultas')}}">Historial de consultas</a>
                                <a class="nav-link" href="">Pacientes de facturas</a>
                                <a class="nav-link" href="">Pacientes cobros</a>
                                <a class="nav-link" href="">Historial de cobros</a>
                                <a class="nav-link" href="">Historial de Evol. Diria</a>
                                <a class="nav-link" href="">Hist Eval. PreOperatoria</a>
                                <a class="nav-link" href="{{route('recetas')}}">Historial de recetas</a>
                                <a class="nav-link" href="{{route('historial_diagnosticos')}}">Historial de diagnosticos</a>

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
                                <a class="nav-link" href="{{ route('users.index') }}">Crear usuarios</a>
                                <a class="nav-link" href="{{ route('medicos.index') }}">Crear medicos</a>
                                <a class="nav-link" href="#">Modificar privilegios de usuarios</a>
                                <a class="nav-link" href="#">Impresoras</a>

                            </nav>
                        </div>





                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Creditos</div>
                    EfrenisSoft@gmail.com
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <div class="card mx-3 mt-3">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <form action="{{route('guardar.Operatoria')}}" method="POST">

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
                                                        <p><strong>Fecha</strong><input class="form-control" type="date" style="background: rgb(251,233,233);"></p>
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
                                                                <p><strong>Servicios</strong><input class="form-control" type="text" style="width: 100%;background: rgb(251,233,233);"></p>
                                                            </div>
                                                            <div class="col">
                                                                <p><strong>Plan Terapéutico</strong><input class="form-control" type="text" style="background: rgb(251,233,233);width: 100%;"></p>
                                                            </div>
                                                        </div>
                                                        <p><strong><span style="text-decoration: underline;">ANTECEDENTES:</span></strong></p>
                                                        <div class="row">
                                                            <div class="col">

                                                                <div class="form-check"><input name="antec_angina" class="form-check-input" type="checkbox" id="formCheck-9"><label class="form-check-label" for="formCheck-9"><strong>ANGINA</strong></label></div>
                                                                <div class="form-check"><input name="antec_disnea" class="form-check-input" type="checkbox" id="formCheck-17"><label class="form-check-label" for="formCheck-9"><strong>DISNEA DE ESFUERZO</strong></label></div>
                                                                <div class="form-check"><input name="antec_ortopnea" class="form-check-input" type="checkbox" id="formCheck-16"><label class="form-check-label" for="formCheck-9"><strong>ORTOPNEA</strong></label></div>
                                                                <div class="form-check"><input name="antec_disnea_parox_noct" class="form-check-input" type="checkbox" name="antec_disnea_parox_noct" id="formCheck-15"><label class="form-check-label" for="formCheck-9"><strong>DISNEA PAROXISTICA NOCTURNA</strong></label></div>
                                                                <div class="form-check"><input class="form-check-input" type="checkbox" name="antec_palpitac" id="formCheck-14"><label class="form-check-label" for="formCheck-9"><strong>PALPITACIONES</strong></label></div>
                                                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-13"><label class="form-check-label" for="formCheck-9"><strong>IAM</strong></label></div>
                                                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-12"><label class="form-check-label" for="formCheck-9"><strong>&gt;6 MESES</strong></label></div>
                                                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-11"><label class="form-check-label" for="formCheck-9"><strong>&lt;6 MESES</strong></label></div>
                                                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-27"><label class="form-check-label" for="formCheck-9"><strong>HTA</strong></label></div>
                                                                <p><strong>EVOLUCIÓN</strong><textarea class="form-control" style="width: 100%;background: rgb(251,233,233);height: 130px;"></textarea></p>
                                                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-10"><label class="form-check-label" for="formCheck-9"><strong>TOS</strong></label></div>
                                                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-29"><label class="form-check-label" for="formCheck-9"><strong>EXPECTORACIÓN</strong><br></label></div>
                                                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-28"><label class="form-check-label" for="formCheck-9"><strong>HEMOPTISIS</strong></label></div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-18"><label class="form-check-label" for="formCheck-9"><strong>TABAQUISMO</strong><br></label></div>
                                                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-19"><label class="form-check-label" for="formCheck-9"><strong>ASMA</strong></label></div>
                                                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-20"><label class="form-check-label" for="formCheck-9"><strong>PNEUMONIA</strong></label></div>
                                                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-21"><label class="form-check-label" for="formCheck-9"><strong>TB</strong></label></div>
                                                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-22"><label class="form-check-label" for="formCheck-9"><strong>DM</strong></label></div>
                                                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-23"><label class="form-check-label" for="formCheck-9"><strong>NEFROPATIA</strong></label></div>
                                                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-24"><label class="form-check-label" for="formCheck-9"><strong>HEPATOPATIA</strong></label></div>
                                                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-25"><label class="form-check-label" for="formCheck-9"><strong>ETILISMO</strong></label></div>
                                                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-26"><label class="form-check-label" for="formCheck-9"><strong>ALERGÍA</strong><br></label></div>
                                                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-30"><label class="form-check-label" for="formCheck-9"><strong>SANGRADO FÁCIL</strong></label></div>



                                                                <p><strong>MEDICAMENTOS</strong><textarea class="form-control" style="width: 100%;background: rgb(251,233,233);height: 130px;"></textarea></p>
                                                                <p><strong>OTROS</strong><textarea class="form-control" style="width: 100%;background: rgb(251,233,233);height: 130px;"></textarea></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <p><strong><span style="text-decoration: underline;">EXPLORACIÓN</span></strong></p>
                                                        <div class="row">
                                                            <div class="col">
                                                                <p><strong>TA</strong><input class="form-control" type="text" style="width: 100%;background: rgb(251,233,233);" placeholder="mm Hg."></p>
                                                            </div>
                                                            <div class="col">
                                                                <p><strong>FC</strong><input class="form-control" type="text" style="background: rgb(251,233,233);width: 100%;" placeholder="/m"></p>
                                                            </div>
                                                            <div class="col">
                                                                <p><strong>FR</strong><input class="form-control" type="text" style="background: rgb(251,233,233);width: 100%;" placeholder="/m"></p>
                                                            </div>
                                                        </div>
                                                        <p><strong>CORAZÓN</strong><input class="form-control" type="text" style="background: rgb(251,233,233);width: 100%;"></p>
                                                        <p><strong><span style="text-decoration: underline;">CUELLO:</span></strong></p>
                                                        <div class="row">
                                                            <div class="col">
                                                                <p><strong>GLÁNDULAS TIROIDES</strong><input class="form-control" type="text" style="background: rgb(251,233,233);width: 100%;"></p>
                                                            </div>
                                                            <div class="col">
                                                                <p><strong>PULSOS</strong><input class="form-control" type="text" style="background: rgb(251,233,233);width: 100%;"></p>
                                                            </div>
                                                            <div class="col">
                                                                <p><strong>SOPLOS</strong><input class="form-control" type="text" style="background: rgb(251,233,233);width: 100%;"></p>
                                                            </div>
                                                        </div>
                                                        <p><strong>PULMONES</strong><input class="form-control" type="text" style="background: rgb(251,233,233);width: 100%;"></p>
                                                        <p><strong>ABDOMEN</strong><input class="form-control" type="text" style="background: rgb(251,233,233);width: 100%;"></p>
                                                        <p><strong>MS IS</strong><input class="form-control" type="text" style="background: rgb(251,233,233);width: 100%;"></p>
                                                        <p><strong>ECG RITMO</strong><input class="form-control" type="text" style="background: rgb(251,233,233);width: 100%;"></p>
                                                        <p><strong><span style="text-decoration: underline;">LABORATORIO</span></strong><input class="form-control" type="text" style="background: rgb(251,233,233);width: 100%;"></p>
                                                        <p><strong><span style="text-decoration: underline;">DX</span></strong><input class="form-control" type="text" style="background: rgb(251,233,233);width: 100%;"></p>
                                                        <p><strong><span style="text-decoration: underline;">COMENTARIO</span></strong><input class="form-control" type="text" style="background: rgb(251,233,233);width: 100%;"></p>
                                                        <div class="row">
                                                            <div class="col">
                                                                <p><strong><span style="text-decoration: underline;">RIESGO</span></strong><input class="form-control" type="text" style="background: rgb(251,233,233);width: 100%;"></p>
                                                            </div>
                                                            <div class="col">
                                                                <p><strong><span style="text-decoration: underline;">TX</span></strong><input class="form-control" type="text" style="background: rgb(251,233,233);width: 100%;"></p>
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

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('dependencias/js/scripts.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>

</body>

</html>
