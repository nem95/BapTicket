<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resa extends Model
{
    protected $fillable = ['user_id', 'event_id', 'nb_place'];

}
