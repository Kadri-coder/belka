@extends('prop.papa')





@section('contenu')

<div class="alert alert-danger">
<p>Etat de L'embarcation :En mouvement</p>
</div>

<ul>
<li> <strong>Indentifiant_Embarcation :</strong> {{$mv->embarcation_id}}</li>
<li> <strong>Date_Heur_Mouvement:</strong>  {{$mv->Date_Heur_mouvement}}</li>
 <li><strong>Raison_Mouvement:</strong>{{$mv->Raison_Mouvement}}</li>
<li><strong>Nature_Mouvement:</strong>{{$mv->Nature_Mouvment}}</li>
<li><strong>Durée_Absence:</strong>{{$mv->Durée_Absence}}</li>
<li><strong>Autorisation:</strong>{{$mv->Autorisation}}</li>
</ul>

<a href="{{route('mouvement.editmv',[$mv->id])}}" > <button type="submit" class="btn btn-danger">Modifier</button></a>

@include('sweetalert::alert')

@stop