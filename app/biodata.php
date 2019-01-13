<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class biodata extends Model
{
    //
    protected $fillable =['tempat_lahir', 'tgl_lahir', 'gender', 'nmr_hp', 'alamat','user_id'];

    public function users()
    {
        return $this->belongsTo('App\User');
    }
    public function portos()
    {
        return $this->belongsTo('App\porto');
    }
}
