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

    public function favourites()
    {
        return $this->belongsToMany('App\Models\Post');
    }

    public function Requests()
    {
        return $this->hasMany('App\Models\DanationRequest');
    }
    public function notifications()
    {
        return $this->belongsToMany('App\Models\Notification');
    }

    public function Governorate()
    {
        return $this->belongsToMany('App\Models\Governorates');
    }

    public function BloodTypes()
    {
        return $this->belongsToMany('App\Models\BloodType');
    }

    public function tokens()
    {
        return $this->hasMany('App\Models\Token');
    }
    protected $hidden = [
        'password',
        'api_token',
    ];


}
