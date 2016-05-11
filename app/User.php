<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'email', 'tel', 'password', 'adresse', 'postal', 'city', 'country', 'photo', 'socialfb', 'socialtt', 'socialig', 'socialgg', 'sectors,'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function event() {
        return $this->belongsTo('App\Event');
    }
}
