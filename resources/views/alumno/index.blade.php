<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<div class="container">
    <h1>Lista de Alumnos</h1>
    <a class="pull-right" href="{{route('alumnos.create')}}">
        <button type="button" class="btn btn-primary">Nuevo</button>
    </a><br>
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
                            <input type="submit" class="btn " value="Editar">
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
                    
                    <td><a href=""></a></td>
                </tr>
                @endforeach
            </tbody>

        </table>
        <div class="l-flex justify-content-end">
            {{ $alumnos -> links() }}

        </div>
    </div>

</div>

