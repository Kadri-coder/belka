<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function post($id){



        return view('post.vupost',[

            'post'=> Post::find($id)


        ]);
    }
    public function toutposte(){

        return view('post.toutlesposte',[

            'posts'=> Post::all()
    
    
        ]);
    }


    public function index()
    {
    
   
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        
        return view('post.edit',[

           'e' =>Post::find($id)
        ]);
    }

    public function changer(Request $request,$id){
        $e = Post::find($id);
        $e->Numero_Post = $request->input('num');
        $e->Date_Changement= $request->input('date');
        $e->Motif = $request->input('motif');

        $e->save();

        return redirect()->route('init.post',[$e->id])->with('success','Changement avec success');



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
