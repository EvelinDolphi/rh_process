<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Civil_Status extends Model
{
  protected $fillable = ['soltero', 'casado', 'viudo',
  'divorciado','separado','numero_hijos'];
}
