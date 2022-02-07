<div>
    <div class="card mt-5 mx-3">

        <div class="card-body table-responsive">
            <h4 class="mb-3">Reportes por fecha</h4>

            <div class="row form-inline mb-3">
                <label for="">Desde</label>
                <input class="form-control mr-3" type="date" wire:model.lazy="fromDate">


                <label for="">Hasta</label>
                <input class="form-control mr-3" type="date" wire:model.lazy="toDate">

                <button wire:click.prevent="consultar" class="btn btn-success" type="button">Consultar</button>

            </div>

            <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">Cons no</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Seguro</th>
                        <th scope="col">Poliza</th>
                        <th scope="col">Imprimir</th>

                    </tr>
                </thead>

                <tbody>

                    @foreach ($consultas as $consulta)

                    <tr>
                        <td>{{ $consulta->id }} </td>
                        <td>{{ $consulta->fecha }}</td>
                        <td>{{ $consulta->pacientes->full_name }}</td>
                        <td></td>
                        <td>{{ $consulta->pacientes->direccion }}</td>
                        <td></td>
                        <td>{{ $consulta->pacientes->poliza }}</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="{{ route('consulta.pdf', ['consulta' => $consulta]) }}">Imprimir</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

</div>
