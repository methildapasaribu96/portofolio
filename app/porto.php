<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class porto extends Model
{
    //
    protected $fillable =['biodata_id', 'education_id', 'skill_id', 'organization_id', 'sertificated_id'];
    public function biodatas()
    {
        return $this->belongsTo('App\biodata');
    }
    public function education()
    {
        return $this->belongsTo('App\education');
    }
    public function skills()
    {
        return $this->belongsTo('App\skill');
    }
    public function organizations()
    {
        return $this->belongsTo('App\organization');
    }
    public function sertificates()
    {
        return $this->belongsTo('App\sertificate');
    }
}
