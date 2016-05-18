<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['nom', 'prenom', 'email', 'objet', 'message'];
}
