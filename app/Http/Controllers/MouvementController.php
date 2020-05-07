<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MouvementEm ;

class MouvementController extends Controller
{
   
    public function mouvement($id){
    
        $mv= MouvementEm::find($id);

        return view('trav.mvembarcation',[

         'mv' => MouvementEm::find($id)   
        ]);
    }

public function editmv($id){

    return view('trav.editmv',[

 'mv'=> MouvementEm::find($id)

    ]);
}

public function Update(Request $request,$id){

    $mv = MouvementEm::find($id);
    $mv->embarcation_id = $request->input('idd');
    $mv->Date_Heur_mouvement = $request->input('datemv');
    $mv->Raison_Mouvement = $request->input('sel');
    $mv->Nature_Mouvment = $request->input('sell');
    $mv->Durée_Absence = $request->input('e');
    $mv->Autorisation = $request->input('selll');

    $mv->save();
return redirect()->route('mouvement.mv',[$mv->id])->with('success','Modification avec success');

}
}
