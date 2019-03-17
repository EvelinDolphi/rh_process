<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{

  protected $fillable = [
  'salario_base', 'salario_cotizacion', 'sueldo_contratacion',
  ];



  public function hire()
  {
    return $this->belongsTo('App\Hire');
  }
}
