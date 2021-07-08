<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
   public function users() {
       return $this->belongsTo('App\User');
   }
   public function reviews() {
       return $this->hasOne('App\Review');
   }
}
