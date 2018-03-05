<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $table='docentes';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable=[
    	'apepaterno',
    	'apematerno',
    	'nombres',
        'dni',
    	'celular',
    	'especialidad',
    	'email'
    ];

    // Relación
    /*public function user(){
        return $this->hasOne('App\User');
    }

    public function institucion(){
        //return $this->belongsTo('App\Institucion');
    }*/
}
