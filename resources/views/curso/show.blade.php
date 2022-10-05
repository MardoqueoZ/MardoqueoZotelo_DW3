@include('app')
@include('menu')

<div class="container">
    <h1>Detalle del Curso</h1>
    <br>
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $cursos->nombre }}" disabled="true">
    <br>

    <label for="descripcion">Descripcion</label>
    <input type="text" class="form-control" name="descripcion" id="descripcion" value="{{ $cursos->descripcion }}"disabled="true">
    <br>

    <label for="fecha_inicio">Fecha de inicio</label>
    <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" value="{{ $cursos->fecha_inicio }}"disabled="true">
    <br>

    <label for="fecha_fin">Fecha de finalizacion</label>
    <input type="date" class="form-control" name="fecha_fin" id="fecha_fin" value="{{ $cursos->fecha_fin }}"disabled="true">
    <br>

    <label for="estado">Estado</label>
    <input type="text" class="form-control" name="estado" id="estado" value="{{ $cursos->estado }}"disabled="true">
    <br>

    <div class="d-flex justify-content-between">
        <a href="{{ route('cursos.index') }}">
            <button type="button" class="btn btn-danger">Cancelar</button>
        </a>
    </div>
</div>