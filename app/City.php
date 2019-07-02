<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $table = "city";

    protected $fillable = [
        'title'
      ];

      public function city() {
        return $this->belongsTo(City::class);
      }
}
