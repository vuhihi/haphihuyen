<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tintuc extends Model
{
    protected $table='tintucs';

    protected $fillable = ['title', 'description', 'tag','content','image','link'];
}
