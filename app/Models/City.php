<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{

    protected $table = 'cities';
    public $timestamps = true;
    protected $fillable = array('name','governorates_id');

    public function clients()
    {
        return $this->hasMany('Client');
    }

    public function governorate()
    {
        return $this->belongsTo('App\Models\Governorate','governorates_id');
    }

}
