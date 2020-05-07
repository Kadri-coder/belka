<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function embarcationp(){

        return $this->belongsTo('App\Embarcation');
       
           }
}
