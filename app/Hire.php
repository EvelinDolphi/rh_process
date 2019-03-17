<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hire extends Model
{
  protected $fillable = [
    'description',
  ];

  public function employee()
  {
    return $this->belongsTo('App\Employee');
  }

  public function salary()
  {
    return $this->hasOne('App\Salary');
  }

  public function place()
  {
    return $this->hasOne('App\Place');
  }
}
