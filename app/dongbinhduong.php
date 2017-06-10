<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class dongbinhduong extends Model
{
    protected $table='dongbinhduong';

    protected $fillable = ['title', 'description', 'tag','content','image','link','location'];
}
