<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['name'];

    public function immediate_boss()
    {
        return $this->hasOne('App\Immediate_boss');
    }
}
