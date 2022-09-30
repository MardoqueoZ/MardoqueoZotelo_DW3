<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container">
	<h1>{{$alumnos->nombre." ".$alumnos->apellido}}</h1>
	<form action="{{url('/alumnos/'.$alumnos->id)}}" method="POST" enctype="multipart/from-data">

		<label for="nombre">Nombre del Alumno</label>
		<input type="text" class="form-control" name="nombre" id="nombre" value="{{$alumnos->nombre}}" disabled="true">

		<label for="apellido">Apellido</label>
		<input type="text" class="form-control" name="apellido" id="apellido" value="{{$alumnos->apellido}}" disabled="true">

		<label for="edad">Edad</label>
		<input type="number" class="form-control" name="edad" id="edad" value="{{$alumnos->edad}}" disabled="true">

		<label for="ci">CI</label>
		<input type="number" class="form-control" name="ci" id="ci" value="{{$alumnos->ci}}" disabled="true">

		<label for="telefono">Telefono</label>
		<input type="text" class="form-control" name="telefono" id="telefono" value="{{$alumnos->telefono}}" disabled="true">

		<label for="direccion">Direccion</label>
		<input type="text" class="form-control" name="direccion" id="direccion" value="{{$alumnos->direccion}}" disabled="true">

		<label for="gmail">Gmail</label>
		<input type="email" class="form-control" name="gmail" id="gmail" value="{{$alumnos->gmail}}" disabled="true">

		<label for="profesion">Profesion</label>
		<input type="text" class="form-control" name="profesion" id="profesion" value="{{$alumnos->profesion}}" disabled="true">

		<label for="genero">Genero</label>
		<select class="form-select" aria-label=".form-select-sm example" name="genero" id="genero" value="{{$alumnos->genero}}" disabled="true">
			<option></option>
			<option value="Masculino" {{$alumnos->genero == 'Masculino'?'selected' : ''}}> Masculino</option>
			<option value="Femenino" {{$alumnos->genero == 'Femenino'?'selected' : ''}}> Femenino</option>
		</select>
		
		<label for="fecha_nacimiento">Fecha de Nacimiento</label>
		<input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" value="{{$alumnos->fecha_nacimiento}}" disabled="true">
		 <br>
		

	    	<a href="{{route('alumnos.index')}}">
	    		<input type="button" class="btn btn-danger" value="Cancelar">
            </a>
		  
	</form>
</div>