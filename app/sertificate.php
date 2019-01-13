<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sertificate extends Model
{
    //
    protected $fillable = ['nama_serticate', 'tahun'];

    public function portos()
    {
        return $this->hasMany('App\porto');
    }
}
