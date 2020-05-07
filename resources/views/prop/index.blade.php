@extends('prop.papa')


@section('contenu')




</div>
</div>

</div>

@if(session()->has('f'))

<div class="alert alert-success" >
{{session()->get('f')}}
</div>
@endif



<table class="table table-hover table-bordered table-primary" style="margin:0">
    <thead>
      <tr>
      <th scope="col">id</th>

        <th scope="col">Nom</th>
        <th scope="col">Prénom</th>
        <th scope="col">Date_Naissance</th>
        <th scope="col">Lieu_Naissance</th>
        <th scope="col">Adresse</th>
        <th scope="col">téléphone</th>
        <th scope="col">Action1</th>
        <th scope="col">Action2</th>
        <th scope="col">Action 3</th>
        <th scope="col">Action4</th>


        

      </tr>
    </thead>
    <tbody>

        @foreach ($ps as $ps) 
      <tr>
      <th scope="row">{{$ps->id}}</th>
          <td scope="col">{{$ps->Nom}}</td>
          <td>{{$ps->Prénom}}</td>
          <td>{{$ps->Date_Naissance}}</td>
          <td>{{$ps->Lieu_Naissance}}</td>
          <td>{{$ps->Téléphone}}</td>
          <td>{{$ps->Adresse}}</td>
      <td>
        
        <a href="{{route('copropi.coprop',[$ps->id])}}"> <button type="button" class="btn btn-dark">Copropriétaire</button></a>
      </td>
      <td>
            

   <a href="{{route('liste.edit',[ $ps->id])}}"  class="btn btn-primary">Modifer</a>
  

      </td>
      <form method="POST" action="{{route('liste.destroy',[$ps->id])}}" onsubmit="return confirm('ete vous sur?')">
        <input type="hidden" name="_method" value="DELETE">
      
        {{@csrf_field()}}
      
  <td>
  
   <button type="submit" id="ff" class="btn btn-danger">suprimer</button>
      <td>
        
          <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
            Embarcation<span class="caret"></span></button>
            <ul class="dropdown-menu" role="menu">
              <li><a href="{{route('zizou.embarcation',[$ps->id])}}"> <Strong>Voir L'embarcation</Strong></a></li>
              <li><a href=""><strong>Ajouter une Embarcation</strong></a></li>
            </ul>
          </div>
          
        </td>
    </td>

      </tr>
@endforeach
      
    </tbody>
  </table>
  <div>
    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
      Nouveau<span class="caret"></span></button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="{{route('liste.create',[$ps->id])}}"><strong>Propriétaire</strong></a></li>
        <li> <a href="{{route('copropcree.cree',[$ps->id])}}"><strong>Copropriétaire</strong></a></li>
      </ul>
    </div> 

   




  @include('sweetalert::alert')
@endsection