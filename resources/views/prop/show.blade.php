@extends('prop.papa')



@section('contenu')
<ul>    
 
    <li><strong> Nom</strong> :{{$p->Nom}} </li>
    <li><strong> Prénom </strong>:{{$p->Prénom}}</li>
    <li><strong>Dtae_Naissance </strong>: {{$p->Date_Naissance}}</li>
    <li><strong>Lieu_Naissance</strong>:{{$p->Lieu_Naissance}}</li>
    <li><strong> Téléphone</strong>:  {{$p->Téléphone}}</li>
    <li><strong> Adresse</strong>: {{$p->Adresse}}</li>
    <li><strong>Le temps actuelle</strong>:{{$p->created_at}}
</ul>   

@endsection