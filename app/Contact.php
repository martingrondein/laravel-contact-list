<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{   
    // Define singlar
    public $table = "contact";

    protected $fillable = [
        'first_name',
        'last_name',
        'cell_phone',
        'email',
        'city'
      ];
}
