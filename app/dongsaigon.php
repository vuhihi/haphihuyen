<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dongsaigon extends Model
{
    protected $table='dongsaigon';

    protected $fillable = ['title', 'description', 'tag','content','image','link','location'];
}
