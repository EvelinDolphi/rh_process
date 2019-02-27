<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
  public function adress()
  {
      return $this->hasOne('App\Adress');
  }

  public function status()
  {
      return $this->hasOne('App\Status');
  }

  public function hiring()
  {
      return $this->hasOne('App\Hiring');
  }

  public function emergency_contact()
  {
      return $this->hasOne('App\Emergency_Contact');
  }

  public function civil_status()
  {
      return $this->hasOne('App\Civil_Status');
  }

  public function role_assignment()
  {
      return $this->hasOne('App\Role_Assigment');
  }
}
