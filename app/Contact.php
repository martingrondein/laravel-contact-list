<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $table = "contact";

    protected $fillable = [
        'first_name',
        'last_name',
        'cell_phone',
        'email',
        'city'
      ];

      public function contact() {
        return $this->hasMany(Contact::class);
      }

}
