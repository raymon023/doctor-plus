<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link rel="stylesheet" href="{{ asset('dependencias/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('dependencias/select2-bootstrap4.css') }}">
    <link href="{{ asset('dependencias/css/styles.css') }}" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    @livewireStyles
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="/">DrPlus</a>
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

                        <a class="nav-link collapsed active " href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon">
                                <i class="fa fa-medkit"></i>
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

                        <a class="nav-link collapsed active" href="#" data-bs-toggle="collapse" data-bs-target="#collapseAseguradora" aria-expanded="false" aria-controls="collapseAseguradora">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-user-shield"></i>
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



                        <a class="nav-link collapsed active" href="#" data-bs-toggle="collapse" data-bs-target="#collapseFacturacion" aria-expanded="false" aria-controls="collapseFacturacion">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-dollar-sign"></i>
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



                        <a class="nav-link collapsed active" href="#" data-bs-toggle="collapse" data-bs-target="#collapseEstadisticas" aria-expanded="false" aria-controls="collapseEstadisticas">
                            <div class="sb-nav-link-icon">
                                <i class="fa fa-list-alt"></i>
                            </div>
                            Estadisticas
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse active" id="collapseEstadisticas" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
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


                        <a class="nav-link collapsed active" href="#" data-bs-toggle="collapse" data-bs-target="#collapseEstadisticas" aria-expanded="false" aria-controls="collapseEstadisticas">
                            <div class="sb-nav-link-icon">
                                <i class="fa fa-clipboard"></i>
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

                        <a class="nav-link collapsed active" href="#" data-bs-toggle="collapse" data-bs-target="#collapseHistorial" aria-expanded="false" aria-controls="collapseEstadisticas">
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
                                <a class="nav-link" href="{{route('reports_date')}}">Historial de consultas</a>
                                <a class="nav-link" href="{{route('range.date')}}">Historial de consultas por fecha</a>
                                <a class="nav-link" href="">Pacientes de facturas</a>
                                <a class="nav-link" href="">Pacientes cobros</a>
                                <a class="nav-link" href="">Historial de cobros</a>
                                <a class="nav-link" href="">Historial de Evol. Diria</a>
                                <a class="nav-link" href="{{route('historial.preoperatoria')}}">Hist Eval. PreOperatoria</a>
                                <a class="nav-link" href="{{route('recetas')}}">Historial de recetas</a>
                                <a class="nav-link" href="{{route('historial_diagnosticos')}}">Historial de diagnosticos</a>

                            </nav>
                        </div>




                        <a class="nav-link collapsed active " href="#" data-toggle="collapse" data-target="#collapseConfig" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-cogs"></i></div>
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


            {{$slot}}
            @livewireScripts
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('dependencias/js/scripts.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{ asset('dependencias/select2.js') }}"></script>

    <script src="{{ asset('selector.js') }}"></script>

</body>

</html>
