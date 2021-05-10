<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DanationRequest extends Model
{

    protected $table = 'donation_requests';
    public $timestamps = true;
    protected $fillable = array('patient_name','client_id' ,'patient_phone', 'city_id', 'hospital_name', 'details','longitude', 'letitude', 'bags_num');
//client_id,londitude
    public function donationCity()
    {
        return $this->belongsTo('App\Models\City');
    }

    public function cityClient()
    {
        return $this->belongsTo('App\Models\Client');
    }

    public function requestNotification()
    {
        return $this->hasOne('App\Models\Notification');
    }

}