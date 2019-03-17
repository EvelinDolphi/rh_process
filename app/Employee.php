<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

  protected $fillable = [
    'name', 'first_lastname', 'second_lastname', 'fecha_alta', 'antiguedad',
    'sexo', 'birthdate', 'numero_seguro', 'curp', 'rfc',
  ];

  public function address()
  {
      return $this->belongsTo('App\Address');
  }

  public function status()
  {
    return $this->hasOne('App\Status');
  }

  public function hire()
  {
    return $this->hasOne('App\Hire');
  }

  public function emergency()
  {
    return $this->hasOne('App\Emergency');
  }

  public function civil()
  {
    return $this->hasOne('App\Civil');
  }

  public function bank()
  {
    return $this->hasOne('App\Bank');
  }
}
