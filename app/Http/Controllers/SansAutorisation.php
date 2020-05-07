<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SansAutorisation extends Controller
{
    public function sansautorisation(){

    
        $s = DB::table('props')
            ->join('embarcations','props.id','=','embarcations.prop_id')
            ->join('posts','embarcations.id','=','posts.embarcation_id')
            ->join('mouvement_ems','embarcations.id','=','mouvement_ems.embarcation_id')
            
            ->select('props.Nom','embarcations.Nom_Embarcation','posts.Numero_Post','mouvement_ems.Nature_Mouvment')
            ->where('mouvement_ems.Autorisation','=', 'non')
            ->get();
    
            return view('trav.sansautorisation',compact('s'));
        }
}
