<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Prop;
use App\Embarcation;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class epbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('prop.index',[

            'ps' => Prop::All()
            
          
        ],compact('ps'));
              
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prop.create');

    }
    public function search(Request $request){
      
        $search = $request->get('search');
        $ps = DB::table('props')->where('id', 'like','%' .$search.'%');

        $ps =$ps->get();
        return view('prop.index',['ps' => $ps]);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    

  /*      $data =$request->validate([
        'Nom' => 'required',
         'Prénom' => 'required',
         'Date_Naissance' =>'required',
         'Lieu_Naissance' =>'required',
         'Adresse' =>'required',
         'Téléphone' =>'required'




        ]);*/


        $d = new Prop();
        $d->Nom= $request->input('nom');
        $d->Prénom =$request->input('prenom');
        $d->Date_Naissance= $request->input('date');
        $d->Lieu_Naissance= $request->input('lieu');
        $d->Adresse =$request->input('adresse');
        $d->Téléphone= $request->input('telephone');
        $d->save();
       // $request->session()->flash('f','ajout avec succes');
    
        return redirect()->route('liste.index')->with('success','Le Nouveau Propriétaire a était ajouter avec success');     
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('prop.show',[

            'p' =>Prop::find($id)
         
           ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

$prop= Prop::find($id);
        return view('prop.edit',[

            'x' => Prop::find($id)
           ]);





    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $x=  Prop::find($id);
        $x->id= $request->input('idp');
        $x->Nom= $request->input('nom');
        $x->Prénom =$request->input('prenom');
        $x->Date_Naissance= $request->input('date');
        $x->Lieu_Naissance= $request->input('lieu');
        $x->Adresse =$request->input('adresse');
        $x->Téléphone= $request->input('telephone');
        $x->save();
        $request->session()->flash('f','La personne a était Modifier avec success');

        return redirect()->route('liste.index')->with('success','Modification avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $j =Prop::find($id);

        $j->delete();
    
         return redirect()->route('liste.index')->with('success','Supression avec success');
    
    }
}
