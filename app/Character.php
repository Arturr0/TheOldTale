<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    public $timestamps = false;
    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function universum()
    {
        return $this->belongsTo('App\Universum');
    }

    public function location()
    {
        return $this->belongsTo('App\Location');
    }

    public function name()
    {
        return $this->hasMany('App\Name');
    }
}
