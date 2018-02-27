<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
  //
  public $table = "group"; // fix voor niet vinden van table... laravel bug

  protected $fillable = ['title'];
}
