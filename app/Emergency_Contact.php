<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emergency_Contact extends Model
{
  protected $fillable = ['nombre','telefono'];

  public function adress()
  {
      return $this->hasOne('App\Adress');
  }
}
