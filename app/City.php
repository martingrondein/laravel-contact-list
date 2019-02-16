<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\City;

class City extends Model
{
    // Define singlar
    public $table = "city";
   
    protected $fillable = [
        'title'
      ];
}
