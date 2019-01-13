<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class organization extends Model
{
    //
    protected $fillable = ['nama_organisasi','tahun'];

    public function portos()
    {
        return $this->hasMany('App\porto');
    }
}
