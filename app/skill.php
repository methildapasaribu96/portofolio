<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skill extends Model
{
    //
    protected $fillable = ['skill'];

    public function portos()
    {
        return $this->hasMany('App\porto');
    }
}
