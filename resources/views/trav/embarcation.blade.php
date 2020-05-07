@extends('prop.papa')

@section('contenu')
 
 <table class="table table-bordered table-success">

        <thead>
            <tr>
        
              <th scope="col" style="color:blue">Nom_Embarcation:</th>
              <th scope="col" style="color:blue">Type: </th>
              <th scope="col" style="color:blue">Immatriculation:</th>
              <th scope="col" style="color:blue">Tonnage_brut:</th>
              <th scope="col" style="color:blue">Longueur_hors_tout:</th>
              <th scope="col" style="color:blue" >Creux:</th>
              <th scope="col" style="color:blue">Largeur_hors_tout:</th>
              <th scope="col" style="color:blue" >Date_construction</th>
              <th scope="col" style="color:blue" >Type_Moteur</th>
            </tr>
          
          </thead>
          <tbody>
            <tr>
              <th scope="row">{{$em->Nom_Embarcation}}</th>
                <td scope="col">{{$em->Type}}</td>
                <td>{{$em->Immatriculation}}</td>
                <td>{{$em->Tonnage_brut}}</td>
                <td>{{$em->Longueur_hors_tout}}</td>
                <td>{{$em->Creux}}</td>
                <td>{{ $em->Largeur_hors_tout}}</td>
                <td>{{$em->Date_construction}}</td>
                <td> {{$em->Type_moteur}}</td>
            </tr>
          </tbody>
        </table>
      <table class="table table-bordered table-success" style="margin:0">
            <thead>
                <tr> 
              <th scope="col" style="color:blue">Puissance_moteur</th>
              <th scope="col" style="color:blue">Marque_Moteur</th>
              <th scope="col" style="color:blue">Num_serie_moteur</th>
              <th scope="col" style="color:blue">Nombre_max_passagers</th>
              <th scope="col" style="color:blue">Date_armement</th>
              <th scope="col" style="color:blue">Date_pv_inspection</th>
              <th scope="col" style="color:blue">Identifiant</th>
            </tr>
            </thead>
        <tbody>
            <td> {{$em->Puissance_moteur}}</td>
            <td> {{$em->Marque_Moteur}}</td>
            <td>{{$em->Num_serie_moteur}}</td>
            <td>{{$em->Nombre_max_passagers}}</td>
            <td>{{$em->Date_armement}}</td>
            <td> {{$em->prop_id}} </td>
           <td>  {{$em->Date_pv_inspection}}</td>
        </tbody>
        </table>
    

        <div class="btn-group btn-group-justified">
<a href="{{route('form.create',[$em->id])}}"  class="btn btn-primary">changer</a>
<a href="{{route('init.post',[$em->id])}}"   class="btn btn-warning">Post initial</a>
<a href="{{route('inits.post',[$em->id])}}"  class="btn btn-dark">tout les postes</a>
<a href="{{route('mouvement.mv',[$em->id])}}" class="btn btn-danger">Etat</a>
          </div>

    
</ul>



@endsection