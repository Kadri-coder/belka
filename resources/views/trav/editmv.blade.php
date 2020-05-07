@extends('prop.papa')






@section('contenu')

<form method="POST" action="{{route('mouvement.update',[$mv->id])}}">
    <input type="hidden"  name="_method" value="PUT">

    {{@csrf_field()}}
    <div  class="form-group">
        <label for="">identifian_Embarcation</label>
    <input  class="form-control"type="text" name="idd" value="{{$mv->embarcation_id}}"  >
    
    </div>
    <div class="form-group">
        <label for="">Date_Heur_Mouvement   </label>

    <input class="form-control" type="text" name="datemv"  value="{{$mv->Date_Heur_mouvement}}" >
    </div>
    <div class="form-group">
        <label for=""> Raison_Mouvement   </label>

    <select name="sel">
<option>Cale séche</option>
<option>Hivernage</option>
<option>Réparation</option>
<option>Inspection</option>
<option>Vente</option>
 </select>


    </div>
    <div class="form-group">
        <label for="">Nature_Mouvement </label>
<select name="sell">
<option>Sortie</option>
<option>Entrée</option>
<option>Aucun</option>

</select>
    </div>
    <div class="form-group">
        <label for="">Durée_Absence  </label>

        <input class="form-control" type="text" name="e"   placeholder="Signalé">
    </div>
    <div class="form-group">
        <label for=""> Autorisation  </label>
        <select name="selll">
            <option>oui</option>
            <option>Non</option>
            </select>
    </div>
    
    <button type="submit" class="btn btn-danger">Soumettre</button>






@stop