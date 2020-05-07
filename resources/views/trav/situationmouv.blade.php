@extends('prop.papa')








@section('contenu')


<table class="table table-bordered table-primary">
    <thead>
      <tr>

        <th scope="col">Nom_Embarcation</th>
        <th scope="col">Nom_Propriétaire</th>
        <th scope="col">Poste_Affecter</th>
        <th scope="col">Mouvement</th>

       
    
      </tr>
    </thead>
    <tbody>
    
      @foreach($data as $row)
<tr>
      <td> {{$row->Nom_Embarcation}} </td>
<td>{{$row->Nom}} </td>
      <td>{{$row->Numero_Post}} </td>
      <td>{{$row->Nature_Mouvment}} </td>
</tr>
@endforeach
    </tbody>
</table>


@stop