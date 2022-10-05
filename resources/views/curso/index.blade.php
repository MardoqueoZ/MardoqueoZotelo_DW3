@include('app')
@include('menu')

<div class="container">
    <br>
    @include('flash::message')
    <h1>Lista de Cursos</h1>
    <div class="d-flex justify-content-between">
        <div class="col-auto">
            <a class="d-flex justify-content-end" href="{{ route('cursos.create') }}">
                <button type="button" class="btn btn-primary">Nuevo</button>
            </a>
        </div>
        <div class="card-body">
            <form class="row g-2 float-end">
                <div class="col-auto">
                    <input type="search" name="buscarpor" class="form-control" placeholder="Buscar por nombre"
                        aria-label="search">
                </div>
                <div class="col-auto">
                    <button class="btn btn-success mb-2" type="submit">Buscar</button>
                </div>
            </form>
        </div>
        <br>
    </div>
    <div class="table-responsive-sm">
        <table class="table table-group-divider table-striped" id="tabla">
            <thead class="">
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Fecha de Inicio</th>
                    <th>Fecha de Finalización</th>
                    <th>Estado</th>
                    <th>Funciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($cursos as $c)
                    <tr>
                        <td>{{ $c->nombre }}</td>
                        <td>{{ $c->descripcion }}</td>
                        <td>{{ $c->fecha_inicio }}</td>
                        <td>{{ $c->fecha_fin }}</td>
                        <td>
                            @switch(true)
                                @case($c->estado == 'Proximamente')
                                    <span class="badge text-bg-primary">{{ $c->estado }}</span>
                                    @break

                                @case($c->estado == 'En proceso')
                                    <span class="badge text-bg-success">{{ $c->estado }}</span>
                                    @break

                                @case($c->estado == 'Terminado')
                                    <span class="badge text-bg-danger">{{ $c->estado }}</span>
                                    @break
                            @endswitch
                        </td>
                        <td>
                            <div class="btn-group">
                                <div class="me-2">
                                    <a href="{{ url('/cursos/' . $c->id . '/edit') }}">
                                        <input type="submit" class="btn btn-warning" value="Editar">
                                    </a>
                                </div>

                                <div class="me-2">
                                    <form action="{{ url('/cursos/' . $c->id) }}" method="POST">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <input type="submit" class="btn btn-danger"
                                            onclick="return confirm('Estas seguro')" value="Borrar">
                                    </form>
                                </div>

                                <div class="me-2">
                                    <a href="{{ route('cursos.show', $c->id) }}">
                                        <input type="submit" class="btn btn-info" value="Ver">
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="l-flex justify-content-end">
            {{ $cursos->links() }}
        </div>
    </div>
</div>