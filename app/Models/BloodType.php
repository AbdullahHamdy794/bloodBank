<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BloodType extends Model
{

    protected $table = 'blood_types';
    public $timestamps = true;
    protected $fillable = array('name');

    public function notificationClients()
    {
        return $this->hasMany('App\Models\Client');
    }

    public function getClientBlood()
    {
        return $this->belongsToMany('App\Models\Client');
    }

}
