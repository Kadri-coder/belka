<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coprop extends Model
{
    public function propri(){

        return $this->belongsTo('App\Prop');
    }


}
