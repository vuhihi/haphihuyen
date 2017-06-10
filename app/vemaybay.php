<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class vemaybay extends Model
{
    protected $table='vemaybay';

    protected $fillable = ['title', 'description', 'tag','content','image','link'];
}
