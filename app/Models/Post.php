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
        return $this->belongsTo('App\Models\Category','category_id');
    }

    public function client()
    {
        return $this->belongsToMany('App\Models\Client');
    }

    public function getIsFavouriteAttribute()
    {
        $user = auth('client-web')->user();
        if(!$user)
        {
            $user = auth('api')->user();
        }
        if($user)
        {
            $check = $user->favourites()->find($this->id);
            if($check)
            {
                return true;
            }
        }

        return false;
    }

}
