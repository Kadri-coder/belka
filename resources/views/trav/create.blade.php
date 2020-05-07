@extends('prop.papa')





@section('contenu')

<form method="POST" action="{{route('form.store')}}">

    {{@csrf_field()}}
    <div  class="form-group">
        <label for="">Nom_Embarcation</label>
        <input  class="form-control"type="text" name="a" >
    
    </div>
    <div class="form-group">
        <label for="">Type   </label>

        <input class="form-control" type="text" name="b" >
    </div>
    <div class="form-group">
        <label for=""> Immatriculation   </label>

        <input  class="form-control"type="text" name="c" > 
    </div>
    <div class="form-group">
        <label for="">Tonnage_brut    </label>

        <input class="form-control" type="text" name="cc" >
    </div>
    <div class="form-group">
        <label for="">Longueur_hors_tout    </label>

        <input class="form-control" type="text" name="e" >
    </div>
    <div class="form-group">
        <label for="">Creux      </label>

    <input  class="form-control"type="text" name="f" >
    </div>
    <div class="form-group">
        <label for="">Largeur_hors_tout</label>
        <input class="form-control" type="text" name="gg" >
    </div>
    <div class="form-group">
        <label for="">Date_construction</label>
        <input  class="form-control"type="text" name="h" >
    </div>
    <div class="form-group">
        <label for="">Type moteur</label>
        <input class="form-control" type="text" name="i" >
    </div>
    <div class="form-group">
        <label for="">Puissance_Moteur    </label>
        <input type="text" class="form-control" name="ii" >
    </div>
    <div class="form-group">
        <label for="">Marque du moteur</label>
        <input class="form-control" type="text" name="j" >
    </div>
    <div class="form-group">
        <label for="">Numéro_série_Moteur</label>
        <input type="text" name="k"   class="form-control" >
    </div>
    <div class="form-group"> 
        <label  for="">Nombre_Max_Passagers</label>
            <input type="text" name="l"   class="form-control" >
    </div>
    <div class="form-group"><label for="">Date d'armement   </label>

        <input class="form-control" type="text" name="m" >
    
</div>
    <div class="form-group">
        <label for="">Date_pv_inspection  </label>
        <input type="text" name="n" class="form-control" >
   
    </div>
    <div class="form-group">
        <label for="">identifian_propriétaire </label>
        <input type="text" name="o" class="form-control">
   
    </div>
    <div class="form-group">
        <label for="">identifian_Embarcation </label>
        <input type="text" name="idem" class="form-control">
   
    </div>
    <div class="form-group">
        <label for="">Motif </label>
        <input type="text" name="motif" class="form-control">
   
    </div>
<button type="submit" class="btn btn-primary">soumettre</button>
</form>


@endsection