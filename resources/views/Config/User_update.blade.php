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
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</a>
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

                        <a class="nav-link collapsed " href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-columns"></i>
                            </div>
                            EISDOCTOR
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                        data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="">Consultar</a>
                            <a class="nav-link" href="">Crear pacientes secretaria</a>
                            <a class="nav-link" href="">Modificar consulta servicio paciente</a>
                            <a class="nav-link" href="">Crear pacientes</a>
                            <a class="nav-link" href="{{route('ciudades.index')}}">Crear ciudades</a>
                            <a class="nav-link" href="{{route('ocupaciones.index')}}">Crear Ocupaciones</a>
                            <a class="nav-link" href="{{route('religiones.index')}}">Crear Religiones</a>
                            <a class="nav-link" href="{{route('nacionalidades.index')}}">Crear nacionalidad</a>
                            <a class="nav-link" href="{{route('medicamentos.index')}}">Crear Medicamentos</a>
                            <a class="nav-link" href="{{route('enfermedades.index')}}">Crear Enfermedades</a>
                            <a class="nav-link" href="{{route('examenes.index')}}">Crear examenes</a>
                        </nav>
                    </div>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseAseguradora" aria-expanded="false"
                            aria-controls="collapseAseguradora">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-columns"></i>
                            </div>
                            Aseguradora
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="collapseAseguradora" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="">Crear seguros</a>
                                <a class="nav-link" href="">Reporte facturas por seguro</a>
                                <a class="nav-link" href="">Reporte servicios agrupados</a>
                                <a class="nav-link" href="">Generar factura aseguradora</a>

                            </nav>
                        </div>



                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseFacturacion" aria-expanded="false"
                            aria-controls="collapseFacturacion">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-columns"></i>
                            </div>
                            Facturacion
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="collapseFacturacion" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="">Crear servicios medicos</a>
                                <a class="nav-link" href="">Consulta / Reporte caja</a>
                                <a class="nav-link" href="">Consulta / Reporte facturas</a>

                            </nav>
                        </div>



                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseEstadisticas" aria-expanded="false"
                            aria-controls="collapseEstadisticas">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-columns"></i>
                            </div>
                            Estadisticas
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="collapseEstadisticas" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
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


                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseEstadisticas" aria-expanded="false"
                            aria-controls="collapseEstadisticas">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-columns"></i>
                            </div>
                            NCF
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="collapseEstadisticas" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
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




                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseConfig"
                            aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Configuracion
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>



                        <div class="collapse" id="collapseConfig" aria-labelledby="headingTwo"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-toggle="collapse"
                                    data-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Configuracion inicial
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                                    data-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="#">Datos del medico</a>
                                        <a class="nav-link" href="#">Valores iniciales del sistema</a>
                                        <a class="nav-link" href="#">Crear administradores</a>
                                    </nav>
                                </div>

                            </nav>
                        </div>

                        <div class="collapse" id="collapseConfig" aria-labelledby="headingOne"
                            data-parent="#sidenavAccordion">
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
                    EfrenisSoft
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <div class="card mx-4 mt-5">

                @if (session('eliminar') == 'ok')
                    <div class="alert alert-success" role="alert">
                        Usuario creado
                    </div>
                @endif
                <div class="card-header">
                    Crear usuarios
                </div>
                <div class="card-body">
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="row">

                                <div class="form-group col-md-4">
                                    <label for="name"><b>Pertenece A:</b></label>
                                    <select name="medico_id" id="none" class="form-select">

                                        @foreach ($medicos as $medico)
                                            <option value="{{ $medico->id }}">{{ $medico->nombre }}</option>
                                        @endforeach
                                    </select>

                                </div>

                                <div class="form-group col-md-4">
                                    <label for="apellido"><b>Nombre:</b></label>
                                    <input type="text" class="form-control" name="name">

                                    @error('name')

                                        <small class="text-danger">{{ $message }}</small>

                                    @enderror
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="especialidad"><b>Email:</b></label>
                                    <input type="text" class="form-control" name="email">

                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>

                                    @enderror
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="cedula"><b>Contraseña:</b></label>
                                    <input type="password" class="form-control" name="password">

                                    @error('password')

                                        <small class="text-danger">{{ $message }}</small>

                                    @enderror
                                </div>

                                <div class="form-group col-md-4 mt-3">
                                    <a href="{{ route('medicos.index') }}" class="btn btn-danger">Cancelar</a>
                                    <button type="submit" class="btn btn-success">Guardar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('dependencias/js/scripts.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>


    <script src="{{ asset('dependencias/select2.js') }}"></script>
    <script>
        $("#none").select2({
            theme: "bootstrap4"
        })
    </script>

</body>

</html>
