<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use DB;
use Laracasts\Flash\Flash;
use App\Models\Curso;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $buscar = $request -> get('buscarpor');//buscador


        $alumnos = Alumno::where('ci', 'like',"%$buscar%")->paginate(2); //iguala la variable alumnos a la tabla de datos con el mismo nombre.
        //$alumnos = Alumno::all();
        return view('alumno.index', compact('alumnos')); //forma en que se migran los datos a la vista.
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos = Curso::pluck('nombre', 'id');
        return view('alumno.create', compact('cursos'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'nombre' => 'required|string',
            'apellido' => 'required|alpha',
            'edad' => 'required|max:3',
            'ci' => 'required|numeric',
            'telefono' => 'required|max:13',
            'direccion' => 'required',
            'gmail' => 'required|unique:alumnos,gmail',
            'profesion' => 'required',
            'genero' => 'required',
            'fecha_de_nacimiento' => 'required',
            'curso_id' => 'required',
        ];

        $mensaje = [
            'required' => 'El :attribute es requerido',
            'telefono.required' => 'El número de teléfono es requerido',
            'direccion.required' => 'La dirección es requerida',
            'profesion.required' => 'La profesión es requerida',
            'fecha_de_nacimiento.required' => 'La fecha de nacimiento es requerida',
            'curso_id.required' => 'El ID de curso es requerido',
        ];
        $this->validate($request, $rules, $mensaje);

        $alumnos = request()->except('_token');
        //return response()->json($alumnos);
        Alumno::insert($alumnos);
        Flash::success('Creado correctamente');
        return redirect(route('alumnos.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumnos = Alumno::findorFail($id); //buscar los registros segun id y los actualiza
        return view('alumno.show', compact('alumnos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumnos = Alumno::findorFail($id); //buscar los registros segun id y los actualiza
        return view('alumno.edit', compact('alumnos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $alumnos = request()->except(['_token', '_method']);
        Alumno::where('id', '=', $id)->update($alumnos);
        Flash::success('Editado correctamente');
        return redirect('alumnos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alumno::destroy($id); //eliminar registro de la base de datos.
        Flash::success('Eliminado correctamente');
        return redirect('alumnos'); // al eliminar, redirecciona a la pantalla de inicio.
    }
}
