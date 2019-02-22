<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    protected $fillable = ['avenue','lote','manzana','number',
    'street','colonia','municipality','state','codigo_postal'];

    public function client()
       {
           return $this->belongsTo('App\Client');
       }

    public function emergency_contact()
        {
            return $this->belongsTo('App\Emergency_Contact');
        }
}
