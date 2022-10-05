@include('app')
@include('menu')

<div class="container">
    <h1>Editar Cursos</h1>
    <form action="{{url('/cursos/'.$cursos->id)}}" method="post" enctype="multipart/from-data">
        @csrf
        {{method_field('PATCH')}}
        <br>
        <label for="nombre">Nombre del curso</label>
        <input type="text" class="form-control" name="nombre" id="nombre" value="{{$cursos->nombre}}">
        <br>

        <label for="descripcion">Descripcion</label>
        <input type="text" class="form-control" name="descripcion" id="descripcion" value="{{$cursos->descripcion}}">
        <br>

        <label for="fecha_inicio">Fecha de inicio</label>
        <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" value="{{$cursos->fecha_inicio}}">
        <br>

        <label for="fecha_fin">Fecha de finalizacion</label>
        <input type="date" class="form-control" name="fecha_fin" id="fecha_fin" value="{{$cursos->fecha_fin}}">
        <br>

        <label for="estado">Estado</label>
		<select class="form-select" aria-label="Default select example" name="estado" id="estado">
            <option selected>Selecione</option>
            <option value="Proximamente" {{ $cursos->estado == 'Proximamente' ? 'selected' : '' }}>Proximamente</option>
            <option value="En proceso" {{ $cursos->estado == 'En proceso' ? 'selected' : '' }}>En proceso</option>
            <option value="Finalizado" {{ $cursos->estado == 'Finalizado' ? 'selected' : '' }}>Finalizado</option>
        </select>
        <br>

        <div class="d-flex justify-content-between">
            <input type="submit" class="btn btn-primary" value="Guardar">

            <a href="{{route('alumnos.index')}}">
                <button type="button" class="btn btn-danger">Cancelar</button>
            </a>
        </div>

    </form>
</div>