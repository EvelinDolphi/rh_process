<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
  protected $fillable = [
    'avenue', 'lote', 'manzana', 'number', 'street', 'colonia',
    'municipality', 'state', 'codigo_postal',
  ];

  public function employee()
  {
    return $this->hasOne('App\Employee');
  }

  public function emergency()
  {
    return $this->hasOne('App\Emergency');
  }

}
