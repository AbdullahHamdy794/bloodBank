<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Client extends Authenticatable
{

    protected $table = 'clients';
    public $timestamps = true;
    protected $fillable = array('phone', 'email', 'password', 'name', 'd_o_b', 'blood_type_id', 'last_donation_date', 'city_id', 'pin_code');

    public function bloodType()
    {
        return $this->belongsTo('App\Models\BloodType');
    }

    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }

    public function getPost()
    {
        return $this->belongsToMany('App\Models\Post');
    }

    public function clientRequest()
    {
        return $this->hasMany('App\Models\DanationRequest');
    }

    public function clientsRequest()
    {
        return $this->hasMany('App\Models\DanationRequest');
    }

    public function notificationClients()
    {
        return $this->belongsToMany('App\Models\Notification');
    }

    public function getGovernorate()
    {
        return $this->belongsToMany('App\Models\Governorates');
    }

    public function clientbloodtypes()
    {
        return $this->belongsToMany('App\Models\BloodType');
    }
    protected $hidden = [
        'password',
        'api_token',
    ];

}
