@extends('prop.papa')



@section('contenu')
<form method="POST" action="{{route('coprop.store')}}">

    {!!csrf_field() !!}
   
    <div  class="form-group">
    <label for="">Identifiant</label>
    <input class="form-control " name="idc" id="nom" type="text">
</div>

     <div  class="form-group">
         <label for="">Nom</label>
         <input class="form-control " name="nom" id="nom" type="text">
    </div>
     <div class="form-group">
         <label for="">Prénom    </label>

         <input class="form-control "name="prenom" class=""type="text">
    </div>
     <div class="form-group">
         <label for="">Date_Naissance</label>
         <input class="form-control"name="date"  type="text">
    </div>
     <div>
         <label for="">Lieu_Naissance    </label>

         <input class="form-control"name="lieu" type="text">
    </div>
     <div class="form-group">
         <label for="">Adresse     </label>

        <input class="form-control" name="adresse" type="text">  

    </div>
     <div class="form-group">
         <label for="">Téléphone </label>
         <input class="form-control" name="telephone" type="text">
    </div>
  <button type="submit" class="btn btn-primary">Enregistrer</button>

 </form>
 

 
  

@stop