<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class SituationController extends Controller
{
    public function base(){

$data = DB::table('props')
        ->join('embarcations','props.id','=','embarcations.prop_id')
        ->join('posts','embarcations.id','=','posts.embarcation_id')
        ->join('mouvement_ems','embarcations.id','=','mouvement_ems.embarcation_id')
        ->select('props.Nom','embarcations.Nom_Embarcation','posts.Numero_Post','mouvement_ems.Nature_Mouvment')
        
        ->get();


        return view('trav.situationmouv',compact('data'));
    }
}
