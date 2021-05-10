<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Governorates extends Model 
{

    protected $table = 'governorates';
    public $timestamps = true;
    protected $fillable = array('name');

    public function cities()
    {
        return $this->hasMany('App\Models\City');
    }

    public function clientsGovernorates()
    {
        return $this->belongsToMany('App\Models\Client');
    }

}