<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title', 'subject', 'host', 'content', 'localisation', 'places', 'placesLeft', 'user_id', 'adresse', 'city', 'postal', 'debut', 'fin'];

    public function user() {
        return $this->belongsTo('App\User');
    }

}
