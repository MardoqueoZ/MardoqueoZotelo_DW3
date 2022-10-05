<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    use HasFactory;
    public $table = 'alumnos';
    public $fillable =[
        'curso_id',
        'nombre',
        'apellido',
        'edad',
        'ci',
        'telefono',
        'direccion',
        'gmail',
        'profesion',
        'genero',
        'fecha_de_nacimiento'
    ];

    public function cursos (){
        return $this->belongsTo('App\Models\Curso', 'curso_id');
        //esta funcion se uso en el index de alumno
    }
}
