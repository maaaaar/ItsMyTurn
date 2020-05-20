<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    protected $table = 'asignatura'; //enlaza la tabla sexo con el modelo sexo
    protected $primaryKey = 'id'; //le ponemos como se llama la clave primaria de la tabla
    public $incrementing = true; //la clave primaria es incremental
    protected $keyType = 'int';// tipo de dato de primaryKey
    public $timestamps = false; //si tiene timestamp o no


    // relacion 1/N -->hasMeny una asignatura puede tener muchos proyectos(una misma asignatura puede estar en muchos proyectos)
    public function proyectos()
    {
        return $this->hasMany('App\Model\Projecte','id_asignatura'); // (lugar donde se encuentra, foreign key, como se llama el campo donde se va a guardar)
    }
}