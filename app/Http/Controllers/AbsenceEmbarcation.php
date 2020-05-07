<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;


class AbsenceEmbarcation extends Controller
{
    public function absence(){

    
    $w = DB::table('props')
        ->join('embarcations','props.id','=','embarcations.prop_id')
        ->join('posts','embarcations.id','=','posts.embarcation_id')
        ->join('mouvement_ems','embarcations.id','=','mouvement_ems.embarcation_id')
        
        ->select('props.Nom','embarcations.Nom_Embarcation','posts.Numero_Post','mouvement_ems.Nature_Mouvment')
        ->where('mouvement_ems.Durée_Absence','>', 6)
        ->get();

        return view('trav.absence',compact('w'));
    }
}
