<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  public function role_assignment()
  {
      return $this->belongsTo('App\Role_Assignment');
  }

}
