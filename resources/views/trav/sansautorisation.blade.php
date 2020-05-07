@extends('prop.papa')








@section('contenu')


<table class="table table-bordered table-primary">
    <thead>
      <tr>

        <th scope="col" style="color:red">Nom_Embarcation</th>
        <th scope="col" style="color:red">Nom_Propriétaire</th>
        <th scope="col" style="color:red">Poste_Affecter</th>
        <th scope="col" style="color:red">Mouvement</th>

       
    
      </tr>
    </thead>
    <tbody>
    
      @foreach($s as $row)
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