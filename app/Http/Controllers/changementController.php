<?php

namespace App\Http\Controllers;
use App\Changerem;
use Illuminate\Http\Request;

class changementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trav.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $em = new Changerem();
        $em->Nom_Embarcation =$request->input('a');
        $em->Type =$request->input('b');
        $em->Immatriculation =$request->input('c');
        $em->Tonnage_brut =$request->input('cc');
    
        $em->Longueur_hors_tout =$request->input('e');
        $em->Creux      =$request->input('f');
        $em->Largeur_hors_tout =$request->input('gg');
        $em->Date_construction =$request->input('h');
        $em->Type_moteur =$request->input('i');
        $em->puissance_moteur =$request->input('ii');
        $em->Marque_Moteur =$request->input('j');
        $em->Num_serie_moteur =$request->input('k');
        $em->Nombre_max_passagers =$request->input('l');
        $em->Date_armement =$request->input('m');
        $em->Date_pv_inspection =$request->input('n');
        $em->id_prop = $request->input('o');
        $em->id_em = $request->input('idem');

        $em->Motif = $request->input('motif');

    
        $em->save();
     




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
