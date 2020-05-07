@extends('prop.papa');


@section('contenu')



<table class="table table-bordered table-primary">

<thead>
    <tr>

      <th scope="col">Id_Embarcation</th>
      <th scope="col">Numéro_Poste</th>
      <th scope="col">Date_Affectation</th>
      <th scope="col">Date_Signature_Convention</th>
      <th scope="col" style="color:red">Date_Changement</th>
      <th scope="col" style="color:red">Motif</th>
      
 
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$post->embarcation_id}}</th>
        <td scope="col">{{$post->Numero_Post}}</td>
        <td>{{$post->Date_affectation}}</td>
        <td>{{$post->Date_Signature}}</td>
        <td>{{$post->Date_changement}}</td>
        <td>{{$post->Motif}}</td>
    </tr>
  </tbody>
</table>
<td><a href="{{route('changerpost.edit',[$post->id])}}"><td><button type="submit" class="btn btn-success">Changer</button></td></a></td>



@include('sweetalert::alert')
@stop