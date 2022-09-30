@include('app')
@include('menu')
<div class="container">
    <h1>Lista de Alumnos</h1>
    <a class="float-left" href="{{route('alumnos.create')}}">
        <button type="button" class="btn btn-primary">Nuevo</button>
    </a>

    <div class="card-body">
        <form action="" class="form-inline float-right">
            <input type="search" name="buscarpor" class="form-control mr-g-sm-2" placeholder="Buscar por ci"
            aria-label="search">
            <button class="btn btn-success" type="submit">Buscar</button>


        </form>

    </div>
    <div class = "table-responsive-sm">
        <table class="table table-bordered" id="tabla">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>ci</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>Gmail</th>
                    <th>Profesion</th>
                    <th>Genero</th>
                    <th>Fecha de Nacimiento</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumnos as $a)
                <tr>
                    <td>{{$a->nombre}}</td>
                    <td>{{$a->apellido}}</td>
                    <td>{{$a->edad}}</td>
                    <td>{{$a->ci}}</td>
                    <td>{{$a->telefono}}</td>
                    <td>{{$a->direccion}}</td>
                    <td>{{$a->gmail}}</td>
                    <td>{{$a->profesion}}</td>
                    <td>{{$a->genero}}</td>
                    <td>{{$a->fecha_nacimiento}}</td>
                    <td>
                        <a href ="{{url('/alumnos/'.$a->id.'/edit')}}">
                            <input type="submit" class="btn btn-warning" value="Editar">
                        </a>
                            
                    </td>
                    <td>
                        <form action="{{url('/alumnos/'.$a->id)}}" method="post" enctype="multipart from-data">
                            @csrf
                            {{method_field('DELETE')}}
                            <input type="submit" class="btn btn-danger" onclick="return confirm('Estas seguro?')"
                            value="Borrar">
                        </form>
                    </td>
                    
                    <td>
                        <a href="{{route('alumnos.show', $a->id)}}">
                            <input type="button" class="btn btn-info" value="Ver">
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
        <div class="l-flex justify-content-end">
            {{ $alumnos -> links() }}

        </div>
    </div>

</div>

