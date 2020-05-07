<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prop extends Model

{

    use SoftDeletes;

protected $data=['deleted_at'];


    public function embarcation(){

        return $this->hasOne('App\Embarcation');
    }

    public function coprop(){

        return $this->hasOne('App\Coprop');
    }
 

}
