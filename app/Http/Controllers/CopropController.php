<?php

namespace App\Http\Controllers;

use App\Coprop;
use Illuminate\Http\Request;

class CopropController extends Controller
{
    public function coprop($id){


        return view('prop.coprop',[

'co' => Coprop::find($id)


        ]);

    

    }
public function cree($id){
 
return view('prop.creecoprop',[

   'co' => Coprop::find($id) 
]);
}

public function store(Request $request){

    $co = new Coprop();
    $co->prop_id =$request->input('idc');
    $co->Nom= $request->input('nom');
    $co->Prénom =$request->input('prenom');
    $co->Date_Naissance= $request->input('date');
    $co->Lieu_Naissance= $request->input('lieu');
    $co->Adresse =$request->input('adresse');
    $co->Téléphone= $request->input('telephone');

    $co->save();
    $request->session()->flash('f','Nouveau copropriétaire a était ajouter avec Success !');

    return redirect()->route('liste.index')->with('success','Copropriétaire ajoutée avec success');     



}



}



