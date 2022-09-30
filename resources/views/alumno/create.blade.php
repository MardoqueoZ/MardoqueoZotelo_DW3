<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
		
		<label for="fecha_nacimiento">Fecha de Nacimiento</label>
		<input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento">
		 <br>
		<div class="d-flex justify-content-between">
			<input type="submit" class="btn btn-primary" value="Guardar">

	    	<a href="{{route('alumnos.index')}}">
	    		<button type="button" class="btn btn-danger">Cancelar</button></a>
		</div>
	    
	</form>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
