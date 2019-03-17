<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
  protected $fillable = [
    'alta', 'baja', 'voluntaria', 'resicion', 'demanda', 'penal',
  ];

  public function employee()
  {
    return $this->belongsTo('App\Employee');
  }
}
