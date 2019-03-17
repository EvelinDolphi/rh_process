<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
  protected $fillable = [
    'nombre',
  ];

    public function boss()
    {
      return $this->hasOne('App\Boss');
    }

    public function places()
{
    return $this->hasMany('App\Place');
}
}
