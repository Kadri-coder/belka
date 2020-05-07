@extends('prop.papa')

@section('contenu')
<form method="POST" action="{{route('liste.update',[$x->id])}}">
<input type="hidden"  name="_method" value="PUT">
  {{@csrf_field()}}

  <div  class="form-group">
    <label for="">id</label>
    <input class="form-control " name="idp" id="nom" type="text" value="{{$x->id}}">
</div>

     <div  class="form-group">
         <label for="">Nom</label>
         <input class="form-control " name="nom" id="nom" type="text" value="{{$x->Nom}}">
    </div>
     <div class="form-group">
         <label for="">Prénom    </label>

         <input class="form-control "name="prenom" class=""type="text" value="{{$x->Prénom}}">
    </div>
     <div class="form-group">
         <label for="">Date_Naissance</label>
         <input class="form-control"name="date"  type="text" value="{{$x->Date_Naissance}}">
    </div>
     <div>
         <label for="">Lieu_Naissance    </label>

         <input class="form-control"name="lieu" type="text" value="{{$x->Lieu_Naissance}}">
    </div>
     <div class="form-group">
         <label for="">Adresse     </label>

        <input class="form-control" name="adresse" type="text" value="{{$x->Téléphone}}">  

    </div>
     <div class="form-group">
         <label for="">Téléphone </label>
         <input class="form-control" name="telephone" type="text" value="{{$x->Adresse}}">
    </div>
  <button type="submit" class="btn btn-primary">Enregistrer</button>
  <button type="submit" class="btn btn-danger">Annuler</button>

 </form>
 

 
  

@endsection