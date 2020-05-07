<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MouvementEm extends Model
{
    
    public function emv(){

        return $this->belongsTo('App\Embarcation');
        }
}
