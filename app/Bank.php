<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
  protected $fillable = ['name_bank','clabe_interbancaria','numero_cuenta'];
}
