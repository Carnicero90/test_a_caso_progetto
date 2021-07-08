<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function votes() {
        return $this->belongsTo('App\Vote');
    }
}
