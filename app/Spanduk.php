<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spanduk extends Model
{
   protected $table = 'spanduk';

   protected $fillable = ['judul', 'link', 'status'];

}
