<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{

    protected $table = 'notifications';
    public $timestamps = true;
    protected $fillable = array('tittle', 'content');

    public function clients()
    {
        return $this->belongsToMany('App\Models\Client');
    }

    public function notificationRequest()
    {
        return $this->belongsTo('App\Models\DanationRequest');
    }

}
