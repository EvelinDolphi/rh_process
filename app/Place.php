<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
  protected $fillable = [
    'area', 'delegacion',
  ];

  public function hire()
  {
    return $this->belongsTo('App\Hire');
  }

  public function department()
  {
      return $this->belongsTo('App\Department');
  }
}
