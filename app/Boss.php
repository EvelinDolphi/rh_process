<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boss extends Model
{
  protected $fillable = [
    'nombre',
  ];

  public function department()
  {
      return $this->belongsTo('App\Department');
  }
}
