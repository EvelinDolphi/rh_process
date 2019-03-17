<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emergency extends Model
{
  protected $fillable = [
    'nombre', 'telefono',
  ];

  public function address()
  {
      return $this->belongsTo('App\Address');
  }

  public function employee()
  {
    return $this->belongsTo('App\Employee');
  }
}
