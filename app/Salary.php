<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{

  public function hiring()
      {
          return $this->belongsTo('App\Hiring');
      }
}
