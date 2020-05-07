@extends('prop.papa')








@section('contenu')


<table class="table table-bordered table-danger">
    <thead>
      <tr>

        <th scope="col" style="color:blue">Nom_Embarcation</th>
        <th scope="col" style="color:blue">Nom_Propriétaire</th>
        <th scope="col" style="color:blue">Poste_Affecter</th>
        <th scope="col" style="color:blue">Mouvement</th>

       
    
      </tr>
    </thead>
    <tbody>
    
      @foreach($w as $row)
<tr>
      <td> {{$row->Nom_Embarcation}} </td>
      <td>{{$row->Nom}}</td>
      <td>{{$row->Numero_Post}} </td>
      <td>{{$row->Nature_Mouvment}} </td>
</tr>
@endforeach
    </tbody>
</table>


@stop