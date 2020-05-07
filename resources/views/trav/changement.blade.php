@extends('prop.papa')




@section('contenu')

<li><strong>Nom_Embarcation: </strong> {{$em->Nom_Embarcation}}</li>
<li><strong>Type:  </strong>{{$em->Type}}</li>
<li><strong>Immatriculation: </strong> {{$em->Immatriculation}}</li>
<li><strong>Tonnage_brut: </strong> {{$em->Tonnage_brut}}</li>
<li><strong>Longueur_hors_tout:</strong>  {{$em->Longueur_hors_tout}}</li>
<li><strong>Creux:  </strong>{{$em->Creux}}</li>
<li><strong>Largeur_hors_tout:</strong>  {{$em->Largeur_hors_tout}}</li>
<li><strong>Date_construction: </strong> {{$em->Date_construction}}</li>
<li><strong>Type_moteur: </strong> {{$em->Type_moteur}}</li>
<li><strong>Puissance_moteur:</strong>  {{$em->Puissance_moteur}}</li>
<li><strong>Marque_Moteur: </strong> {{$em->Marque_Moteur}}</li>
<li><strong>Num_serie_moteur: </strong> {{$em->Num_serie_moteur}}</li>
<li><strong>Nombre_max_passagers: </strong> {{$em->Nombre_max_passagers}}</li>
<li><strong>Date_armement: </strong> {{$em->Date_armement}}</li>
<li><strong>Identifiant: </strong> {{$em->id_prop}}</li>
<li><strong>Date_pv_inspection:</strong>  {{$em->Date_pv_inspection}}</li>
<li><strong>Date_pv_inspection:</strong>  {{$em->id_prop}}</li>
<li><strong>Date_pv_inspection:</strong>  {{$em->id_em}}</li>
<li><strong>Date_pv_inspection:</strong>  {{$em->Motif}}</li>








@endsection