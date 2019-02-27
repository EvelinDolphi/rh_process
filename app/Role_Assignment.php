<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role_Assignment extends Model
{
  public function role()
   {
       return $this->hasOne('App\Role');
   }

   public function employee()
   {
       return $this->belongsTo('App\Employee');
   }
}
