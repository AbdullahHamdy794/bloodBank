<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model 
{

    protected $table = 'posts';
    public $timestamps = true;
    protected $fillable = array('tittle', 'image', 'content', 'category_id');

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function getClient()
    {
        return $this->belongsToMany('App\Models\Client');
    }

}