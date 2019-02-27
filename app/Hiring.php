<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hiring extends Model
{
  public function salary()
  {
      return $this->hasOne('App\Salary');
  }

  public function place()
  {
      return $this->hasOne('App\Place');
  }

  public function employee()
  {
      return $this->belongsTo('App\Employee');
  }
}
