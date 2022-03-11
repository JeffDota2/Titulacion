<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    protected $table = 'cv';

    protected $fillable = [
        'cedula',
        'nombreuno',
        'nombredos',
        'apellidouno',
        'apellidos',
        'direccion',
        'telefono',
        'correo',
        'colegio',
        'fechaingreso',
        'fechafin',
        'uni',
        'fechainicio',
        'fechafinal',
        'curso',
        'fechaini',
        'fechafi',
        'empresa',
        'cargo',
        'descripcion',
        'periodouno',
        'periododos',
        'empresados',
        'cargodos',
        'descripciondos',
        'periodou',
        'periodod',
        'idioma',
        'nivel',
        'idiomados',
        'niveldos',
        'areau',
        'conocimientou',
        'nivelu',
        'aread',
        'conocimientod',
        'niveld',
        'areat',
        'conocimientot',
        'niveltr',
        'nom',
        'relacion',
        'contacto',
        'nomu',
        'relaciond',
        'contactod',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/cvs/'.$this->getKey());
    }
}
