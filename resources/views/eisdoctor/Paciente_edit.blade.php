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
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
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
                                <a class="nav-link" href="{{ route('ciudades.index') }}">Crear ciudades</a>
                                <a class="nav-link" href="{{ route('ocupaciones.index') }}">Crear Ocupaciones</a>
                                <a class="nav-link" href="{{ route('religiones.index') }}">Crear Religiones</a>
                                <a class="nav-link" href="{{ route('nacionalidades.index') }}">Crear nacionalidad</a>
                                <a class="nav-link" href="{{ route('medicamentos.index') }}">Crear Medicamentos</a>
                                <a class="nav-link" href="{{ route('enfermedades.index') }}">Crear Enfermedades</a>
                                <a class="nav-link" href="{{ route('examenes.index') }}">Crear examenes</a>
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
        <div id="layoutSidenav_content">

            <div class="card mt-4 mx-5">
                <div class="card-header">
                    <b class="text-center"> Crear pacientes</b>
                </div>


                <div class="card-body">
                    <form action="{{ route('pacientes.store') }}" method="POST">
                        @csrf
                        {!! Form::hidden('medico_id', auth()->user()->medico_id) !!}
                        <div class="form-row">
                            <div class="row">

                                <div class="form-group col-md-3 mb-3">
                                    <label for="name"><b>Nombre:</b></label>
                                    <input type="text" value="{{$paciente->nombre}}" class="form-control" name="nombre" placeholder="Ingresar nombre">

                                    @error('nombre')

                                        <small class="text-danger">{{ $message }}</small>

                                    @enderror
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="apellido"><b>Apellido:</b></label>
                                    <input type="text" class="form-control" name="apellido"
                                        placeholder="Ingresar apellido">

                                    @error('apellido')

                                        <small class="text-danger">{{ $message }}</small>

                                    @enderror
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="especialidad"><b>Cedula:</b></label>
                                    <input type="text" class="form-control" name="cedula" placeholder="Ingresar cedula">

                                    @error('cedula')
                                        <small class="text-danger">{{ $message }}</small>

                                    @enderror
                                </div>


                                <div class="form-group col-md-3">
                                    <label for="especialidad"><b>Email:</b></label>
                                    <input type="email" class="form-control" name="email" placeholder="Ingresar cedula">

                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>

                                    @enderror
                                </div>


                                <div class="form-group col-md-3">
                                    <label for="cedula"><b>Sexo:</b></label>
                                    <select name="sexo" id="" class="form-control">
                                        <option selected> Escoger</option>
                                        <option value="Mas">Mas.</option>
                                        <option value="Fem.">Fem.</option>
                                    </select>

                                    @error('sexo')

                                    <small class="text-danger">{{ $message }}</small>

                                @enderror
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="cedula"><b>Fecha nacimiento:</b></label>
                                    <input type="date" class="form-control" name="fecha_nac"
                                        placeholder="Ingresar telefono">

                                    @error('fecha_nac')

                                        <small class="text-danger">{{ $message }}</small>

                                    @enderror
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="especialidad"><b>Nacionalidad</b></label>
                                    <select name="nacionalidad_id" id="nacionalidad" class="form-control">
                                        @foreach ($nacionalidades as $nacionalidad)
                                            <option value="{{ $nacionalidad->id }}">{{ $nacionalidad->nombre }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>



                                <div class="form-group col-md-3">
                                    <label for="especialidad"><b>Estado civil:</b></label>
                                    <select name="estado_civ" id="" class="form-control">

                                        <option selected>Escoger..</option>
                                        <option>Soltero(a)</option>
                                        <option>Casado(a)</option>
                                        <option>Viudo(a)</option>
                                        <option>Union libre</option>
                                        <option>Divorciado</option>
                                    </select>
                                </div>


                                <div class="form-group col-md-3">
                                    <label for="cedula"><b>Direccion:</b></label>
                                    <input type="text" class="form-control" name="direccion"
                                        placeholder="Ingresar direccion">

                                    @error('direccion')

                                        <small class="text-danger">{{ $message }}</small>

                                    @enderror
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="especialidad"><b>Ciudad</b></label>
                                    <select name="ciudad_id" id="ciudad" class="form-control">
                                        @foreach ($ciudades as $ciudad)
                                            <option value="{{ $ciudad->id }}">{{ $ciudad->nombre }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group col-md-3">
                                    <label for="especialidad"><b>Telefono 1:</b></label>
                                    <input type="text" class="form-control" name="tel1" placeholder="Ingresar cedula">

                                    @error('tel1')
                                        <small class="text-danger">{{ $message }}</small>

                                    @enderror
                                </div>



                                <div class="form-group col-md-3">
                                    <label for="especialidad"><b>Telefono 2:</b></label>
                                    <input type="text" class="form-control" name="tel2" placeholder="Ingresar cedula">

                                    @error('tel2')
                                        <small class="text-danger">{{ $message }}</small>

                                    @enderror
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="especialidad"><b>Religion</b></label>
                                    <select name="religion_id" id="religion" class="form-control">
                                        @foreach ($religiones as $religion)
                                            <option value="{{ $religion->id }}">{{ $religion->nombre }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="especialidad"><b>Lugar trabajo</b></label>
                                    <input type="text" class="form-control" name="lugar_trabj"
                                        placeholder="Ingresar cedula">

                                    @error('lugar_trabj')
                                        <small class="text-danger">{{ $message }}</small>

                                    @enderror
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="especialidad"><b>Ocupacion</b></label>
                                    <select name="ocupacion_id" id="ocupacion" class="form-control">
                                        @foreach ($ocupaciones as $ocupacion)
                                            <option value="{{ $ocupacion->id }}">{{ $ocupacion->nombre }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="especialidad"><b>Poliza:</b></label>
                                    <input type="text" class="form-control" name="poliza" placeholder="Ingresar cedula">

                                    @error('poliza')
                                        <small class="text-danger">{{ $message }}</small>

                                    @enderror
                                </div>



                                <div class="form-group col-md-3">
                                    <label for="especialidad"><b>Tificacion:</b></label>
                                    <select name="tificacion" id="" class="form-control">

                                        <option selected>Escoger..</option>
                                        <option>A+</option>
                                        <option>A-</option>
                                        <option>B+</option>
                                        <option>B-</option>
                                        <option>O+</option>
                                        <option>O-</option>
                                    </select>
                                </div>



                                <div class="form-group col-md-3">
                                    <label for="especialidad"><b>Seguro medico</b></label>
                                    <select name="seguro_id" id="seguro" class="form-control">
                                        @foreach ($seguros as $seguro)
                                            <option value="{{ $seguro->id }}">{{ $seguro->nombre }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group col-md-4 mt-4 py-2">
                                    <a href="{{ route('pacientes.index') }}" class="btn btn-danger">Cancelar</a>
                                    <button type="submit" class="btn btn-success">Guardar</button>
                                </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>


    <script src="{{ asset('dependencias/select2.js') }}"></script>

    <script src="{{ asset('selector.js') }}"></script>
</body>

</html>
