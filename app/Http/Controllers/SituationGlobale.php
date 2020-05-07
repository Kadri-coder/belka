<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SituationGlobale extends Controller
{
    public function situationglobale(){

    $situation = DB::table('props')
    ->join('embarcations','props.id','=','embarcations.prop_id')
    ->join('posts','embarcations.id','=','posts.embarcation_id')
    ->join('mouvement_ems','embarcations.id','=','mouvement_ems.embarcation_id')
    
    ->select('props.Nom','embarcations.Nom_Embarcation','embarcations.Immatriculation','posts.Numero_Post','posts.Date_affectation','mouvement_ems.Nature_Mouvment')
    ->get();

    return view('trav.situationglobale',compact('situation'));
    }
}
