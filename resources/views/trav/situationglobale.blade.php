@extends('prop.papa')








@section('contenu')


<table class="table table-bordered table-primary">
    <thead>
      <tr>

        <th scope="col" style="color:green">Nom_Embarcation</th>
        <th scope="col" style="color:green">N°Immatriculation</th>
        <th scope="col" style="color:green">Nom_Propriétaire</th>
        <th scope="col" style="color:green">Poste_Affecter</th>
        <th scope="col" style="color:green">Mouvement</th>

       
    
      </tr>
    </thead>
    <tbody>
    
      @foreach($situation as $row)
<tr>
      <td> {{$row->Nom_Embarcation}} </td>
      <td>{{$row->Immatriculation}}</td>
        <td>{{$row->Nom}} </td>
      <td>{{$row->Numero_Post}} </td>
      <td>{{$row->Nature_Mouvment}} </td>
</tr>
@endforeach
    </tbody>
</table>


@stop