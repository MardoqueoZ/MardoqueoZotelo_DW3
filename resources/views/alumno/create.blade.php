@include('app')
@include('menu')

@if (count($errors)>0);

	<div class="container">
		<div class="alert alert-danger" role="alert">
			<u>
				@foreach ($errors->all() as $error)
				<li>
					{{$error}}
				</li>
				@endforeach
			</u>
		</div>
	</div>
	


@endif



<div class="container">
	<h1>Crear Alumno</h1>
	<form action="{{url('/alumnos')}}" method="post" enctype="multipart/from-data">
		@csrf
		<label for="nombre">Nombre del Alumno</label>
		<input type="text" class="form-control" name="nombre" id="nombre">

		<label for="apellido">Apellido</label>
		<input type="text" class="form-control" name="apellido" id="apellido">

		<label for="edad">Edad</label>
		<input type="number" class="form-control" name="edad" id="edad">

		<label for="ci">CI</label>
		<input type="number" class="form-control" name="ci" id="ci">

		<label for="telefono">Telefono</label>
		<input type="text" class="form-control" name="telefono" id="telefono">

		<label for="direccion">Direccion</label>
		<input type="text" class="form-control" name="direccion" id="direccion">

		<label for="gmail">Gmail</label>
		<input type="email" class="form-control" name="gmail" id="gmail">

		<label for="profesion">Profesion</label>
		<input type="text" class="form-control" name="profesion" id="profesion">

		<label for="genero">Genero</label>
		<select class="form-select" aria-label=".form-select-sm example" name="genero" id="genero">
			<option></option>
			<option value="Masculino"> Masculino</option>
			<option value="Femenino">Femenino</option>
		</select>
		
		<label for="fecha_de_nacimiento">Fecha de Nacimiento</label>
        <input type="date" class="form-control" name="fecha_de_nacimiento" id="fecha_de_nacimiento">
		

		<div class="form-group col-md-13">
			{!! Form::label('curso_id', 'Seleccionar curso:')!!}
			{!! Form::select('curso_id', $cursos, null, ['class' => 'form-control 
				custom-select','placeholder' => 'Seleccione']) !!}
		
		 <br>
		<div class="d-flex justify-content-between">
			<input type="submit" class="btn btn-primary" value="Guardar">

	    	<a href="{{route('alumnos.index')}}">
	    		<button type="button" class="btn btn-danger">Cancelar</button></a>
		</div>
	    
	</form>
</div>
