<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Embarcation extends Model
{
    public function prop(){

        return $this->belongsTo('App\Prop');
    }
    public function post(){
  
        return $this->hasOne('App\Post');
      
      
       }
       public function  mn(){

        return $this->hasOne('App\MouvementEm');
     }
    
}
