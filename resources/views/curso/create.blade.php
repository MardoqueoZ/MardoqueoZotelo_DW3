@include('app')
@include('menu')

<div class="container">
    @if (count($errors) > 0)
        <br>
        <div class="alert alert-danger" role="alert">
            <u>
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </u>
        </div>
    @endif

    <h1>Crear Cursos</h1>
    <form action="{{ url('/cursos') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <br>
        <label for="nombre">Nombre del curso</label>
        <input type="text" class="form-control" name="nombre" id="nombre">
        <br>

        <label for="Apellido">Descripcion</label>
        <input type="text" class="form-control" name="descripcion" id="descripcion">
        <br>

        <label for="fecha_inicio">Fecha de inicio</label>
        <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio">
        <br>

        <label for="fecha_fin">Fecha de finalizacion</label>
        <input type="date" class="form-control" name="fecha_fin" id="fecha_fin">
        <br>

        <label for="estado">Estado</label>
        <select class="form-select" aria-label="Default select example" name="estado" id="estado">
            <option selected>Selecione</option>
            <option value="Proximamente">Proximamente</option>
            <option value="En proceso">En proceso</option>
            <option value="Finalizado">Finalizado</option>
        </select>
        <br>

        <div class="d-flex justify-content-between">
            <input type="submit" class="btn btn-primary" value="Guardar">

            <a href="{{ route('cursos.index') }}">
                <button type="button" class="btn btn-danger">Cancelar</button>
            </a>
        </div>

    </form>
</div>