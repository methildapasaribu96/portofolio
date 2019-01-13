<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class education extends Model
{
    //
    protected $fillable = ['school', 'thn_masuk', 'thn_keluar', 'ipk'];

    public function portos()
    {
        return $this->hasMany('App\porto');
    }
}
