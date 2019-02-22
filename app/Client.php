<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name', 'first_lastname', 'second_lastname',
    'fecha_alta','antiguedad','sexo','birthdate','numero_seguro','puesto','departamento'];

    public function adress()
    {
        return $this->hasOne('App\Adress');
    }

    
}
