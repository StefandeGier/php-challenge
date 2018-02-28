<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
  Schema::create('tasks', function(Blueprint $table)
{
  $table->increments('id');
  $table->string('title');
  $table->timestamps();
});
}
