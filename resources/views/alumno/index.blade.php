@include('app')
@include('menu')

<div class="container">
    <br>
    @include('flash::message')
    <h1>Lista de Alumnos</h1>
    <div class="d-flex justify-content-between">
        <div class="col-auto">
            <a class="d-flex justify-content-end" href="{{ route('alumnos.create') }}">
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
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>CI</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>Gmail</th>
                    <th>Pofesión</th>
                    <th>Genero</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Curso</th>
                    <th>Funciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($alumnos as $a)
                    <tr>
                        <td>{{ $a->nombre }}</td>
                        <td>{{ $a->apellido }}</td>
                        <td>{{ $a->edad }}</td>
                        <td>{{ $a->ci }}</td>
                        <td>{{ $a->telefono }}</td>
                        <td>{{ $a->direccion }}</td>
                        <td>{{ $a->gmail }}</td>
                        <td>{{ $a->profesion }}</td>
                        <td>{{ $a->genero }}</td>
                        <td>{{ $a->fecha_de_nacimiento }}</td>
                        <td>{{ $a->cursos->nombre }}</td>  
                        <td>
                            <div class="btn-group">
                                <div class="me-2">
                                    <a href="{{ url('/alumnos/' . $a->id . '/edit') }}">
                                        <input type="submit" class="btn btn-warning" value="Editar">
                                    </a>
                                </div>

                                <div class="me-2">
                                    <form action="{{ url('/alumnos/' . $a->id) }}" method="POST">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <input type="submit" class="btn btn-danger"
                                            onclick="return confirm('Estas seguro')" value="Borrar">
                                    </form>
                                </div>

                                <div class="me-2">
                                    <a href="{{ route('alumnos.show', $a->id) }}">
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
            {{ $alumnos->links() }}
        </div>
    </div>
</div>