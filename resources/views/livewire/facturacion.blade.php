<div>

    <div class="container-fluid mt-3">
        <h4 class="text'center">Facturar servicios</h4>
        <div class="card mt-2 mx-2">

            <div class="card-body">
                <form action={{ route('referimiento.store') }} method="POST">
                    @csrf
                    {!! Form::hidden('medico_id', auth()->user()->medico_id) !!}
                    <div class="form-row">
                        <div class="row">

                            <div class="form-group col-md-6 mb-3">
                                <label for="name"><b>Selecionar paciente:</b></label>
                                <select name="paciente_id" id="pacienteF" class="form-control"
                                    onchange="datospaciente(this)">
                                    <option value="null" selected default>--Selecionar--</option>
                                    @foreach ($pacientes as $p)
                                        <option value="{{ $p->id }}" data-nombre="{{ $p->full_name }}"
                                            data-sexo="{{ $p->sexo }}">
                                            {{ $p->full_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group col-md-4">
                                <label for="apellido"><b>Fecha factura:</b></label>
                                <input id="nombre" type="date" class="form-control" name="nombre"
                                    placeholder="Ingresar nombre">
                                @error('nombre')
                                    <small class="text-danger">{{ $message }}</small>

                                @enderror

                            </div>



                            <div class="form-group col-md-2">
                                <label for="especialidad"><b>Condicion:</b></label>
                                <input id="edad" type="number" class="form-control" name="edad" placeholder="Edad">

                                @error('edad')
                                    <small class="text-danger">{{ $message }}</small>

                                @enderror
                            </div>


                            <div class="form-group col-md-4">
                                <label for="especialidad"><b>Cedula:</b></label>
                                <input id="sexo" type="text" class="form-control" name="referido"
                                    placeholder="Referido A:">

                                @error('referido')
                                    <small class="text-danger">{{ $message }}</small>

                                @enderror
                            </div>


                            <div class="form-group col-md-2">
                                <label for="especialidad"><b>Edad:</b></label>
                                <input id="sexo" type="text" class="form-control" name="referido"
                                    placeholder="Referido A:">

                                @error('referido')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>



                            <div class="form-group col-md-6 mt-1">
                                <label for="especialidad"><b>Imprimir NCF:</b></label>
                                <select name="" id="" class="form-control">
                                    <option value="null" disabled selected>--Elegir--</option>
                                    @foreach ($tiponcf as $item)
                                        <option value="{{ $item->id }}">{{ $item->nombre_ncf }}</option>
                                    @endforeach

                                </select>
                            </div>


                            <div class="form-group col-md-3 mt-1">
                                <label for="especialidad"><b>Nombre del servicio</b></label>
                                <select name="" id="" class="form-control">
                                    <option value="null" disabled selected>--Elegir--</option>
                                    <option value="0">Facturas de credito fiscal</option>
                                </select>
                            </div>

                            <div class="form-group col-md-3 mt-1">
                                <label for=""><b>Precio</b></label>
                                <input type="text" name="" id="" class="form-control">
                            </div>
                            <div class="form-group col-md-3 mt-1">
                                <label for=""><b>Val.precio</b></label>
                                <input type="text" name="" id="" class="form-control">
                            </div>

                            <div class="form-group col-md-3 mt-1">
                                <label for=""><b>Importe</b></label>
                                <input type="text" name="" id="" class="form-control">
                            </div>


                            <div class="form-group col-md-4 mt-4 py-2">
                                <a href="{{ route('dashboard') }}" class="btn btn-danger">Guardar a credito</a>
                                <button type="submit" class="btn btn-success">Guardar al contado</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

</div>
